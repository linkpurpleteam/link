<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterControllerPrestador;


Route::get('/principal', function () {
    return view('principal');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/register-prestador',[RegisterControllerPrestador::class,'index'])->name('register-prestador');
Route::post('/register-prestador', [RegisterControllerPrestador::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::post('/logout', [LogoutController::class,'store'])->name('logout');

Route::get('/dashboard',[PostController::class,'index'])->name('post.index');