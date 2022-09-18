<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'name' => 'required|max:255',
            'username' => 'required|string',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => 'A '.__('app.users.name').' is required',
            'username.required' => 'A '.__('app.users.username').' is required',
            'password.required' => 'A '.__('app.users.password').' is required',
        ];
    }
}
