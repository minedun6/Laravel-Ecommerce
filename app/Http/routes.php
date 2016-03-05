<?php

Route::group(['middleware' => ['web']], function () {

    Route::controllers([
        'password' => 'Auth\PasswordController'
    ]);

    Route::get('/', 'PagesController@home');
    Route::get('register', 'SessionsController@register');
    Route::post('register', 'SessionsController@postRegister');

    Route::get('register/confirm/{token}', 'SessionsController@confirmEmail');

    Route::get('login', 'SessionsController@login');
    Route::post('login', 'SessionsController@postLogin');
    Route::get('logout', 'SessionsController@logout');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::post('addtocart', 'CartController@postAddToCart')->name('addToCart');
        Route::get('cart', 'CartController@cart')->name('cart');
        Route::post('updatecart', 'CartController@patchUpdateCart')->name('updateCart');
        Route::post('removefromcart', 'CartController@deleteFromCart')->name('removeFromCart');
    });

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
        Route::resource('products', 'ProductsController');
    });

});
