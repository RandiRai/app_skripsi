<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', fn()=> view('app'))->name('index');
Route::get('login', [AuthController::class, 'login_view'])->name('login');
Route::post('login', [AuthController::class, 'login_process'])->name('login_process');
Route::get('register', [AuthController::class, 'register_view'])->name('register');
Route::post('register', [AuthController::class, 'register_process'])->name('register_process');
Route::get('hasil', [AuthController::class, 'hasil_view'])->name('hasil');
Route::post('hasil', [AuthController::class, 'hasil_process'])->name('hasil_process');

