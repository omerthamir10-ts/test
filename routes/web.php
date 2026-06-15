<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DebtController;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});