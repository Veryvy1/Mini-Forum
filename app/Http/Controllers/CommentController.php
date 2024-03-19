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
        $comment = $request->validate([
            'comment' => 'required|string', // Sesuaikan dengan aturan validasi yang Anda butuhkan
            'picture' => 'nullable|image', // Validasi untuk file gambar
        ]);

        // Parsing teks dari Summernote (jika Anda menggunakan Summernote)
        // Tidak perlu mengubah ini jika Anda tidak menggunakan Summernote
        $dom = new DOMDocument();
        $dom->loadHTML($comment['comment'], LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $pictures = $dom->getElementsByTagName('img');

        foreach ($pictures as $key => $img) {
            $data = base64_decode(explode(',', explode(',', $img->getAttribute('src'))[1])[1]);
            $picture_name = "/uploads/" . time() . $key . '.png';
            Storage::put('public' . $picture_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $picture_name);
        }

        // Simpan gambar dari formulir jika ada
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $picture_path = $picture->store('public/images'); // Simpan gambar ke dalam folder "public/images"
        }

        // Simpan komentar ke database
        $commentModel = new Comment();
        $commentModel->content_id = $contentId;
        $commentModel->user_id = auth()->id();
        $commentModel->comment = $dom->saveHTML(); // Menggunakan teks yang telah dimodifikasi
        $commentModel->picture = isset($picture_path) ? $picture_path : null; // Simpan path gambar jika ada
        $commentModel->save();

        return redirect()->back()->with('success', 'successfully commented');
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

        $localFilePath = public_path('storage/' . $comment->picture);
        if (File::exists($localFilePath)) {
            File::delete($localFilePath);
        }
        $comment->delete();

        return redirect()->back()->with('success', 'Comment successfully deleted');

    }
}
