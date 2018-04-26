<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BannerRequest extends Request
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
              'descricao_banner'          => 'required|min:10|max:60',
              'valor_banner'              => 'required|min:5|max:60',
              'image_banner'              => 'required|mimes:jpg,jpeg,png|max:900',

            ];
    }
}
