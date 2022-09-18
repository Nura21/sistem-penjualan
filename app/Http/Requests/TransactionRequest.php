<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'stuff_id' => 'required|numeric',
            'client_id' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'stuff_id.numeric' => 'A '.__('app.transactions.stuff').__('app.transactions.id').' is have to be numeric like 1,2,3',
            'client_id.numeric' => 'A '.__('app.transactions.client').__('app.transactions.id').' is have to be numeric like 1,2,3',
            'stuff_id.required' => 'A '.__('app.transactions.stuff').__('app.transactions.id').' is required',
            'client_id.required' => 'A '.__('app.transactions.client').__('app.transactions.id').' is required',
            'tanggal.required' => 'A '.__('app.transactions.tanggal').' is required',
            'keterangan.required' => 'A'.__('app.transactions.keterangan').' is required',
        ];
    }
}
