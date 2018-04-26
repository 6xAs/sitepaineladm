<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaPostRequest;
use App\categoria;
use DB;
use App\Http\Requests;
use validador;
use Session;
use Redirect;

class CategoriaController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */


    // inserir categoria
    public function inserirCategoria(CategoriaPostRequest $request) {

      \App\categoria::create([
          'nome_categoria' => $request['nome_categoria'],
          'descricao_categoria' => $request['descricao_categoria'],
          ]);

          $request->session()->flash('message', 'Categoria Inserida com Sucesso');
          return Redirect::to('listarcategoria');
    } // fim inserirCategoria()

    public function listarCategoria() {

      $categoria = \App\categoria::All();
      return view('listarcategoria', compact('categoria'));

    }

    public function edit($id) {

      $categoria = \App\categoria::find($id);
      return view('html.editcategoria', ['categoria'=>$categoria]);

    } // fim edit();

    public function update($id, CategoriaPostRequest $request) {

      $categoria = \App\categoria::find($id);
      $categoria->fill($request->all());
      $categoria->save();

      $request->session()->flash('message', 'Categoria Atualizada com Sucesso!');
      return Redirect::to('listarcategoria');


    } // Fim update()

    public function destroy($id, Request $request) {

      \App\categoria::destroy($id);
      $request->session()->flash('message', 'Categoria Excluída com Sucesso!!');
      return Redirect::to('listarcategoria');

    }// Fim destroy()

    public function categoria() {

      return view('html.categoria');
    }



} // Fim CategoriaController
