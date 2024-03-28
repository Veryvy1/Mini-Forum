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

   // Mengambil notifikasi terbaru dari admin
   $adminNotifications = Notification::select('notifications.*')
   ->where('notifications.type', 'admin')
   ->orderBy('notifications.created_at', 'desc')
   ->get();

// Menyiapkan array untuk semua notifikasi yang akan ditampilkan
$notifications = collect();

// Grupkan notifikasi admin berdasarkan content_id
$groupedAdminNotifications = $adminNotifications->groupBy('content_id');

// Ambil notifikasi terbaru dari setiap grup
$groupedAdminNotifications->each(function ($group) use ($notifications) {
   $latestAdminNotification = $group->sortByDesc('created_at')->first();
   $notifications->push($latestAdminNotification);
});

// Menggabungkan notifikasi admin dengan notifikasi untuk user saat ini
$userNotifications = Notification::select('notifications.*')
   ->join('contents', 'notifications.content_id', '=', 'contents.id')
   ->where('contents.user_id', Auth::id())
   ->orderBy('notifications.created_at', 'desc')
   ->take(5)
   ->get();

$notifications = $notifications->merge($userNotifications)->sortByDesc('created_at')->take(5);

$notificationCount = $notifications->count();


    return view('home', compact('kategori', 'content', 'likesCount', 'likes', 'commentCount', 'oldSearch', 'notifications','notificationCount'));
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
