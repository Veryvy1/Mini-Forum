<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Like;
use App\Models\Comment;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($id)
    {
        $content = Content::all()->paginate(3);
        $kategori = Kategori::all();
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        return view('user.profile', compact('user','content','kategori'));
    }

    public function profil()
    {
        $kategori = Kategori::all();
        $content = Content::withCount('likes','comment')->paginate(3);
        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $likes = Like::where('user_id', auth()->user()->id)->first();
        $comment = Comment::where('user_id', auth()->user()->id)->first();
        $totalPosts = Content::where('user_id', $user->id)->count();
        return view('profile', compact('user','content','totalPosts','likes','comment','kategori'));
    }


    public function edit(string $id)
    {
        $content = Content::all();
        $kategori = Kategori::all();
        $user = User::find($id);
        return view('user.profile', compact('user','content','kategori'));
    }

    public function update(ProfileRequest $request, string $id)
    {
        $userData = $request->except(['_token', '_method']);

        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        if ($request->hasFile('profile')) {
            $userData['profile'] = $request->file('profile')->store('profile', 'public');

            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }
        }

        if ($request->hasFile('bgprofile')) {
            $userData['bgprofile'] = $request->file('bgprofile')->store('bgprofile', 'public');

            if ($user->bgprofile) {
                Storage::disk('public')->delete($user->bgprofile);
            }
        }

        $user->update($userData);

        return redirect()->route('profile.profil')->with('success', 'Profile updated successfully.');
    }
}
