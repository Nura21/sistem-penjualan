<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StuffRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_barang' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'supplier_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nama_barang.required' => 'A '.__('app.stuffs.name').' is required',
            'harga.required' => 'A '.__('app.stuffs.harga').' is required',
            'stok.required' => 'A '.__('app.stuffs.stok').' is required',
            'supplier_id.required' => 'A '.__('app.stuffs.supplier').' '.__('app.stuffs.id').' is required',
        ];
    }
}
