<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ShopController::class, 'index'])->name('index');
Route::get('/cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('cart');
