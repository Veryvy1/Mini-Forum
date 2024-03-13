<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeUserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ccontent = $request->input('search');
            $content = Content::where('judul', 'LIKE', "%$ccontent%")->get();
        } else {
            $content = Content::take(3)->get();
        }
        $kategori = Kategori::all();
        return view('home', compact('kategori', 'content'));
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

}
