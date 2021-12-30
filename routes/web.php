<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{id?}', [App\Http\Controllers\ShopController::class, 'index'])->name('index');
Route::get('/cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('cart');
Route::get('/test', [App\Http\Controllers\ShopController::class, 'test'])->name('test');
Route::get('/land', [App\Http\Controllers\ShopController::class, 'land'])->name('land');


Route::post('/order_product', [App\Http\Controllers\ShopController::class, 'order_product'])->name('order_product');
Route::post('/get_order', [App\Http\Controllers\ShopController::class, 'get_order'])->name('get_order');
Route::get('/get_notes_wall/{id}', [App\Http\Controllers\ShopController::class, 'get_notes_wall'])->name('get_notes_wall');
Route::get('/get_photos/{id}', [App\Http\Controllers\ShopController::class, 'get_photos'])->name('get_photos');
Route::get('/parser/{id}', [App\Http\Controllers\ShopController::class, 'parser'])->name('parser');
Route::get('/get_market/{id}', [App\Http\Controllers\ShopController::class, 'GetMarket'])->name('get_market');

