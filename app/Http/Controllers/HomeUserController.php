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
        // Mengambil notifikasi like dan komentar terbaru untuk konten pengguna saat ini
        $userNotifications = Notification::select('notifications.*')
            ->join('contents', 'notifications.content_id', '=', 'contents.id')
            ->where('contents.user_id', Auth::id())
            ->whereIn('notifications.type', ['like', 'comment'])
            ->orderBy('notifications.created_at', 'desc')
            ->take(5)
            ->get();

        // Mengambil notifikasi balasan (reply) terbaru yang merupakan balasan untuk komentar pada konten pengguna saat ini
        $replyNotifications = Notification::select('notifications.*')
            ->join('comments', 'notifications.comment_id', '=', 'comments.id')
            ->join('contents', 'comments.content_id', '=', 'contents.id')
            ->where(function($query) {
                $query->where('comments.user_id', Auth::id()) // Memfilter balasan yang dikirim oleh pengguna saat ini
                    ->orWhere('contents.user_id', Auth::id()); // Menambahkan filter untuk pemilik konten dari konten yang dikomentari
            })
            ->where('notifications.type', 'reply')
            ->orderBy('notifications.created_at', 'desc')
            ->take(5)
            ->get();

        // Menggabungkan notifikasi ke dalam satu koleksi
        $notifications = $userNotifications->merge($replyNotifications);

        // Mengurutkan notifikasi berdasarkan waktu pembuatan
        $notifications = $notifications->sortByDesc('created_at')->take(5);

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
