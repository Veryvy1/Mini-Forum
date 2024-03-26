<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContectRequest;
use App\Http\Requests\EditcontentRequest;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Comment;
use App\Models\Kategori;
use App\Models\Like;
use DOMDocument;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
Use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;


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

    public function filter(Request $request)
    {
        $oldSearch = $request->input('search');
        $kategori = Kategori::all();
        $user = Auth::user();
        $kategori_ids = $request->input('kategori_id');

        $query = Content::query()->with('user');

        if (!empty($kategori_ids)) {
            $query->whereIn('kategori_id', $kategori_ids);
        }

        $content = $query->get();

        $likesCount = [];
        $commentCount = [];

        foreach ($content as $post) {
            $likesCount[$post->id] = Like::where('content_id', $post->id)->count();
            $commentCount[$post->id] = Comment::where('content_id', $post->id)->count();
        }

        $likes = Like::where('user_id', Auth::id())->first();

        return view('admin.content', compact('content', 'user', 'kategori', 'kategori_ids', 'oldSearch', 'likesCount', 'likes', 'commentCount'));
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ccontent = $request->input('search');
            $content = Content::where('judul', 'LIKE', "%$ccontent%")->withCount(['likes', 'comment'])->get();
        } else {
            $content = Content::withCount(['likes', 'comment'])->get();
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
        $gambar = $request->file('gambar');
        $path_gambar = null;
        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('content', $gambar);
        }

        $user_id = auth()->id();
        $deskripsi = $request->deskripsi;

        if (!empty($deskripsi)) {
            $dom = new \DomDocument();
            $dom->loadHtml($deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = "/uploads" . time() . $k . '.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            $deskripsi = $dom->saveHTML();
        }

        Content::create([
            'user_id' => $user_id,
            'judul' => $request->input('judul'),
            'deskripsi' => $deskripsi,
            'kategori_id' => $request->input('kategori_id'),
            'gambar' => $path_gambar,
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
        $path_gambar = null;

        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('content', $gambar);
        }

        $user_id = auth()->id();
        $deskripsi = $request->deskripsi;

        if (!empty($deskripsi)) {
            $dom = new \DomDocument();
            $dom->loadHtml($deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = "/uploads" . time() . $k . '.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            $deskripsi = $dom->saveHTML();
        }

        $kategori = Kategori::all();

        Content::create([
            'user_id' => $user_id,
            'judul' => $request->input('judul'),
            'deskripsi' => $deskripsi,
            'kategori_id' => $request->input('kategori_id'),
            'gambar' => $path_gambar,
        ]);

        return redirect()->back()->with('success', 'Content added successfully')->with('kategori', $kategori);
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

    public function editForAdmin(string $id)
    {
        $content = Content::find($id);
        $kategori = Kategori::all();
        return view('content',compact('content','kategori'));
    }

    public function editForUser(string $id)
    {
        $content = Content::find($id);
        $kategori = Kategori::all();
        return view('',compact('content','kategori'));
    }

    public function updateForAdmin(EditcontentRequest $request, string $id)
    {
        try {
        $content = Content::findOrFail($id);

        $oldPhotoPath = $content->gambar;

        $dataToUpdate = [
            'judul' => $request->input('edit_judul'),
            'deskripsi' => $request->input('edit_deskripsi'),
            'kategori_id' => $request->input('edit_kategori_id'),
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

    public function updateForUser(EditcontentRequest $request, string $id)
    {
        try {
        $content = Content::findOrFail($id);

        $oldPhotoPath = $content->gambar;

        $dataToUpdate = [
            'judul' => $request->input('edit_judul'),
            'deskripsi' => $request->input('edit_deskripsi'),
            'kategori_id' => $request->input('edit_kategori_id'),
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

            return redirect()->route('profile.profil')->with('success', 'content updated successfully');
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


                $dom = new DOMDocument();
                $dom->loadHTML($content->deskripsi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getElementsByTagName('img');
                foreach ($images as $img) {
                    $imagePath = public_path() . $img->getAttribute('src');
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }

                $content->delete();

                return redirect()->route('content.index')->with('success', 'Content successfully deleted');
            } catch (ModelNotFoundException $e) {
                return redirect()->route('content.index')->with('error', 'Content not found');
            }
        }
}

