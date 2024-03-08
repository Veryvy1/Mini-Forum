<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $content = Content::take(3)->get();
        return view('home', compact('kategori','content'));
    }


    public function filter(Request $request)
{
    $kategori = Kategori::all();
    $user = auth()->user();
    $kategori_ids = $request->input('kategori_id');

    $query = DB::table('contents')
        ->select(
            'contents.id',
            'contents.judul',
            'contents.deskripsi',
            'contents.gambar',
            'contents.kategori_id'
        );

    if (!empty($kategori_ids)) {
        $query->whereIn('kategori_id', $kategori_ids);
    }

    $content = $query->get();

    return view('home', compact('content', 'user', 'kategori', 'kategori_ids'));
}


//    } else {
//             $kategori_id = 0;
//         }

    // public function detail(Request $request, $id)
    // {
    //     $totalpesanan = Detailpesanan::where('status', 'keranjang')->get()->count();
    //     $produk = produk::where('id', $id)->get();
    //     $user = auth()->user();
    //     return view('user.produkdetail' , compact('produk', 'id', 'user', 'totalpesanan'));
    // }


    // $content = Content::take(3)->get();
    // $kategori = Kategori::all();
    // $selectedKategoriId = $request->input('kategori');
    // $contentsQuery = Content::query();
    // if ($selectedKategoriId) {
    //     $contentsQuery->where('kategori_id', $selectedKategoriId);
    // }
    // $contentQ = $contentsQuery->get();

    //                return view('home', [
    // 'content' => $content,
    // 'kategori' => $kategori,
    // 'selectedKategoriId' => $selectedKategoriId,
    // 'contentQ' => $contentQ,
    // 'contentsQuery' => $contentsQuery,
    // ]);


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
