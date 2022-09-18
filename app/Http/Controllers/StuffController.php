<?php

namespace App\Http\Controllers;
use App\Http\Requests\StuffRequest;
use App\Models\Stuff;
use App\Models\Supplier;

class StuffController extends Controller
{
    public function index()
    {

        return view('manages.stuff.index', ["stuffs" => Stuff::all()]);
    }

    public function create()
    {
        $suppliers = Supplier::all();
        
        return view('manages.stuff.create',compact('suppliers'));
    }

    public function store(StuffRequest $request)
    {
        $request->validated();

        Stuff::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'supplier_id' => $request->supplier_id
        ]);

        return redirect('stuffs')->with(["message" => __('app.success.create')]);
    }

    public function show(Stuff $stuff)
    {
        // return view('manages.stuff.show', compact('stuff'));
    }

    public function edit(Stuff $stuff)
    {
        $suppliers = Supplier::all();

        return view('manages.stuff.edit', compact('stuff', 'suppliers'));
    }

    public function update(StuffRequest $request, Stuff $stuff)
    {
        $request->validated();

        $stuff->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'supplier_id' => $request->supplier_id
        ]);

        return redirect('stuffs')->with(["message" => __('app.success.edit')]);
    }

    public function destroy(Stuff $stuff)
    {
        $stuff->delete();

        return redirect('stuffs')->with(["message" => __('app.success.delete')]);
    }
}
