<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Auth::routes();

Route::get('dang-ky', [App\Http\Controllers\Auth\RegisterController::class, 'getRegister'])->name('get.register');
Route::post('dang-ky', [App\Http\Controllers\Auth\RegisterController::class, 'postRegister'])->name('post.register');

Route::get('dang-nhap', [App\Http\Controllers\Auth\LoginController::class, 'getLogin'])->name('get.login');
Route::post('dang-nhap', [App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('post.login');

Route::get('dang-xuat', [App\Http\Controllers\Auth\LoginController::class, 'getLogout'])->name('get.logout.user');


/* Route::group(['namespace' => 'Auth'], function()
{
    Route::get('dang-ky', 'RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky', 'RegisterController@postRegister')->name('post.register');

    Route::get('dang-nhap', 'LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap', 'LoginController@postLogin')->name('post.login');
}); */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/', 'HomeController@index')->name('home'); */

Route::get('danh-muc/{slug}-{id}', [App\Http\Controllers\CategoryController::class, 'getListProduct'])->name('get.list.product');
Route::get('san-pham/{slug}-{id}', [App\Http\Controllers\ProductDetailController::class, 'productDetail'])->name('get.detail.product');
