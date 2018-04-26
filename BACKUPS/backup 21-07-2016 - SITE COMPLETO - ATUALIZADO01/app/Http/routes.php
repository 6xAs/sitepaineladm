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

  $categoria = \App\categoria::All();
  $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
  return view('templatesite.index', compact('produto','categoria'));

});

Route::get('prod/{id}/detalhes', ['as' => 'detalhes', function ($id) {

    //
    $produto = \App\produtos::find($id);
    $categoria = \App\categoria::All();
    return view('templatesite.viewProd', compact('produto','categoria'));

    //  $categoria = DB::table('categoria')->lists('nome_categoria','nome_categoria');


}]);


Route::resource('galeriaprodutos', 'siteController@galeriaProdutos');
// Routes do Site
Route::get('contato', function () {

  $categoria = \App\categoria::All();
  $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
  return view('site.contato', compact('produto','categoria'));

});
#
Route::get('sobrenos', function () {

  $categoria = \App\categoria::All();
  $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
  return view('templatesite.sobrenos', compact('produto','categoria'));

});
#
Route::get('', function () {

  $categoria = \App\categoria::All();
  $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
  return view('templatesite.index', compact('produto','categoria'));

});
#
Route::get('orcamento', function () {

  $categoria = \App\categoria::All();
  $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
  return view('templatesite.orcamento', compact('produto','categoria'));

});
Route::resource('buscar','siteController@buscar');



Route::resource('detalhes','siteController@detalhes');

// Orcamento Rapido
Route::get('orcamento', function () {

  $categoria = \App\categoria::All();
  $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
  return view('site.orcamento', compact('produto','categoria'));

});
#
Route::resource('orcamentoInsert','OrcamentosController@orcamentoInsert');

// contato
Route::resource('mail','contatoController');









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
Route::resource('Categoria','CategoriaController@categoria');

// Route Usuarios

Route::get('novo-usuario', function() {
  return view('auth.register');
  //return view('auth.register');
});

Route::resource('create','UsuarioController');

Route::resource('listar-usuarios','UsuarioController@listarUser');

// Listar Orcamentos
Route::resource('listarOrcamentos','listOrcamento@listarOrcamentos');


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

      //Route::get('/painel', 'templateadmController@index');
    Route::get('/admadm', 'HomeController@index');


    //novo usuario
    Route::get('register', function() {
      return view('auth.register');
      //return view('auth.register');
    });


// Get -> Menu categorias
Route::get('{nome_categoria}', function ($nome_categoria) {

  $categoria = \App\categoria::All();
  $produto = \App\produtos::where('nome_categoria', $nome_categoria)->get();

  return view('site.prodCategoria', compact('produto','categoria'));

});
#

});
