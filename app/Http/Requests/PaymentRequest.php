<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tgl_bayar' => 'required|date',
            'total_bayar' => 'required',
            'transaction_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'tgl_bayar.required' => 'A '.__('app.payments.tgl_bayar').' is required',
            'total_bayar.required' => 'A '.__('app.payments.total_bayar').' is required',
            'transaction_id.required' => 'A '.__('app.payments.transaction').' '.__('app.payments.id').' is required',
        ];
    }
}
