<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Faker\Provider\Payment;

Auth::routes();

//Đăng ký 
Route::get('dang-ky', [App\Http\Controllers\Auth\RegisterController::class, 'getRegister'])->name('get.register');
Route::post('dang-ky', [App\Http\Controllers\Auth\RegisterController::class, 'postRegister'])->name('post.register');
//Đăng nhập
Route::get('dang-nhap', [App\Http\Controllers\Auth\LoginController::class, 'getLogin'])->name('get.login');
Route::post('dang-nhap', [App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('post.login');
//Đăng nhập google
Route::get('/auth/{provider}', [App\Http\Controllers\Auth\SocialAuthController::class, 'redirectToProvider'])->name('get.auth.login');
Route::get('/auth/{provide}/callback', [App\Http\Controllers\Auth\SocialAuthController::class, 'handleProviderCallback']);

//Đăng xuất
Route::get('dang-xuat', [App\Http\Controllers\Auth\LoginController::class, 'getLogout'])->name('get.logout.user');


/* Route::group(['namespace' => 'Auth'], function()
{
    Route::get('dang-ky', 'RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky', 'RegisterController@postRegister')->name('post.register');

    Route::get('dang-nhap', 'LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap', 'LoginController@postLogin')->name('post.login');
}); */

//Liên quan tới trang chủ
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('danh-muc/{slug}-{id}', [App\Http\Controllers\CategoryController::class, 'getListProduct'])->name('get.list.product');
Route::get('san-pham/{slug}-{id}', [App\Http\Controllers\ProductDetailController::class, 'productDetail'])->name('get.detail.product');
//Static page
Route::get('pages/chinh-sach-bao-hanh', [App\Http\Controllers\StaticPageController::class, 'getGuarantee'])->name('get.guarantee');
Route::get('pages/huong-dan-tra-gop', [App\Http\Controllers\StaticPageController::class, 'getInstallment'])->name('get.buy.installment');
Route::get('pages/chinh-sach-giao-hang', [App\Http\Controllers\StaticPageController::class, 'getShipping'])->name('get.shipping');


/* Bài viết */
Route::get('bai-viet', [App\Http\Controllers\ArticleController::class, 'getListArticle'])->name('get.list.article');
Route::get('bai-viet/{slug}-{id}', [App\Http\Controllers\ArticleController::class, 'getDetailArticle'])->name('get.detail.article');


/* Shopping cart - giỏ hàng */
Route::prefix('shopping')->group(function () {
    //Basic
    Route::get('/add/{id}', [App\Http\Controllers\ShoppingCartController::class, 'addProduct'])->name('add.shopping.cart');
    Route::get('/delete/{id}', [App\Http\Controllers\ShoppingCartController::class, 'deleteProductItem'])->name('delete.shopping.cart');
    Route::get('/danh-sach', [App\Http\Controllers\ShoppingCartController::class, 'getListShoppingCart'])->name('get.list.shopping.cart');

    //Chuyển thành ajax
    Route::post('/add-ajax/{id}', [App\Http\Controllers\ShoppingCartController::class, 'addProductAjax'])->name('add.shopping.cart.ajax');
    Route::post('/delete-ajax/{id}', [App\Http\Controllers\ShoppingCartController::class, 'deleteProductItemAjax'])->name('delete.shopping.cart.ajax');
});

/* Thanh toán */
Route::group(['prefix' => 'gio-hang', 'middleware' => 'CheckLoginUser'], function () {
    //Đặt hàng COD
    Route::get('/thanh-toan', [App\Http\Controllers\ShoppingCartController::class, 'getFormPay'])->name('get.form.pay');
    Route::post('/thanh-toan', [App\Http\Controllers\ShoppingCartController::class, 'saveInfoShoppingCart']);

    //Thanh toán Online
    Route::post('/thanh-toan/online', [App\Http\Controllers\ShoppingCartController::class, 'createPayment'])->name('payment.online');
    Route::get('/vnpay/return', [App\Http\Controllers\ShoppingCartController::class, 'vnpayReturn'])->name('vnpay.return');
});

/* Đánh giá sản phẩm */
Route::group(['prefix' => 'ajax', 'middleware' => 'CheckLoginUser'], function () {
    Route::post('/danh-gia/{id}', [App\Http\Controllers\RatingController::class, 'saveRating'])->name('post.rating.product');
});

/* Sản phẩm vừa xem */
Route::group(['prefix' => 'ajax'], function () {
    Route::post('/view-product', [App\Http\Controllers\HomeController::class, 'renderProductView'])->name('post.view.product');
});

/* Liên hệ */
Route::get('/lien-he', [App\Http\Controllers\ContactController::class, 'getContact'])->name('get.contact');
Route::post('/lien-he', [App\Http\Controllers\ContactController::class, 'saveContact']);


/* Thông tin user */
Route::group(['prefix' => 'user', 'middleware' => 'CheckLoginUser'], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'info'])->name('user.info');

    Route::get('/info', [App\Http\Controllers\UserController::class, 'updateInfo'])->name('user.update.info');
    Route::post('/info', [App\Http\Controllers\UserController::class, 'saveInfo']);

    Route::get('/password', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('user.update.password');
    Route::post('/password', [App\Http\Controllers\UserController::class, 'savePassword']);

    Route::get('/don-hang', [App\Http\Controllers\UserController::class, 'UserTransaction'])->name('user.transaction');
    Route::get('/don-hang/{id}', [App\Http\Controllers\UserController::class, 'viewOrder'])->name('user.get.view.order');
});