<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Spatie\FlareClient\View;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/welcome', [AuthController::class, 'showWelcomePage'])->name('welcome');
Route::get('/table', function () {
    return view('tabel', [
        'title' => 'tabel'
    ]);
});
Route::get('/tabeldata', function () {
    return view('tabel_data', [
        'title' => 'tabel data'
    ]);
});
