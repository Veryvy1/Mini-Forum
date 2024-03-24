<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ReplyRequest;
use DOMDocument;



use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function replyId(Request $request, $id)
    {
    $user = auth()->user();
    $comment = Comment::findOrFail($id);
    $reply = Reply::where('comment_id', $id)->orderBy('created_at', 'desc')->get();
    $replyAll = Reply::where('comment_id', $id)->count();
    $profil = User::find($user->id)->profil;
    return view('user.reply', compact('comment', 'user', 'reply', 'replyAll', 'profil'));
    }



    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request, $replyId)
    {

        try {
            $user_id = auth()->id();

            $reply = $request->reply;
            $dom = new DOMDocument();
            $dom->loadHTML($reply, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');

            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = "/uploads" . time() . $k . '.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            $comment = $dom->saveHTML();

            $reply = new Reply();
            $reply->reply = $comment;
            $reply->comment_id = $replyId;
            $reply->user_id = $user_id;
            $reply->save();

            return redirect()->back()->with('success', 'Successful reply');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show($id) {
        $comment = Comment::find($id);
        $reply = Reply::where('comment_id', $id)->get();
        $replyAll = $reply->count();

        return view('user.reply', compact('comment', 'reply', 'replyAll'));
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Request $request)
    {
    $id = $request->reply;
    $reply = Reply::findOrFail($id);

    $dom = new DOMDocument();
    $dom->loadHTML($reply->reply, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $imagePath = public_path() . $img->getAttribute('src');
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    $reply->delete();

    return redirect()->back()->with('success', 'Reply successfully deleted');
    }

}
