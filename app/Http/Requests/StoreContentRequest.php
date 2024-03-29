<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required|max:25',
            'deskripsi' => 'required|max:2048',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori_id' => 'required|exists:kategoris,id',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Title must be filled in.',
            'judul.max' => 'Title must not exceed 25 characters.',
            'deskripsi.required' => 'Description must be filled in.',
            'deskripsi.max' => 'Deskripsi must not exceed 2048 characters.',
            'gambar.image' => 'Must be filled with images.',
            'gambar.mimes' => 'Invalid photo format. Use jpeg, png, jpg, or gif format.',
            'gambar.required' => 'images must be filled in.',
            'kategori_id.required' => 'Category must be filled in.',
            'kategori_id.exists' => 'The Category you entered is invalid.',
        ];
    }
}
