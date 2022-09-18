<?php

namespace App\Http\Controllers;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {

        return view('manages.transaction.index', ["transactions" => Transaction::all()]);
    }

    public function create()
    {
        
        return view('manages.transaction.create');
    }

    public function store(TransactionRequest $request)
    {
        $request->validated();

        Transaction::create([
            'stuff_id' => $request->stuff_id,
            'client_id' => $request->client_id,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan
        ]);

        return redirect('transactions')->with(["message" => __('app.success.create')]);
    }

    public function show(Transaction $transaction)
    {
        // return view('manages.transaction.show', compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {

        return view('manages.transaction.edit', compact('transaction'));
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $request->validated();

        $transaction->update([
            'stuff_id' => $request->stuff_id,
            'client_id' => $request->client_id,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan
        ]);

        return redirect('transactions')->with(["message" => __('app.success.edit')]);
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect('transactions')->with(["message" => __('app.success.delete')]);
    }
}
