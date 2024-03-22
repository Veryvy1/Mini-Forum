<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
    return [
        'name' => 'nullable|max:25|unique:users,name',
        'email' => 'nullable|email|unique:users,email',
        'profile' => 'nullable|image',
        'bgprofile' => 'nullable|image',
        'link_fb' => 'nullable|max:150|url',
        'link_ig' => 'nullable|max:150|url',
        'link_twt' => 'nullable|max:150|url',
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
        'name.max' => 'The name may not be greater than 25 characters.',
        'link_fb.max' => 'The Facebook link may not be greater than 150 characters.',
        'link_ig.max' => 'The Instagram link may not be greater than 150 characters.',
        'link_twt.max' => 'The Twitter link may not be greater than 150 characters.',
    ];
}

}
