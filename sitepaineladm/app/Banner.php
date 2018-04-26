<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    // Table Banner//
     protected $table = 'banner';

      protected $fillable   = ['id', 'descricao_banner', 'valor_banner', 'image_banner'];
}
