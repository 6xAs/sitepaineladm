<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdutoPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return  [
              'nome_prod'         => 'required|max:50',
              'valor_prod'        => 'max:255',
              'descricao_prod'    => 'required|max:300',
              'image_principal'   => 'required|mimes:jpeg,png',
              'image_um'           => 'mimes:jpeg,png',
              'image_dois'           => 'mimes:jpeg,png',
              'image_tres'           => 'mimes:jpeg,png',
              'id_categoria'           => 'required|max:50',
            ];
    }
}
