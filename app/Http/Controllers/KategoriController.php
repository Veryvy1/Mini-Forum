<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Http\Requests\KategoriRequest;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{

    public function index(Request $request)
    {
        $oldSearch = $request->input('search');

        if ($request->has('search')) {
            $xkategorix = $request->input('search');
            $kategori = Kategori::withCount('Content')
                ->where('kategori', $xkategorix)
                ->paginate(5);
        } else {
            $kategori = Kategori::withCount('Content')->paginate(5);
        }

        return view('admin.kategori', compact('kategori', 'oldSearch'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('kategori', compact('kategori'));
    }

    public function store(KategoriRequest $request)
    {
        try {
            Kategori::create([
                'kategori' => $request->kategori,
                'totalPost' => 0,
            ]);

            return redirect()->route('kategori.index')->with('success', 'Category added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
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

    public function update(KategoriRequest $request, string $id)
    {
        try {

        $kategori = Kategori::findOrFail($id);

        if (!$kategori) {
            return redirect()->route('kategori');
        }

        $dataToUpdate = [
            'kategori' => $request->kategori,
        ];

        $kategori->update($dataToUpdate);
        return redirect()->route('kategori.index')->with('success','Categories updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
    }

    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        if ($kategori->Content ()->exists()) {
            return redirect()->route('kategori.index')->with('warning', 'Cannot be deleted because there is still related data.');
        }
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success','Category successfully deleted');
    }
}
