<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller
{
    public function commentId(Request $request, $id)
    {
        $commentGet = Comment::where('id', $id)->get();
        $user = auth()->user();
        $content = Content::find($id);
        $comment = Comment::where('content_id', $id)->get();
        $commentAll = Comment::where('content_id', $id)->count();

        return view('user.comment', compact('commentGet','user','content','comment','commentAll'));

    }
    // public function detailcomment($id)
    // {
    //     $content = Content::findOrFail($id);
    //     $comments = $content->comments;

    //     return view('admin.detailcontent', compact('content', 'comments'));
    // }

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
            'comment' => 'required'
        ],[
            'comment.required'=>'COMMENT'
        ]);
        $comment = new Comment();
        $comment->content_id = $contentId;
        $comment->user_id = auth()->id();
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->back();
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
            // $comment = Comment::findOrFail($id);

            // $comment->delete();

            // return redirect()->route('detailcontent.index')->with('success', 'Content successfully deleted');

    }
}
