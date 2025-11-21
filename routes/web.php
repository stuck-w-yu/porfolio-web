<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Halaman Landing (Cover Depan)
Route::get('/', function () {
    return view('landing');
});

// Halaman Utama (Setelah klik Start)
Route::get('/home', [PortfolioController::class, 'index'])->name('home');