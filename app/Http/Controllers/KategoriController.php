<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        return view('test', compact('kategori'));
    }


    public function create()
    {
        $kategori = Kategori::all();
        return view('test', compact('kategori'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'kategori'=>'required',
        ],[
            'kategori.required'=>'Category must be filled in.',
        ]);
        Kategori::create([
            'kategori'=>$request->kategori,
        ]);
        return redirect()->route('test');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $kategori = Kategori::all();
        return view('test',compact('kategori'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
        ],[
            'nama.required'=>'Category must be filled in.',
        ]);

        $kategori = Kategori::findOrFail($id);

        if (!$kategori) {
            return redirect()->route('kategori');
        }

        $dataToUpdate = [
            'nama' => $request->nama,
        ];

        $kategori->update($dataToUpdate);

        return redirect()->route('kategori');
    }


    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('test');
    }
}
