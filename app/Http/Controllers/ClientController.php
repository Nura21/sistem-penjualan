<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {

        return view('manages.client.index', ["clients" => Client::all()]);
    }

    public function create()
    {
        
        return view('manages.client.create');
    }

    public function store(ClientRequest $request)
    {
        $request->validated();

        Client::create([
            'nama_pembeli' => $request->nama_pembeli,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect('clients')->with(["message" => __('app.success.create')]);
    }

    public function show(Client $client)
    {
        // return view('manages.client.show', compact('client'));
    }

    public function edit(Client $client)
    {

        return view('manages.client.edit', compact('client'));
    }

    public function update(ClientRequest $request, Client $client)
    {
        $request->validated();

        $client->update([
            'nama_pembeli' => $request->nama_pembeli,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect('clients')->with(["message" => __('app.success.edit')]);
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('clients')->with(["message" => __('app.success.delete')]);
    }
}
