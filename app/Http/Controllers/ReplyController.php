<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Content;
use App\Models\User;
use App\Http\Requests\ReplyRequest;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function replyId(Request $request, $id)
    {
        $commentGet = Comment::where('id', $id)->get();
        $user = auth()->user();
        $comment = Comment::findOrFail($id);
        $reply = Reply::where('comment_id', $id)->orderBy('created_at', 'desc')->get();
        $replyAll = Reply::where('comment_id', $id)->count();
        $profil = User::find($user->id)->profil;
        return view('user.reply', compact('commentGet','user','comment','reply','replyAll','profil'));
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
    public function store(ReplyRequest $request, $commentId)
    {
        $reply = new Reply();
        $maxLength = 255;
        $reply->reply = substr($request->reply, 0, $maxLength);
        $reply->comment_id = $commentId;
        $reply->user_id = auth()->id();
        $reply->reply = $request->reply;
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('reply', 'public');
            $reply->picture = $path;
        }
        $reply->save();

        return redirect()->back()->with('success','Successful reply');
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
    public function destroy(Request $request)
    {
        // $commentId = $request->comment_id;
        // $replies = Reply::where('comment_id', $commentId)->get();
        // foreach ($replies as $reply) {
        //     $reply->delete();
        // }
        $id = $request->reply;
        $reply = Reply::findOrFail($id);
        $reply->delete();
        return back();
    }
}
