<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'A '.__('app.users.name').' is required',
            'username.required' => 'A '.__('app.users.name').' is required',
            'password.required' => 'A '.__('app.users.password').' is required',
        ];
    }
}