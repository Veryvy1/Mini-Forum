<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContectRequest;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Kategori;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
Use Illuminate\Database\Eloquent\ModelNotFoundException;

class ContentController extends Controller
{


    public function index()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('admin.content', compact('content','kategori'));
    }
    

    public function createForAdmin()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('content', compact('content','kategori'));
    }

    public function createForUser()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('home', compact('content','kategori'));
    }


    public function storeForAdmin(ContectRequest $request)
    {
        $gambar = $request->file('gambar');
        $path = Storage::disk('public')->put('content', $gambar);

        Content::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori_id'),
            'gambar' => $path,
            'dibuat' => 'admin'
        ]);

        return redirect()->route('content.index')->with('success', 'content added successfully');
    }

    public function storeForUser(ContectRequest $request)
    {
        $gambar = $request->file('gambar');
        $path = Storage::disk('public')->put('content', $gambar);

        Content::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori_id' => $request->input('kategori_id'),
            'gambar' => $path,
            'dibuat' => 'user'
        ]);

    return redirect()->back()->with('success', 'Content added successfully');
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


    public function update(ContectRequest $request, string $id)
    {
        $content = Content::findOrFail($id);

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
        try {
            $content = Content::findOrFail($id);

            if (Storage::disk('public')->exists($content->gambar)) {
                Storage::disk('public')->delete($content->gambar);
            }

            $localFilePath = public_path('storage/' . $content->gambar);
            if (File::exists($localFilePath)) {
                File::delete($localFilePath);
            }

            $content->delete();

            return redirect()->route('content.index')->with('success', 'Content successfully deleted');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('content.index')->with('error', 'Content not found');
        }
    }
}
