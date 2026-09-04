<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('tentang',function(){
    return 'toko imas';
});

Route::get('kontak', function () {
    return view('kontak');
});

Route::get('pengalaman',function(){
    return view('pengalaman');
});

Route::get('about', function () {
    return '<H1>About</H1>';
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');