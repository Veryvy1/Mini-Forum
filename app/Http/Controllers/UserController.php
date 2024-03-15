<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $kategori = Kategori::all();

        $selectedCategories = $request->input('categories');
        if ($selectedCategories) {
            $filteredContent = Content::whereIn('category_id', $selectedCategories)->get();
        } else {
            $filteredContent = Content::all();
        }

        return view('home', [
            'kategori' => $kategori,
        ]);
    }
}
