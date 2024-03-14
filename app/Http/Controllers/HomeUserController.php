<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Kategori;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeUserController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ccontent = $request->input('search');
            $content = Content::where('judul', 'LIKE', "%$ccontent%")->get();
        } else {
            $content = Content::take(99)->get();
        }

        $likesCount = [];
        $commentCount = [];

        foreach ($content as $post) {
            $likesCount[$post->id] = Like::where('content_id', $post->id)->count();
            $commentCount[$post->id] = Comment::where('content_id', $post->id)->count();
        }

        $kategori = Kategori::all();
        $likes = Like::where('user_id', Auth::id())->first();

        return view('home', compact('kategori', 'content', 'likesCount', 'likes', 'commentCount'));
    }

    public function filter(Request $request)
    {
        $kategori = Kategori::all();
        $user = auth()->user();
        $kategori_ids = $request->input('kategori_id');

        $query = Content::query()->with('user'); // Memuat relasi 'user'

        if (!empty($kategori_ids)) {
            $query->whereIn('kategori_id', $kategori_ids);
        }

        $content = $query->get();

        return view('home', compact('content', 'user', 'kategori', 'kategori_ids'));
    }
}
