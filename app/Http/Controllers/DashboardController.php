<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Like;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jkategori = Kategori::count();
        $kategori = Kategori::all();
        $jcontent = Content::count();
        $content = Content::all();

        $content = Content::withCount('likes')->get();
        $likes = Like::where('user_id', auth()->user()->id)->first();

        $totalUsers = User::where('role', 'user')->count();

        return view('admin.index', compact('content', 'kategori', 'jcontent', 'jkategori', 'totalUsers','likes'));
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
