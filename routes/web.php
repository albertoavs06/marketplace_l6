<?php

Route::get('/', function () {
    $helloworld = 'Hello World';

    return view('welcome', compact('helloworld'));
});

Route::get('/model', function(){

     $product = \App\Product::find(41);

     return $product->categories;
});


Route::get('/admin/stores', 'Admin\\StoreController@index');
Route::get('/admin/stores/create', 'Admin\\StoreController@create');
Route::post('/admin/stores/store', 'Admin\\StoreController@store');
