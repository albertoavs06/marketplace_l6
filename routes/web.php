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
