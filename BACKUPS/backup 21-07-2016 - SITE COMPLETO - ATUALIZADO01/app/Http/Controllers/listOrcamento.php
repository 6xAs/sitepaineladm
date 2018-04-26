<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\orcamento;
use App\orcamentorap;
use DB;
use App\Http\Requests;
use validador;
use Session;
use Redirect;

class listOrcamento extends Controller
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

    // Listar Orcamento
    public function listarOrcamentos() {

      $orcamento = \App\orcamentorap::All();
      return view('listarOrcamento', compact('orcamento'));

    } // fim listarOrcamentos()
}
