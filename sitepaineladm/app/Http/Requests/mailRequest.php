<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class mailRequest extends Request
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
              'nome_cliente'                => 'required|max:100|min:10',
              'email'                       => 'required|email|max:50',
              'celular'                     => 'required|max:15',
              'assunto'                   => 'required|min:2|max:300',
              'mensagem'                   => 'required|min:10|max:600',
            ];
    }
}
