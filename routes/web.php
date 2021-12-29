<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ShopController::class, 'index'])->name('index');
Route::get('/cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('cart');
Route::get('/test', [App\Http\Controllers\ShopController::class, 'test'])->name('test');
Route::get('/land', [App\Http\Controllers\ShopController::class, 'land'])->name('land');


Route::get('/small_single_product', [App\Http\Controllers\ShopController::class, 'small_single_product'])->name('small_single_product');
Route::post('/get_order', [App\Http\Controllers\ShopController::class, 'get_order'])->name('get_order');
Route::get('/get_notes_wall/{id}', [App\Http\Controllers\ShopController::class, 'get_notes_wall'])->name('get_notes_wall');
Route::get('/get_photos/{id}', [App\Http\Controllers\ShopController::class, 'get_photos'])->name('get_photos');
Route::get('/parser/{id}', [App\Http\Controllers\ShopController::class, 'parser'])->name('parser');

