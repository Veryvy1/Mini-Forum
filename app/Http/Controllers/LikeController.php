<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLikeRequest;
use Illuminate\Http\Request;
use App\Models\Like;


class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(StoreLikeRequest $request)
    {
        Like::create([
            'like'=>'1',
            'user_id'=>auth()->user()->id,
            'content_id'=>$request->content_id
        ]);
        return back();
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
    public function destroy(Like $like)
    {
        $contectId = $like->content_id;
        $like->delete();
        return back();
    }
}
