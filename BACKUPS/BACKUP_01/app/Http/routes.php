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

Route::get('/inserirproduto', function () {
    return view('html.inserirproduto');
});

Route::resource('produtos','ProdutoController');

Route::resource('inserir','ProdutoController@inserirProduto');

Route::resource('listarproduto','ProdutoController@listarProduto');

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
