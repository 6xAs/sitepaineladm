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
              'nome_prod'           => 'required|min:10|max:200',
              'valor_prod'          => 'max:255',
              'descricao_prod'      => 'required|max:300',
              'image_principal'     => 'required|mimes:jpeg,png|max:900',
              'image_2'             => 'required|mimes:jpeg,png|max:900',
              'nome_categoria'      => 'required|max:100',
            ];
    }
}
