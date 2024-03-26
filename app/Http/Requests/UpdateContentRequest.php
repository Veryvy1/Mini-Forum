<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContentRequest extends FormRequest
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
            'judul_update' => 'required|max:25',
            'deskripsi_update' => 'required|max:2048',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori_id_update' => 'required|exists:kategoris,id',
        ];
    }

    public function messages(): array
    {
        return [
            'judul_update.required' => 'Title must be filled in.',
            'judul_update.max' => 'Title must not exceed 25 characters.',
            'deskripsi_update.required' => 'Description must be filled in.',
            'deskripsi_update.max' => 'Deskripsi must not exceed 2048 characters.',
            'gambar.image' => 'Must be filled with images.',
            'gambar.mimes' => 'Invalid photo format. Use jpeg, png, jpg, or gif format.',
            'gambar.required' => 'images must be filled in.',
            'kategori_id_update.required' => 'Category must be filled in.',
            'kategori_id_update.exists' => 'The Category you entered is invalid.',
        ];
    }
}
