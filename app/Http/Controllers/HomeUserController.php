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

        $userId = Auth::id();

        $notifications = Notification::select('notifications.*')
        ->join('contents', 'notifications.content_id', '=', 'contents.id')
        ->where('contents.user_id', Auth::id())
        ->orderBy('notifications.created_at', 'desc')
        ->take(5)
        ->get();

        foreach ($notifications as $notification) {
            $notification->type = $notification->type;
            $notification->content->judul = $notification->judul_content;
        }

        return view('home', compact('kategori', 'content', 'likesCount', 'likes', 'commentCount', 'oldSearch', 'notifications'));
    }

    public function show($id)
    {
        $notifications = Notification::all(); // Assuming you retrieve notifications from the database
        $content = Content::findOrFail($id);
        return view('home', compact('content')); // Sesuaikan dengan view yang sesuai
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
