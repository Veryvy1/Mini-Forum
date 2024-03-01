<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{

    public function index()
    {
        $content = Content::all();
        return view('test', compact('content'));
    }


    public function create()
    {
        $content = Content::all();
        return view('test', compact('content'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|image'
        ],[
            'nama.required'=>'Title must be filled in.',
            'deskripsi.required'=>'Description must be filled in.',
            'gambar.required'=>'Picture must be filled in.',
            'gambar.image'=>'Must be filled with images.',
        ]);
        Content::create([
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
        ]);
        return redirect()->route('test');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $content = Content::all();
        return view('test',compact('content'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|image',
        ],[
            'nama.required'=>'Title must be filled in.',
            'deskripsi.required'=>'Description must be filled in.',
            'gambar.required'=>'Picture must be filled in.',
            'gambar.image'=>'Must be filled with images.',
        ]);

        $content = Content::findOrFail($id);

        if (!$content) {
            return redirect()->route('content');
        }

        $dataToUpdate = [
            'nama' => $request->nama,
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
