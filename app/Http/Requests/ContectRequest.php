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
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|image',
            'kategori_id' => 'required',
            'dibuat' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required'=>'Title must be filled in.',
            'deskripsi.required'=>'Description must be filled in.',
            'gambar.required'=>'Picture must be filled in.',
            'gambar.image'=>'Must be filled with images.',
            'kategori_id.required'=>'Category must be filled in.',
        ];
    }
}
