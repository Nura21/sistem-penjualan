<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        return view('manages.user.index', ["users" => User::all()]);
    }

    public function create()
    {
        
        return view('manages.user.create');
    }

    public function store(UserRequest $request)
    {
        $request->validated();

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('users')->with(["message" => __('app.success.create')]);
    }

    public function show(User $user)
    {
        // return view('manages.user.show', compact('user'));
    }

    public function edit(User $user)
    {

        return view('manages.user.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $request->validated();

        $user->update([
            "nama" => $request->nama,
            "username" => $request->username,
            "password" => Hash::make($request->password),
        ]);

        return redirect('users')->with(["message" => __('app.success.edit')]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users')->with(["message" => __('app.success.delete')]);
    }
}
