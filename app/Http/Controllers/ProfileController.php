<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        return view('user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
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

            // Hapus gambar lama jika ada
            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }
        }
        if ($request->hasFile('bgprofile')) {
            $userData['bgprofile'] = $request->file('bgprofile')->store('bgprofile', 'public');

            // Hapus gambar lama jika ada
            if ($user->bgprofile) {
                Storage::disk('public')->delete($user->bgprofile);
            }
        }

        $user->update($userData);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

}
