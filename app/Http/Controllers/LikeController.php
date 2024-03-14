<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLikeRequest;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Like;


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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLikeRequest $request)
    {
        Like::create([
            'like'=>'1',
            'user_id'=>auth()->user()->id,
            'content_id'=>$request->content_id
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        $contectId = $like->content_id;
        $like->delete();
        return back();
    }
}
