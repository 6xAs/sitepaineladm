<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
  //
   protected $table = 'users';

   // Atributos(colunas) da tabela
   protected $fillable = [
       'name', 'email', 'password',
   ];

   public function setPasswordAttribute($valor) {

     if (!empty($valor)) {
       $this->attributes['password'] = \hash::make($valor);
     }

   }
}
