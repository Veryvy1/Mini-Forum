<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $content = Content::all();
        $kategori = Kategori::all();
        $content = Content::take(3)->get();
        return view('home', [
            'content' => $content,
            'kategori' => $kategori
        ]);
    }

    public function filter(Request $request)
    {
        $content = Content::take(3)->get();
        $kategori = Kategori::all();
        $selectedKategoriId = $request->input('kategori');
        $contentsQuery = Content::query();
        if ($selectedKategoriId) {
            $contentsQuery->where('kategori_id', $selectedKategoriId);
        }
        $contentQ = $contentsQuery->get();
        // $filteredContent = Content::whereIn('kategori', $selectedKategoriId)->get();

        return view('home',[
        'content' => $content,
        'kategori' => $kategori,
        'selectedKategoriId' => $selectedKategoriId,
        'contentQ' => $contentQ,
        'contentsQuery' => $contentsQuery,
        ]);
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
        $showOrder = Content::select()
        ->orderByDesc()
        ->take(6)
        ->get();
        return view('home',['showOrder'=>$showOrder]);
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
