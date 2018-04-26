<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    //
     protected $table = 'produtos';

     // Atributos(colunas) da tabela
     protected $fillable   = ['nome_prod', 'valor_prod', 'nome_categoria', 'descricao_prod', 'image_principal', 'image_um', 'image_dois', 'image_tres'];

     public function setPasswordAttribute($valor) {

       if (!empty($valor)) {
         $this->attributes['password'] = \hash::make($valor);
       }

     }
}
