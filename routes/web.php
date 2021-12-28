<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ShopController::class, 'index'])->name('index');
Route::get('/cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('cart');
Route::get('/test', [App\Http\Controllers\ShopController::class, 'test'])->name('test');
Route::get('/land', [App\Http\Controllers\ShopController::class, 'land'])->name('land');


Route::get('/small_single_product', [App\Http\Controllers\ShopController::class, 'small_single_product'])->name('small_single_product');
