<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Define routes for users and transactions

//user
Route::get('users/login', [UserController::class, 'login'])->name('users.login');
Route::get('users/register', [UserController::class, 'create'])->name('users.register');

//api json
Route::get('api/users/index', [UserController::class, 'indexJson'])->name('users.index');
Route::get('api/users/show', [UserController::class, 'showJson'])->name('users.api');
Route::get('api/transactions/index', [TransactionController::class, 'indexJson'])->name('transactions.index');
Route::get('api/transactions/show', [TransactionController::class, 'showJson'])->name('transactions.show');


Route::resource('users', UserController::class);


//transaction
Route::resource('transactions', TransactionController::class);

