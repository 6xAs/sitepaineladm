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

Route::get('/', function () {
    return view('templatesite.index');
});

// Páginas do Site

Route::resource('contato','templatesiteController@contato');

Route::resource('sobrenos','templatesiteController@sobrenos');

// Páginas do Painel
Route::resource('admadm','templateadmController@index');

//listar categoria inserir
Route::get('/inserirproduto', function () {
  $categoria = DB::table('categoria')->lists('nome_categoria','nome_categoria');
  return View('html.inserirproduto', compact('categoria'));

});
//Inserir Categoria
Route::get('/inserircategoria', function () {
  return View('html.categoria');

});


Route::resource('produtos','ProdutoController');

//Inserir Produto
Route::resource('inserir','ProdutoController@inserirProduto');

//Editar produto
Route::resource('editarproduto', 'ProdutoController@update');

// Listar produto
Route::resource('listarproduto','ProdutoController@listarProduto');

// Deletar Produto
Route::resource('deletarproduto', 'ProdutoController@destroy');

// Inserir Categoria
Route::resource('inserirCategoria','CategoriaController@inserirCategoria');

//listar Categoria
Route::resource('listarcategoria','CategoriaController@listarCategoria');

//teste
Route::resource('testando','ProdutoController@update');






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
