<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Kategori;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeUserController extends Controller
{

    public function index(Request $request)
    {
        $oldSearch = $request->input('search');
        if ($request->has('search')) {
            $ccontent = $request->input('search');
            $content = Content::where('judul', 'LIKE', "%$ccontent%")->take(99)->paginate(6);
        } else {
            $content = Content::take(99)->orderBy('created_at', 'desc')->paginate(6);
        }

        $likesCount = [];
        $commentCount = [];

        foreach ($content as $post) {
            $likesCount[$post->id] = Like::where('content_id', $post->id)->count();
            $commentCount[$post->id] = Comment::where('content_id', $post->id)->count();
        }

        $kategori = Kategori::all();
        $likes = Like::where('user_id', Auth::id())->first();

        $notifications = $this->getNotifications();

        $notificationCount = $notifications->count();

        return view('home', compact('kategori', 'content', 'likesCount', 'likes', 'commentCount', 'oldSearch', 'notifications', 'notificationCount'));
    }

    private function getNotifications() {
        // Mengambil notifikasi terbaru dari admin
        $adminNotifications = Notification::select('notifications.*')
            ->orderBy('notifications.created_at', 'desc')
            ->get();

        // Menyiapkan array untuk semua notifikasi yang akan ditampilkan
        $notifications = collect();

        // Iterasi notifikasi
        foreach ($adminNotifications as $notification) {
            // Jika notifikasi adalah notifikasi balasan (reply)
            if ($notification->type === 'reply') {
                // Cari pengguna yang memiliki konten terkait notifikasi balasan
                $contentOwner = Content::find($notification->content_id)->user;

                // Tambahkan pemilik konten ke dalam notifikasi
                if ($contentOwner) {
                    $notifications->push($contentOwner);
                }

                // Cari pengguna yang telah melakukan komentar
                $comment = Comment::find($notification->comment_id);
                if ($comment) { // Periksa apakah komentar ditemukan
                    $commentOwner = $comment->user;
                    if ($commentOwner) { // Periksa apakah pengguna terkait komentar ditemukan
                        $notifications->push($commentOwner);

                        // Jika pengguna yang membalas komentar adalah pemilik konten atau pemilik konten sendiri membalas, tambahkan juga pengguna yang memiliki konten dan pengguna yang memiliki komentar
                        if (($comment->user_id === Auth::id() && $comment->content->user_id !== Auth::id()) || $comment->content->user_id === Auth::id()) {
                            $notifications->push($contentOwner);
                            $notifications->push($commentOwner);
                        }
                    }
                }
            }
        }

        // Menggabungkan notifikasi admin dengan notifikasi untuk user saat ini
        $userNotifications = Notification::select('notifications.*')
            ->join('contents', 'notifications.content_id', '=', 'contents.id')
            ->where('contents.user_id', Auth::id())
            ->orderBy('notifications.created_at', 'desc')
            ->take(5)
            ->get();

        $notifications = $notifications->merge($userNotifications)->sortByDesc('created_at')->take(5);

        return $notifications;
    }

    public function show($id)
    {
        $notifications = Notification::all();
        $content = Content::findOrFail($id);
        return view('home', compact('content'));
    }

    public function filter(Request $request)
    {
        $oldSearch = $request->input('search');
        $kategori = Kategori::all();
        $user = Auth::user();
        $kategori_ids = $request->input('kategori_id');

        $query = Content::query()->with('user');

        if (!empty($kategori_ids)) {
            $query->whereIn('kategori_id', $kategori_ids);
        }

        $content = $query->paginate(6);

        $likesCount = [];
        $commentCount = [];

        foreach ($content as $post) {
            $likesCount[$post->id] = Like::where('content_id', $post->id)->count();
            $commentCount[$post->id] = Comment::where('content_id', $post->id)->count();
        }

        $likes = Like::where('user_id', Auth::id())->first();

        $notifications = Notification::where('user_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->take(5) // Ambil lima notifikasi terbaru
        ->get();

        return view('home', compact('content', 'user', 'kategori', 'kategori_ids', 'oldSearch', 'likesCount', 'likes', 'commentCount', 'notifications'));
    }
}
