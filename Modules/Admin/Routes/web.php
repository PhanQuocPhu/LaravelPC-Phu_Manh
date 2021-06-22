<?php
Route::prefix('authenticate')->group(function () {
    Route::get('/login', 'AdminAuthController@getLogin')->name('admin.login');
    Route::post('/login', 'AdminAuthController@postLogin');

    Route::get('/logout', 'AdminAuthController@logoutAdmin')->name('admin.logout');
});

Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.home');


    //quản lý danh mục
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store');
        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');

        //Ajax
        Route::post('/ajax/{action}/{id}', 'AdminCategoryController@actionAjax')->name('admin.get.action.category.ajax');
    });

    //Quản lý sản phẩm
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@store');
        Route::get('/update/{id}', 'AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}', 'AdminProductController@update');
        Route::get('/{action}/{id}', 'AdminProductController@action')->name('admin.get.action.product');

        Route::get('/update/delete-image/{id}', 'AdminProductController@deleteImg')->name('admin.get.delete.product.image');

        //ajax
        Route::post('/ajax/{action}/{id}', 'AdminProductController@actionAjax')->name('admin.get.action.product.ajax');

    });

    //Quản lý banner
    Route::group(['prefix' => 'banner'], function () {
        //Out banner
        Route::get('/outside', 'AdminBannerController@indexOb')->name('admin.get.list.outbanner');
        Route::get('/outside/create', 'AdminBannerController@createOb')->name('admin.get.create.outbanner');
        Route::post('/outside/create', 'AdminBannerController@storeOb');
        Route::get('/outside/update/{id}', 'AdminBannerController@editOb')->name('admin.get.edit.outbanner');
        Route::post('/outside/update/{id}', 'AdminBannerController@updateOb');

        //Slide banner
        Route::get('/slide', 'AdminBannerController@indexSb')->name('admin.get.list.slidebanner');
        Route::get('/slide/create', 'AdminBannerController@createSb')->name('admin.get.create.slidebanner');
        Route::post('/slide/create', 'AdminBannerController@storeSb');
        Route::get('/slide/update/{id}', 'AdminBannerController@editSb')->name('admin.get.edit.slidebanner');
        Route::post('/slide/update/{id}', 'AdminBannerController@updateSb');

        //ajax
        Route::post('/outside/ajax/{action}/{id}', 'AdminBannerController@actionObAjax')->name('admin.get.action.outbanner.ajax');

        Route::post('/slide/ajax/{action}/{id}', 'AdminBannerController@actionSbAjax')->name('admin.get.action.slidebanner.ajax');
    });

    //Quản lý tin tức
    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'AdminArticleController@index')->name('admin.get.list.article');
        Route::get('/create', 'AdminArticleController@create')->name('admin.get.create.article');
        Route::post('/create', 'AdminArticleController@store');
        Route::get('/update/{id}', 'AdminArticleController@edit')->name('admin.get.edit.article');
        Route::post('/update/{id}', 'AdminArticleController@update');
        Route::get('/{action}/{id}', 'AdminArticleController@action')->name('admin.get.action.article');

        // ajax
        Route::post('/ajax/{action}/{id}', 'AdminArticleController@actionAjax')->name('admin.get.action.article.ajax');
    });

    //Quản lý đơn hàng
    Route::group(['prefix' => 'transaction'], function () {
        Route::get('/', 'AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/active/{id}', 'AdminTransactionController@actionTransaction')->name('admin.get.active.transaction');

        //thay đổi trạng thái đơn hàng ajax
        Route::post('/{action}/{id}', 'AdminTransactionController@actionTransactionAjax')->name('admin.get.action.transaction');
        Route::get('/view/{id}', 'AdminTransactionController@viewOrder')->name('admin.get.view.order');

        //CRUD chi tiết sản phẩm trong đơn hàng
        Route::post('/view/{trid}/{action}/{id}', 'AdminTransactionController@actionOrderAjax')->name('admin.get.action.order.ajax');
        

        //Update thông tin đơn hàng
        Route::post('/view/update/{id}', 'AdminTransactionController@update')->name('admin.update.transaction.ajax');
    });

    //Quản lý thành viên
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'AdminUserController@index')->name('admin.get.list.user');

        Route::get('/create', 'AdminUserController@create')->name('admin.get.create.user');
        Route::post('/create', 'AdminUserController@store');

        Route::get('/update/{id}', 'AdminUserController@edit')->name('admin.get.edit.user');
        Route::post('/update/{id}', 'AdminUserController@update');

        //thay đổi trạng thái ajax
        Route::post('/ajax/{action}/{id}', 'AdminUserController@actionAjax')->name('admin.get.action.user');

        
    });

    //Quản lý tài khoản Admin
    Route::group(['prefix' => 'AdminUser'], function () {
        Route::get('/', 'AdminUserController@indexAdmin')->name('admin.get.list.admin');

        Route::get('/create', 'AdminUserController@createAdmin')->name('admin.get.create.admin');
        Route::post('/create', 'AdminUserController@storeAdmin');

        Route::get('/update/{id}', 'AdminUserController@editAdmin')->name('admin.get.edit.admin');
        Route::post('/update/{id}', 'AdminUserController@updateAdmin');

        //thay đổi trạng thái ajax
        Route::post('/ajax/{action}/{id}', 'AdminUserController@actionAjax')->name('admin.get.action.admin');

        
    });

    //Quản lý đánh giá
    Route::group(['prefix' => 'rating'], function () {
        Route::get('/', 'AdminRatingController@index')->name('admin.get.list.rating');
    });

    //Quản lý thông tin liên hệ
    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', 'AdminContactController@index')->name('admin.get.list.contact');
        Route::get('/{action}/{id}', 'AdminContactController@action')->name('admin.get.action.contact');

        //thay đổi trạng thái ajax
        Route::post('/ajax/{action}/{id}', 'AdminContactController@actionAjax')->name('admin.get.action.contact.ajax');
    });
});
