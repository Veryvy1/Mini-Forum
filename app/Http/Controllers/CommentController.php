<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use App\Models\User;
use App\Models\Notification;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use DOMDocument;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function commentId(Request $request, $id)
    {
        $notifications = $this->getNotifications();
        $notificationCount = $notifications->count();
        $commentGet = Comment::where('id', $id)->get();
        $user = auth()->user();
        $content = Content::find($id);
        $comment = Comment::where('content_id', $id)->orderBy('created_at', 'desc')->get();
        $commentAll = Comment::where('content_id', $id)->count();
        $profil = User::find($user->id)->profil;
        return view('user.comment', compact('commentGet','user','content','comment','commentAll', 'notifications','notificationCount', 'profil'));
    }

    private function getNotifications()
    {
        // Mengambil notifikasi like dan komentar terbaru untuk konten pengguna saat ini
        $userNotifications = Notification::select('notifications.*')
            ->join('contents', 'notifications.content_id', '=', 'contents.id')
            ->where('contents.user_id', Auth::id())
            ->whereIn('notifications.type', ['like', 'comment'])
            ->orderBy('notifications.created_at', 'desc')
            ->get();

        // Mengambil notifikasi balasan (reply) terbaru yang merupakan balasan untuk komentar pada konten pengguna saat ini
        $replyNotifications = Notification::select('notifications.*')
            ->join('comments', 'notifications.comment_id', '=', 'comments.id')
            ->join('contents', 'comments.content_id', '=', 'contents.id')
            ->where(function ($query) {
                $query->where('comments.user_id', Auth::id()) // Memfilter balasan yang dikirim oleh pengguna saat ini
                    ->orWhere('contents.user_id', Auth::id()); // Menambahkan filter untuk pemilik konten dari konten yang dikomentari
            })
            ->where('notifications.type', 'reply')
            ->orderBy('notifications.created_at', 'desc')
            ->get();

        // Menggabungkan notifikasi ke dalam satu koleksi
        $notifications = $userNotifications->merge($replyNotifications);

        // Mengurutkan notifikasi berdasarkan waktu pembuatan
        $notifications = $notifications->sortByDesc('created_at');

        return $notifications;
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

public function store(CommentRequest $request, $contentId)
{
    try {
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

        // Mencari konten terkait untuk memeriksa pemilik konten
        $content = Content::find($contentId);
        if ($content && $content->user_id !== $user_id) {
            // Jika pemilik konten bukan pengguna yang sedang mengomentari, buat dan simpan notifikasi "comment"
            Notification::create([
                'content_id' => $contentId,
                'user_id' => $user_id,
                'type' => 'comment',
            ]);
        }

        $commentModel = new Comment();
        $commentModel->content_id = $contentId;
        $commentModel->user_id = $user_id;
        $commentModel->comment = $comment;
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

    $dom = new DOMDocument();
    $dom->loadHTML($comment->comment, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $imagePath = public_path() . $img->getAttribute('src');
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    $comment->delete();

    return redirect()->back()->with('success', 'Comment successfully deleted');
}
}
