<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContectRequest;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Comment;
use App\Models\Kategori;
use App\Models\Like;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use DOMDocument;
Use Illuminate\Database\Eloquent\ModelNotFoundException;

class ContentController extends Controller
{

    public function contentId(Request $request, $id)
{
    $contentGet = Content::with('likes')->where('id', $id)->get();
    $user = auth()->user();
    $commentGet = Comment::with('comment')->where('id', $id)->count();
    $comment = Comment::find($id);
    $contentA = Content::all();
    return view('home', compact('contentGet', 'user', 'content', 'contentA','commentGet'));
}
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ccontent = $request->input('search');
            $content = Content::where('judul', 'LIKE', "%$ccontent%")->withCount('likes')->get();
        } else {
            $content = Content::withCount('likes')->get();
        }

        $kategori = Kategori::all();
        $likes = Like::where('user_id', auth()->user()->id)->first();

        return view('admin.content', compact('content', 'kategori', 'likes'));
    }


    public function createForAdmin()
    {
        $content = Content::all();
        $kategori = Kategori::all();
        return view('content', compact('content','kategori'));
    }

    public function createForUser($id)
    {
        $content = Content::all();
        $kategori = Kategori::all();

        return view('', compact('content','kategori'));
    }


    public function storeForAdmin(ContectRequest $request)
    {
        $gambar = $request->file('gambar');
        $path = Storage::disk('public')->put('content', $gambar);

        $user_id = auth()->id();

        $content = new Content();
        $content->user_id = auth()->id(); 
        $content->judul = $request->input('judul');
        $content->deskripsi = $request->input('deskripsi');
        $content->kategori_id = $request->input('kategori_id');
        $content->gambar = $path;
        $content->save();


        return redirect()->route('content.index')->with('success', 'Content added successfully');
    }

    public function storeForUser(ContectRequest $request)
    {
        $gambar = $request->file('gambar');
        $path = Storage::disk('public')->put('content', $gambar);

        $user_id = auth()->id();

        $content = new Content();
        $content->user_id = auth()->id();
        $content->judul = $request->input('judul');
        $content->deskripsi = $request->input('deskripsi');
        $content->kategori_id = $request->input('kategori_id');
        $content->gambar = $path;
        $content->save();

        return redirect()->back()->with('success', 'Content added successfully');
    }



    public function show(string $id)
    {
        $content = Content::findOrFail($id);
        $comments= $content->comments()->with('user')->get();
        return view('comment', compact('content','comments'));
    }

    public function detail($id)
    {
        $content = Content::findOrFail($id);
        $comments = Comment::where('content_id', $id)->get(); // Mengambil komentar berdasarkan ID konten
        return view('admin.detailcontent', compact('content','comments'));
    }


// public function detailcomment($contentId)
// {
//     $content = Content::findOrFail($contentId);
//     $comments = $content->comments; // Pastikan relasi antara Content dan Comment telah didefinisikan
//     return view('admin.detailcontent', compact('comments'));
// }





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
