<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContectRequest extends FormRequest
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
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Title must be filled in.',
            'judul.max' => 'Title must not exceed 255 characters.',
            'deskripsi.required' => 'Description must be filled in.',
            'deskripsi.max' => 'Deskripsi must not exceed 250 characters.',
            'gambar.image' => 'Must be filled with images.',
            'gambar.mimes' => 'Invalid photo format. Use jpeg, png, jpg, or gif format.',
            'kategori_id.required' => 'Category must be filled in.',
        ];
    }

}
