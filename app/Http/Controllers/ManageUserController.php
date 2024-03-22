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
            $searchQuery = $request->input('search');
            $users = User::where('role', 'user')
                ->where('name', 'LIKE', "%$searchQuery%")
                ->paginate(5);
        } else {
            $users = User::where('role', 'user')->paginate(5);
        }
        return view('admin.usermanage', compact('users', 'oldSearch'));
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
    $user = User::findOrFail($id);

    $contents = $user->contents;

    if ($contents !== null) {
        foreach ($contents as $content) {
            $content->delete();
        }
    }

    $user->delete();

    return redirect()->route('usermanage.index')->with('success', 'User and associated contents deleted successfully');
}


}
