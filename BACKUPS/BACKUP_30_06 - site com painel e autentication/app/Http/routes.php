<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


############ Navegação no Site ############
Route::get('/', function () {

  $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
  return view('templatesite.index', compact('produto'));

});


// Routes do Site

Route::resource('contato','templatesiteController@contato');

Route::resource('sobrenos','templatesiteController@sobrenos');



// Routes Painel

Route::resource('admadm','templateadmController@index');
############ ROUTES PRODUTOS #######

Route::resource('produto','ProdutoController@produto');
// Edit
Route::resource('produtos','ProdutoController');

//Inserir Produto
Route::resource('inserir','ProdutoController@inserirProduto');

//Editar produto
Route::resource('editarproduto', 'ProdutoController@update');

// Listar produto
Route::resource('listarproduto','ProdutoController@listarProduto');

// Deletar Produto
Route::resource('deletarproduto', 'ProdutoController@destroy');

############ ROUTES CATEGORIA #######
// Inserir Categoria
Route::resource('inserirCategoria','CategoriaController@inserirCategoria');

//listar Categoria
Route::resource('listarcategoria','CategoriaController@listarCategoria');

Route::resource('categoria','CategoriaController');

//Editar Categoria
Route::resource('editarcategoria','CategoriaController@update');

//Deletar Categoria
Route::resource('deletarcategoria','CategoriaController@destroy');

//Inserir Categoria
Route::resource('categoria','CategoriaController@categoria');

// Route Usuarios
Route::get('/register', function () {


  return view('auth.register');

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admadm', 'HomeController@index');
    //Route::get('/painel', 'templateadmController@index');

});
