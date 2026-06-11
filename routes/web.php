<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DebtController;

Route::get('/', function () {
    return view('dashboard');
});