<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeRequest;
use App\Http\Requests;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Notification;

class LikeController extends Controller
{
    public function like(Request $request, $id)
    {
        $content = Content::findOrFail($id);
        $user = auth()->user();
        if ($content->likes()->where('user_id', $user->id)->exists()) {
            $content->likes()->where('user_id', $user->id)->delete();
            return response()->json(['message' => 'Unlike berhasil']);
        } else {
            $like = new Like(['user_id' => $user->id]);
            $content->likes()->save($like);
            return response()->json(['message' => 'Like berhasil']);
        }
    }

    public function like2(Request $request, $contentId)
    {
        $user = auth()->user();
        $content = Content::findOrFail($contentId);
        if (!$content->likes()->where('user_id', $user->id)->exists()){
            $like = new Like();
            $like->user_id = $user->id;
            $content->likes()->save($like);
        }
        return redirect()->route('');

    }
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(LikeRequest $request)
    {
        $contentId = $request->content_id;
        $userId = auth()->user()->id;

        $existingLike = Like::where('user_id', $userId)
                            ->where('content_id', $contentId)
                            ->first();

        if ($existingLike) {
            return back()->with('error', 'Anda hanya dapat memberikan suka sekali.');
        }

        $contentId = $request->content_id;
        $userId = auth()->user()->id;
        Notification::create([
            'user_id' => auth()->user()->id
        ]);
        $existingLike = Like::where('user_id', $userId)
                            ->where('content_id', $contentId)
                            ->first();

        if ($existingLike) {
            return back()->with('error', 'Anda hanya dapat memberikan suka sekali.');
        }

        Like::create([
            'like' => '1',
            'user_id' => $userId,
            'content_id' => $contentId
        ]);
        return back();
    }
    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(Like $like)
    {
        $contectId = $like->content_id;
        $like->delete();
        return back()->with('success','Successfully Undo Like .');
    }
}
