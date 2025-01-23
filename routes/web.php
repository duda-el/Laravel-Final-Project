<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Display login page
Route::get('/login', function () {
    return view('login');
})->name('login');
