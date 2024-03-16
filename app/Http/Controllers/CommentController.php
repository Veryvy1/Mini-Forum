<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Content;
use App\Models\User;
use App\Models\Comment;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    public function commentId(Request $request, $id)
    {
        $commentGet = Comment::where('id', $id)->get();
        $user = auth()->user();
        $content = Content::find($id);
        $comment = Comment::where('content_id', $id)->orderBy('created_at', 'desc')->get();
        $commentAll = Comment::where('content_id', $id)->count();
        $profil = User::find($user->id)->profil;
        return view('user.comment', compact('commentGet','user','content','comment','commentAll','profil'));

    }

    public function index()
    {
        $comment = Comment::all();
        return view('user.comment', compact('comment'));
    }

    public function create()
    {
        $comment = Comment::all();
        return view('user.comment', compact('comment'));
    }

    public function store(CommentRequest $request, $contentId)
    {
        try{

        $comment = new Comment();
        $comment->content_id = $contentId;
        $comment->user_id = auth()->id();
        $comment->comment = $request->comment;
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('picture', 'public');
            $comment->picture = $path;
        }
        $comment->save();

        return redirect()->back()->with('success','successfully commented');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->comment;
        Reply::where('comment_id', $id)->delete();
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Comment successfully deleted');
    }

}
