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


class OrcamentosController extends Controller
{
  // inserir orçamento
  public function orcamentoInsert(orcamento $request) {

    \App\orcamentorap::create([
        'nome_cliente'      => $request['nome_cliente'],
        'email'             => $request['email'],
        'celular'           => $request['celular'],
        'nome_prod'         => $request['nome_prod'],
        'descricao'         => $request['descricao'],
        ]);

        $request->session()->flash('message', 'Orçamento enviado com sucesso!! Logo retornaremos com sua resposta.');
        return Redirect::to('orcamento');
  } // fim inserirCategoria()


}
