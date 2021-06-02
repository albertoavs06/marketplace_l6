<?php

Route::get('/', function () {
    $helloworld = 'Hello World';

    return view('welcome', compact('helloworld'));
});

Route::get('/model', function(){

     $product = \App\Product::find(41);

     return $product->categories;
});

Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::prefix('stores')->group(function(){
        Route::get('/', 'StoreController@index');
        Route::get('/create', 'StoreController@create');
        Route::post('/store', 'StoreController@store');
    });

});