<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
    return view('about', [
        "title" => "about us",
        "name" => "John Doe"
    ]);
});

Route::get('/layout', function () {
    return view('layouts.layout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/example', [nama_kontroller::class,'nama_method']);