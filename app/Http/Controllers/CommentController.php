<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::all();
        return view('user.comment', compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comment = Comment::all();
        return view('user.comment', compact('comment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $contentId)
    {
        $request->validate([
            'comment' => 'nullable'
        ]);
        $comment = new Comment();
        $comment->content_id = $contentId;
        $comment->user_id = auth()->id();
        $comment->comment = $request->comment;
        $comment->save();

        return redirect('home');
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
    public function destroy(string $id)
    {
        //
    }
}
