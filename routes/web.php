<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\makananController;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [makananController::class, 'index'])->name('index');

Route::get('/login', [makananController::class, 'login'])->name('login');

Route::get('/about', [makananController::class, 'about'])->name('about');
