<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\produtos;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ProdutoPostRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use validador;
use Session;
use Redirect;
use App\Http\Controllers\Controller;

class siteController extends Controller
{
    //  Navegabilidade do Web Site
    public function detalhes() {

      //$produto = \App\produtos::find($id);
      return view('viewProd');
    } // detalhes()

    public function galeriaProdutos() {

      $categoria = \App\categoria::All();
      $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
      return view('site.galeriaProdutos', compact('produto','categoria'));
    }

    public function prodCategoria() {

      $categoria = \App\categoria::whare($id = 'id');
      $produto = \App\produtos::orderBy('created_at','DESC')->paginate(10);
      return view('site.prodCategoria', compact('produto','categoria'));

    }

    public function buscar(request $request) {

      $categoria = \App\categoria::All();
      $request = \Request::get('buscar');

      $produto = produtos::where('nome_prod', 'like','%'.$request.'%')
                 ->orderBy('nome_prod')
                 ->paginate(20);

      if (count($produto) == 0) {

          return view('site.buscaError', compact('prouto','categoria'));
      }
      else {

          return view('site.galeriaProdutos', compact('produto', 'categoria'));

      }




    } // buscar()
}
