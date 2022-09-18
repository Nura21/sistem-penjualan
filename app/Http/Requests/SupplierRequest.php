<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_supplier' => 'required|max:255',
            'no_telp' => 'required',
            'alamat' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nama_supplier.required' => 'A '.__('app.suppliers.name').' is required',
            'no_telp.required' => 'A '.__('app.suppliers.no_telp.').' is required',
            'alamat.required' => 'A '.__('app.suppliers.alamat').' is required',
            'nama_supplier.max' => 'A'.__('app.su')
        ];
}
}
