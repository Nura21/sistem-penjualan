<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\AuthenticationController;


Route::get('/', function() {
    if(Auth::check()){
        return Redirect::route('dashboard');
    }
    return view('auth.login'); 
})->name('login');
Route::get('/register', function() { return view('auth.register'); })->name('register');
Route::get('/dashboard', [AuthenticationController::class, 'dashboard'])->name('dashboard');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::resource('users', UserController::class);
Route::resource('transactions', TransactionController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('stuffs', StuffController::class);
Route::resource('payments', PaymentController::class);
Route::resource('clients', ClientController::class);
