<?php

// Resource routes  for product
Route::group(['prefix' => set_route_guard('web').'/product'], function () {
    Route::resource('product', 'ProductResourceController');
});

// Public  routes for product
Route::get('product/popular/{period?}', 'ProductPublicController@popular');
Route::get('products/', 'ProductPublicController@index');
Route::get('products/{slug?}', 'ProductPublicController@show');


// Resource routes  for category
Route::group(['prefix' => set_route_guard('web').'/product'], function () {
    Route::resource('category', 'CategoryResourceController');
});

// Public  routes for category
Route::get('product/category/{period?}', 'CategoryPublicController@show');
// Route::get('products/', 'CategoryPublicController@index');
// Route::get('products/{slug?}', 'CategoryPublicController@show');


// Resource routes  for order
Route::group(['prefix' => set_route_guard('web').'/product'], function () {
    Route::resource('order', 'OrderResourceController');
});

// Public  routes for order
Route::get('order/popular/{period?}', 'OrderPublicController@popular');
Route::get('order/{slug?}', 'OrderPublicController@index');
Route::get('orderpayment', 'OrderPublicController@orderpayment');
// Route::get('order/{slug?}', 'OrderPublicController@show');

