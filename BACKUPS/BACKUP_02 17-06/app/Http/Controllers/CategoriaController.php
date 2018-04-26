<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaPostRequest;
use App\Http\Requests;
use Redirect;

class CategoriaController extends Controller
{
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
}
