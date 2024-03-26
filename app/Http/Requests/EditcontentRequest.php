<?php

namespace App\Http\Requests;

use App\Models\Content;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class EditcontentRequest extends FormRequest
{
    public function authorize()
    {
        // Pastikan user yang sedang melakukan edit adalah pemilik konten
        $contentId = $this->route('content'); // Ambil id konten dari route
        $content = Content::findOrFail($contentId);
        return $content->user_id == auth()->id();
    }

    public function rules()
    {
        $contentId = $this->route('content'); // Ambil id konten dari route

        return [
            'edit_judul' => 'required|max:255',
            'edit_deskripsi' => 'required',
            'edit_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'edit_kategori_id' => 'required|exists:kategori,id',
        ];
    }

    public function messages()
    {
        return [
            'edit_judul.required' => 'Title must be filled in.',
            'edit_judul.max' => 'Title must not exceed 255 characters.',
            'edit_deskripsi.required' => 'Description must be filled in.',
            'edit_gambar.image' => 'Must be filled with images.',
            'edit_gambar.mimes' => 'Invalid photo format. Use jpeg, png, jpg, or gif format.',
            'edit_kategori_id.required' => 'Category must be selected.',
            'edit_kategori_id.exists' => 'The selected Category is invalid.',
        ];
    }
}

