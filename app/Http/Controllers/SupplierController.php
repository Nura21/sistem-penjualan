<?php

namespace App\Http\Controllers;
use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {

        return view('manages.supplier.index', ["suppliers" => Supplier::all()]);
    }

    public function create()
    {
        
        return view('manages.supplier.create');
    }

    public function store(SupplierRequest $request)
    {
        $request->validated();

        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect('suppliers')->with(["message" => __('app.success.create')]);
    }

    public function show(Supplier $supplier)
    {
        // return view('manages.supplier.show', compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {

        return view('manages.supplier.edit', compact('supplier'));
    }

    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $request->validated();

        $supplier->update([
            'nama_supplier' => $request->nama_supplier,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect('suppliers')->with(["message" => __('app.success.edit')]);
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect('suppliers')->with(["message" => __('app.success.delete')]);
    }
}
