<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Content;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function replyId(Request $request, $id)
    {
        $commentGet = Comment::where('id', $id)->get();
        $user = auth()->user();
        $comment = Comment::findOrFail($id);
        $reply = Reply::where('comment_id', $id)->get();
        $replyAll = Reply::where('comment_id', $id)->count();
        return view('user.reply', compact('commentGet','user','comment','reply','replyAll'));
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
    public function store(Request $request, $commentId)
    {
        $request->validate([
            'reply' => 'required'
        ],[
            'reply.required'=>'input your reply'
        ]);
        $reply = new Reply();
        $reply->comment_id = $commentId;
        $reply->user_id = auth()->id();
        $reply->reply = $request->reply;
        $reply->save();

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
        //
    }
}
