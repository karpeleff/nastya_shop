<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ShopController::class, 'index'])->name('index');
Route::get('/cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('cart');
Route::get('/test/{id?}', [App\Http\Controllers\ShopController::class, 'test'])->name('test');
Route::get('/land', [App\Http\Controllers\ShopController::class, 'land'])->name('land');
Route::get('/shop/{id?}', [App\Http\Controllers\ShopController::class, 'Shop'])->name('shop');


Route::post('/order_product', [App\Http\Controllers\ShopController::class, 'order_product'])->name('order_product');
Route::post('/get_order', [App\Http\Controllers\ShopController::class, 'get_order'])->name('get_order');
Route::get('/get_notes_wall/{id}', [App\Http\Controllers\ShopController::class, 'get_notes_wall'])->name('get_notes_wall');
Route::get('/get_photos/{id}', [App\Http\Controllers\ShopController::class, 'get_photos'])->name('get_photos');
Route::get('/parser/{id}', [App\Http\Controllers\ShopController::class, 'parser'])->name('parser');
Route::get('/get_market/{id}', [App\Http\Controllers\ShopController::class, 'GetMarket'])->name('get_market');
Route::get('/notes/{id?}', [App\Http\Controllers\ShopController::class, 'Notes'])->name('notes');
Route::post('/notes_add', [App\Http\Controllers\ShopController::class, 'Note_add'])->name('notes_add');
Route::get('/get_info_mrket/{id?}', [App\Http\Controllers\ShopController::class, 'get_info_mrket'])->name('get_info_mrket');
Route::get('/get_info_mrket/{id?}', [App\Http\Controllers\ShopController::class, 'get_info_mrket'])->name('get_info_mrket');
