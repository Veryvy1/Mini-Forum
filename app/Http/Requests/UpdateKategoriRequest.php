<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKategoriRequest extends FormRequest
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
            'kategori_update' => 'required|max:25|unique:kategoris,kategori',
        ];
    }
    public function messages(): array
    {
        return [
            'kategori_update.required' => 'Category must be filled in.',
            'kategori_update.max' => 'Category must not exceed 25 characters.',
            'kategori_update.unique' => 'This category already exists.',
        ];
    }
}
