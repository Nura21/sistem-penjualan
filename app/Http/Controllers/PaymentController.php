<?php

namespace App\Http\Controllers;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {

        return view('manages.payment.index', ["payments" => Payment::all()]);
    }

    public function create()
    {
        
        return view('manages.payment.create');
    }

    public function store(PaymentRequest $request)
    {
        $request->validated();

        Payment::create([
            'tgl_bayar' => $request->tgl_bayar,
            'total_bayar' => $request->total_bayar,
            'transaction_id' => $request->transaction_id,
        ]);

        return redirect('payments')->with(["message" => __('app.success.create')]);
    }

    public function show(Payment $payment)
    {
        // return view('manages.payment.show', compact('payment'));
    }

    public function edit(Payment $payment)
    {

        return view('manages.payment.edit', compact('payment'));
    }

    public function update(PaymentRequest $request, Payment $payment)
    {
        $request->validated();

        $payment->update([
            'tgl_bayar' => $request->tgl_bayar,
            'total_bayar' => $request->total_bayar,
            'transaction_id' => $request->transaction_id,
        ]);

        return redirect('payments')->with(["message" => __('app.success.edit')]);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect('payments')->with(["message" => __('app.success.delete')]);
    }
}
