<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use App\Models\User;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use DOMDocument;

class CommentController extends Controller
{
    public function commentId(Request $request, $id)
    {
        $commentGet = Comment::where('id', $id)->get();
        $user = auth()->user();
        $content = Content::find($id);
        $comment = Comment::where('content_id', $id)->orderBy('created_at', 'desc')->get();
        $commentAll = Comment::where('content_id', $id)->count();
        $profil = User::find($user->id)->profil;
        return view('user.comment', compact('commentGet','user','content','comment','commentAll','profil'));

    }

    public function index()
    {
        $comment = Comment::all();
        return view('user.comment', compact('comment'));
    }

    public function create()
    {
        $comment = Comment::all();
        return view('user.comment', compact('comment'));
    }

    public function store(Request $request, $contentId)
    {
        try {
            $request->validate([
                'comment' => 'required|string',
                // 'picture' => 'nullable|image',
            ]);

            $user_id = auth()->id();

            $comment = $request->comment;
            $dom = new DOMDocument();
            $dom->loadHTML($comment, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

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

            $commentModel = new Comment();
            $commentModel->content_id = $contentId;
            $commentModel->user_id = $user_id;
            $commentModel->comment = $comment;
            // $commentModel->picture = $path;
            $commentModel->save();

            return redirect()->back()->with('success', 'Successfully commented');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->comment;
        Reply::where('comment_id', $id)->delete();
        $comment = Comment::findOrFail($id);
        if (Storage::disk('public')->exists($comment->picture)) {
            Storage::disk('public')->delete($comment->picture);
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment successfully deleted');
    }

}
