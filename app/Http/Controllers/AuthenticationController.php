<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\AuthenticationRequest;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Stuff;
use App\Models\Supplier;
use App\Models\Transaction;
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
            
            $clients = count(Client::all());
            $payments = count(Payment::all());
            $stuffs = count(Stuff::all());
            $suppliers = count(Supplier::all());
            $transactions = count(Transaction::all());
            $users = count(User::all());
            
            return view('dashboard', compact('clients', 'payments', 'stuffs', 'suppliers', 'transactions', 'users'));
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