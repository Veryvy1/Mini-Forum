<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Kategori;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{

    public function index()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('admin.content', compact('content','kategori'));
    }


    public function create()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('content', compact('content','kategori'));
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

        $gambar = $request->file('gambar');
        $path = Storage::disk('public')->put('images', $gambar);

        Content::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori_id'),
            'gambar' => $path,
        ]);

        return redirect()->route('content.index')->with('success', 'content added successfully');
    }


    public function show(string $id)
    {
        $content = Content::findOrFail($id);
        $comments= $content->comments()->with('user')->get();
        return view('comment', compact('content','comments'));
    }


    public function edit(string $id)
    {
        $content = Content::find($id);
        $kategori = Kategori::all();
        return view('content',compact('content','kategori'));
    }


    public function update(Request $request, string $id)
    {
        $content = Content::findOrFail($id);

        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'image',
            'kategori_id'=>'required'
        ],[
            'judul.required'=>'Title must be filled in.',
            'deskripsi.required'=>'Description must be filled in.',
            // 'gambar.required'=>'Picture must be filled in.',
            'gambar.image'=>'Must be filled with images.',
            'kategori_id.required'=>'Category must be filled in.',
        ]);

        $oldPhotoPath = $content->gambar;

        $dataToUpdate = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori_id'),
        ];

        if ($request->hasFile('gambar')) {
            $foto = $request->file('gambar');
            $path = $foto->store('content', 'public');
            $dataToUpdate['gambar'] = $path;
        }

        $content->update($dataToUpdate);

        if ($content->wasChanged('gambar') && $oldPhotoPath) {
            Storage::disk('public')->delete($oldPhotoPath);
            $localFilePath = public_path('storage/' . $oldPhotoPath);
            if (File::exists($localFilePath)) {
                File::delete($localFilePath);
            }
        }

        return redirect()->route('content.index')->with('success', 'content updated successfully');
    }


    public function destroy(string $id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        return redirect()->route('content.index')->with('success', 'content successfully deleted');
    }
}
