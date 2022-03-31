<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('daftar', [AuthController::class, 'daftar'])->name('daftar');
Route::post('login', [AuthController::class, 'login'])->name('logins');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::group(['middleware' => ['web','auth:login']], function() {
    Route::get('home',[HomeController::class, 'index'])->name('home');
});