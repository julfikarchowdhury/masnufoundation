<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {


        return [
            'type'=>'required',
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'phone' => 'max:20|regex:/^\+?\d{0,15}$/',
            'address' => 'required|max:255',
            'password' => 'required|confirmed|min:8',
            'checkTerms' => 'required|accepted',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'unique' => 'The :attribute has already been taken.',
            'confirmed' => 'The :attribute confirmation does not match.',
            'max' => [
                'file' => 'The :attribute may not be greater than :max kilobytes.',
                'string' => 'The :attribute may not be greater than :max characters.',
            ],
            'min' => 'The :attribute must be greater than :min character',
            'email' => 'The :attribute must be a valid email address.',
            'image' => 'The :attribute must be an image file.',
            'regex' => 'The :attribute format is invalid.',
            'checkTerms' => 'You must agree to the terms and conditions.',
        ];
    }
}
