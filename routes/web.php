<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostPrestadorController;
use App\Http\Controllers\LoginPrestadorController;
use App\Http\Controllers\LogoutPrestadorController;
use App\Http\Controllers\ProfesionesController;
use App\Http\Controllers\RegisterControllerPrestador;


Route::get('/', function () {
    return view('principal');
});

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

Route::get('/login-prestador', [LoginPrestadorController::class,'index'])->name('login-prestador');
Route::post('/login-prestador', [LoginPrestadorController::class,'store']);
Route::post('/logout-prestador', [LogoutPrestadorController::class,'store'])->name('logout-prestador');


Route::get('/dashboard-prestador',[PostPrestadorController::class,'index'])->name('post-prestador.index');
Route::get('/create-prestador',[PostPrestadorController::class,'create'])->name('oferta.create');
Route::get('/dashboard',[PostController::class,'index'])->name('post.index');

Route::get('/dashboard-electricistas',[ProfesionesController::class,'electricistas'])->name('electricistas');
Route::get('/dashboard-plomeros',[ProfesionesController::class,'plomeros'])->name('plomeros');