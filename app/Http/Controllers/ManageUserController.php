<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $oldSearch = $request->input('search');
        if ($request->has('search')) {
            $xusersx = $request->input('search');
            $users = User::where('name', 'LIKE', "%$xusersx%")->paginate(5);
        } else {
            $users = User::paginate(5);
        }
        return view('admin.usermanage', compact('users','oldSearch'));
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
    public function store(Request $request)
    {
        //
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

    public function destroy(string $id)
{
    // Get the user by ID
    $user = User::findOrFail($id);

    // Get all contents owned by the user
    $contents = $user->contents;

    // Check if contents exist and is not null
    if ($contents !== null) {
        // Delete each content
        foreach ($contents as $content) {
            $content->delete();
        }
    }

    // Delete the user
    $user->delete();

    // Redirect with a success message
    return redirect()->route('usermanage.index')->with('success', 'User and associated contents deleted successfully');
}


}
