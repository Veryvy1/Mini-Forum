<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'messages'=>'required|max:250',
        ];
    }
    public function messages(): array
    {
        return [
            'messages.required'=>'Messages must be filled in.',
            'messages.max' => 'Messages must not exceed 250 characters.',
        ];
    }
}
