<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_pembeli' => 'required|max:255',
            'jk' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nama_pembeli.required' => 'A '.__('app.clients.nama_pembeli').' is required',
            'jk.required' => 'A '.__('app.clients.jk').' is required',
            'no_telp.required' => 'A '.__('app.clients.no_telp').' is required',
            'alamat.required' => 'A '.__('app.clients.alamat').' is required',
        ];
    }
}
