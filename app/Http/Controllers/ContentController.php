<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{

    public function index()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('test', compact('content','kategori'));
    }


    public function create()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('test', compact('content'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|image',
            'kategori_id' => 'required'
        ],[
            'judul.required'=>'Title must be filled in.',
            'deskripsi.required'=>'Description must be filled in.',
            'gambar.required'=>'Picture must be filled in.',
            'gambar.image'=>'Must be filled with images.',
            'kategori_id.required'=>'Category must be filled in.',
        ]);

        $dataToStore = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'gambar' => $request->hasFile('gambar') ? $request->file('gambar')->store('content', 'public') : null,
        ];

        Content::create($dataToStore);
        return redirect()->route('test');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $content = Content::find($id);
        $kategori = Kategori::all();
        return view('test',compact('content','kategori'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|image',
            'kategori_id'=>'required'
        ],[
            'judul.required'=>'Title must be filled in.',
            'deskripsi.required'=>'Description must be filled in.',
            'gambar.required'=>'Picture must be filled in.',
            'gambar.image'=>'Must be filled with images.',
            'kategori_id.required'=>'Category must be filled in.',
        ]);

        $content = Content::findOrFail($id);

        if (!$content) {
            return redirect()->route('content');
        }

        $dataToUpdate = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori_id'),
        ];

        if ($request->hasFile('gambar')) {
            $dataToUpdate['gambar'] = $request->file('gambar')->store('content', 'public');
        }

        $content->update($dataToUpdate);

        return redirect()->route('content');
    }


    public function destroy(string $id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        return redirect()->route('test');
    }
}
