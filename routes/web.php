<?php

Route::get('/', function () {
    $helloworld = 'Hello World';

    return view('welcome', compact('helloworld'));
})->name('home');

Route::get('/model', function(){

     $product = \App\Product::find(41);

     return $product->categories;
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

        Route::resource('stores','StoreController');
        Route::resource('products','ProductController');
    });

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home'); //->middleware('auth');
