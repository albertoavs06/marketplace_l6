<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $helloworld = 'Hello World';

    return view('welcome', compact('helloworld'));
});

Route::get('/model', function(){
    // $products = \App\Product::all();
    //Active Record
    //$user = new \App\User();
    //$user = \App\User::find(42);
   // $user->name = 'Usuário Segundo Editado...';
 /*    $user->email = 'segundo@teste.com';
    $user->password = bcrypt('12345678'); */
  //  $user->save();
    //return $user->save();
   // return $products;
   // return \App\User::all(); //Collection
    return \App\User::where('name','Dr. Madalyn McClure PhD');
});
