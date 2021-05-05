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
    //return \App\User::where('name','Dr. Madalyn McClure PhD')->get();
   // return \App\User::where('name','Dr. Madalyn McClure PhD')->first();

/*    $user = \App\User::create([
      'name' => 'Alberto Alexandre',
      'email' => 'teste5@teste.com',
      'password' => bcrypt('12345678')
   ]);
    dd($user); */
 /*    $user = \App\User::find(80);
    $user -> update([
      'name'=>'Atualizando2 com Mass Update'
    ]); // true ou false
    dd($user); */

   // $user = \App\User::find(4);
    //return $user->store; //O objeto único (store), se for Collection de Dados(objetos da ligação).
    
    //dd($user->store()->count());
    //return \App\User::all();
 // return \App\User::paginate(10); // paginar dados no eloquente do laravel
     // $loja = \App\Store::find(9);
      //return $loja->products()->where('id',9)->get();
      //dd($loja->products());
      // pegar os produtos de uma loja e pegar as categorias de uma loja
     // $categoria = \App\Category::find(1);
      //$categoria->products;

      // criar uma loja para um usuario

/*       $user = \App\User::find(10);
      $store = $user->store()->create([
         'name' => 'Loja Teste',
         'description' => 'Loja Teste de produtos de informática',
         'mobile_phone' => 'XX-XXXXX-XXXX',
         'phone' => 'XX-XXXXX-XXXX',
         'slug' => 'Loja-Teste'
      ]);
      dd($store); */

      // criar um produto para uma loja
  /*     $store = \App\Store::find(41);
      $product = $store->products()->create([
         'name' => 'produto teste',
         'description' => 'descricao produto teste',
         'body' => 'body produto teste',
         'price'=> 2999.50,
         'slug'=> 'produto teste'
      ]);

      dd($product); */
      // criar uma categoria

/*       \App\Category::create([

         'name' => 'Games',
         'description' => null,
         'slug'=> 'games teste'

      ]);

      \App\Category::create([

         'name' => 'Notebooks',
         'description' => null,
         'slug'=> 'notebooks teste'

      ]); */

     // return \App\Category::all();


      // adicionar um produto para uma categoria ou vice-versa
     // $product = \App\Product::find(41);

      // dd($product->categories()->sync([2])); //o attach-> faz a ligação entre tabelas detach -> para remover as ligacoes
         // o sync faz a sincronização do produto.
     // return \App\User::all();

     $product = \App\Product::find(41);

     return $product->categories;
});

// o laravel irá responder diretamente pelas rotas
//Route::get -- recupera
//Route::post -- cria alguma coisa
//Route::put -- atualização
//Route::patch -- atualizacao
//Route::delete -- remoção
//Route::options -- quais cabeçalhos a rota específica retorna.

Route::get('/admin/stores', 'Admin\\StoreController@index');
