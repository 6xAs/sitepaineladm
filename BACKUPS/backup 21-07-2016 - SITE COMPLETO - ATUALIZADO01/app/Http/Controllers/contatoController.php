<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use App\Http\Requests;

class contatoController extends Controller
{
    // Enviar Email
    public function store(Request $request)
    {

          Mail::send('emails.contact', $request->all(), function ($message) {
          $message->subject('Email do Site: www.personalizero.com.br');
          $message->to('personalize.rondonia@gmail.com');

      });

      Session::flash('message', 'Mensagem enviado com sucesso!');
      return Redirect::to('/contato');

    } // fim store()

} // contatoController
