<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::withCount('Content')->get();
        return view('admin.kategori', compact('kategori'));
    }


    public function create()
    {
        $kategori = Kategori::all();
        return view('kategori', compact('kategori'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|unique:kategoris,kategori',
        ], [
            'kategori.required' => 'Category must be filled in.',
            'kategori.unique' => 'This category already exists.',
        ]);

        Kategori::create([
            'kategori'=>$request->input('kategori'),
            'totalPost' => 0,
        ]);
        return redirect()->route('kategori.index')->with('success','Category added successfully');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $kategori = Kategori::all();
        return view('kategori',compact('kategori'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori'=>'required',
        ],[
            'kategori.required'=>'Category must be filled in.',
        ]);

        $kategori = Kategori::findOrFail($id);

        if (!$kategori) {
            return redirect()->route('kategori');
        }

        $dataToUpdate = [
            'kategori' => $request->kategori,
        ];

        $kategori->update($dataToUpdate);

        return redirect()->route('kategori')->with('success','Categories updated successfully');
    }


    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success','Category successfully deleted');
    }
}
