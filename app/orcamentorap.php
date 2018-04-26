<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orcamentorap extends Model
{
    //
     protected $table = 'orcamentorap';
     // Atributos(colunas) da tabela
     protected $fillable   = ['nome_cliente', 'email', 'celular', 'nome_prod', 'descricao', 'created_at', 'update_at'];

     public function setPasswordAttribute($valor) {

       if (!empty($valor)) {
         $this->attributes['password'] = \hash::make($valor);
       }

     }
}
