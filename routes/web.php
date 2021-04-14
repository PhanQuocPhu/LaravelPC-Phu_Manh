<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/', 'HomeController@index')->name('home'); */

Route::get('danh-muc/{slug}-{id}', [App\Http\Controllers\CategoryController::class, 'getListProduct'])->name('get.list.product');
Route::get('san-pham/{slug}-{id}', [App\Http\Controllers\ProductDetailController::class, 'productDetail'])->name('get.detail.product');
