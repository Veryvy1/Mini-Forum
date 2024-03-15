<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use App\Models\Like;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($id)
    {
        $content = Content::all();
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        return view('user.profile', compact('user','content'));
    }

    public function profil()
    {
        $content = Content::withCount('likes')->get();
        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $likes = Like::where('user_id', auth()->user()->id)->first();
        $totalPosts = Content::where('user_id', $user->id)->count();
        return view('profile', compact('user','content','totalPosts','likes'));
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'nullable|unique:users,name,' . $id,
            'email' => 'nullable|unique:users,email,' . $id,
            'profile' => 'nullable|image',
            'bgprofile' => 'nullable|image',
            'link_fb' => 'nullable',
            'link_ig' => 'nullable',
            'link_twt' => 'nullable',
            'bio' => 'nullable',
        ], [
            'profile.image' => 'Only image files are allowed.',
            'bgprofile.image' => 'Only image files are allowed.',
            'name.unique' => 'Name is already in use',
            'email.unique' => 'Email is already in use',
        ]);

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
