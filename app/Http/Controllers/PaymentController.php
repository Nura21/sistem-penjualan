<?php

namespace App\Http\Controllers;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\Stuff;

class PaymentController extends Controller
{
    public function index()
    {

        return view('manages.payment.index', ["payments" => Payment::all()]);
    }

    public function create()
    {
        $transactions = Transaction::all();
        
        return view('manages.payment.create', compact('transactions'));
    }

    public function store(PaymentRequest $request)
    {
        $request->validated();
        
        $transactionStuffIdAndQuantity = Transaction::findOrFail($request->transaction_id);
        $transactionStuffHarga = Stuff::findOrFail($transactionStuffIdAndQuantity->stuff_id);

        $stuffHarga = $transactionStuffHarga->harga;
        $stuffQuantity = $transactionStuffIdAndQuantity->quantity;
        $stuffTotalBayar = $request->total_bayar - ($stuffHarga * $stuffQuantity);
        

        Payment::create([
            'tgl_bayar' => $request->tgl_bayar,
            'total_bayar' => $stuffTotalBayar,
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
        $transactions = Transaction::all();
        
        return view('manages.payment.edit', compact('payment', 'transactions'));
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
