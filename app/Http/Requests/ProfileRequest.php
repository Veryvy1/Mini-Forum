<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
        $userId = $this->user()->id ?? null;

        return [
            'name' => [
                'nullable',
                'max:150',
                Rule::unique('users', 'name')->ignore($userId),
            ],
            'email' => [
                'nullable',
                'max:150',
                'email',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'profile' => 'nullable|image|max:2048',
            'bgprofile' => 'nullable|image|max:2048',
            'link_fb' => 'nullable|max:250|url',
            'link_ig' => 'nullable|max:250|url',
            'link_twt' => 'nullable|max:250|url',
            'bio' => 'nullable',
        ];
    }


public function messages(): array
{
    return [
        'profile.image' => 'Only image files are allowed for profile picture.',
        'bgprofile.image' => 'Only image files are allowed for background profile picture.',
        'name.unique' => 'The name is already in use.',
        'email.unique' => 'The email is already in use.',
        'email.email' => 'The email is invalid.',
        'link_fb.url' => 'The Facebook link must be a valid URL.',
        'link_ig.url' => 'The Instagram link must be a valid URL.',
        'link_twt.url' => 'The Twitter link must be a valid URL.',
        'name.max' => 'The name may not be greater than 150 characters.',
        'email.max' => 'The email may not be greater than 150 characters.',
        'profile.max' => 'The email may not be greater than 2048 characters.',
        'bgprofile.max' => 'The email may not be greater than 2048 characters.',
        'link_fb.max' => 'The Facebook link may not be greater than 250 characters.',
        'link_ig.max' => 'The Instagram link may not be greater than 250 characters.',
        'link_twt.max' => 'The Twitter link may not be greater than 250 characters.',
    ];
}

}
