<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContectRequest;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Comment;
use App\Models\Kategori;
use App\Models\Like;
use DOMDocument;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
Use Illuminate\Database\Eloquent\ModelNotFoundException;

class ContentController extends Controller
{

    public function contentMore(Request $request, $id)
    {
        $contentGet = Content::with('likes')->where('id', $id)->get();
        $user = auth()->user();
        $commentGet = Comment::with('comment')->where('id', $id)->count();
        $comment = Comment::find($id);
        $contentA = Content::all();
        return view('allcontent', compact('contentGet', 'user', 'content', 'contentA','commentGet'));
    }
    public function content(Request $request, $id)
    {
        $contentGet = Content::with('likes')->where('id', $id)->get();
        $user = auth()->user();
        $commentGet = Comment::with('comment')->where('id', $id)->count();
        $comment = Comment::find($id);
        $contentA = Content::all();
        return view('home', compact('contentGet', 'user', 'content', 'contentA','commentGet'));
    }
    public function contentruser(Request $request, $id)
    {
        $contentGet = Content::with('likes')->where('id', $id)->get();
        $user = auth()->user();
        $commentGet = Comment::with('comment')->where('id', $id)->count();
        $comment = Comment::find($id);
        $contentA = Content::all();
        return view('profile', compact('contentGet', 'user', 'content', 'contentA','commentGet'));
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
        try {
            // $gambar = $request->file('gambar');
            // $path = Storage::disk('public')->put('content', $gambar);

            $user_id = auth()->id();

            $deskripsi = $request->input('deskripsi');

            $dom = new DOMDocument();
            $dom->loadHTML($deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('im');

            foreach ($images as $key => $img) {
                $data = base64_decode(explode(',', explode(',', $img->getAttribute('src'))[1])[1]);
                $images_name = "/uploads" . time() . $key . '.png';
                Storage::put('public' . $images_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $images_name);
            }

            $gambar = $request->file('gambar');
            $path = Storage::disk('public')->put('content', $gambar);

            Content::create([
                'judul' => $request->input('judul'),
                'deskripsi' => $dom->saveHTML(),
                'kategori_id' => $request->input('kategori_id'),
                'gambar' => $path,
                'user_id' => auth()->id(),
            ]);


            return redirect()->route('content.index')->with('success', 'Content added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function storeForUser(ContectRequest $request)
    {
        try {
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
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
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
        $comments = Comment::where('content_id', $id)->get();

        $commentsCount = $comments->count();

        $content->loadCount('likes');

        $likes = Like::where('user_id', auth()->user()->id)
                        ->where('content_id', $id)
                        ->first();


        return view('admin.detailcontent', compact('content', 'comments', 'commentsCount', 'likes'));
    }

    public function edit(string $id)
    {
        $content = Content::find($id);
        $kategori = Kategori::all();
        return view('content',compact('content','kategori'));
    }

    public function update(ContectRequest $request, string $id)
    {
        try {

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
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function destroy(string $id)
    {
        try {
            $content = Content::findOrFail($id);

            Comment::where('content_id', $content->id)->delete();
            Like::where('content_id', $content->id)->delete();

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

