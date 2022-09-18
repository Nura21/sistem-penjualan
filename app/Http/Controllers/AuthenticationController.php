<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\AuthenticationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(AuthenticationRequest $request)
    {
    
        $request->validated();
        
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard');
        }

        return redirect('/')->with(['message' => __('app.errors.login')]);
    }

    public function register(UserRequest $request)
    {
    
        $request->validated();

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with(["message" => __('app.success.create')]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            
            return view('dashboard');
        }
        
        return redirect('/')->with(['message' => __('app.errors.login')]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect::route('login')->with([
            'message' => 'Tokens Revoked'
        ]);
    }
}