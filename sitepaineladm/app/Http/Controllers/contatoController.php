<?php

namespace App\Http\Controllers;

//use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\mailRequest;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use App\Http\Requests;

class contatoController extends Controller
{
    // Enviar Email
    public function store(mailRequest $request)
    {
          // Email Destinatário
          $para = 'personalize.rondonia@gmail.com';

          $nome_cliente                = $request->input('nome_cliente');
          $email                       = $request->input('email');
          $celular                     = $request->input('celular');
          $assunto                     = $request->input('assunto');
          $mensagem                    = $request->input('mensagem');

          //Enviar Email
          $headers = "From: " . $nome_cliente . " <" . $email . ">" . "\r\n" . "Reply-To: " . $email;
          mail($para, $assunto . ' (Email do Site)', $mensagem, $headers);

          //Mail::send('emails.contact', $request->all(), function ($message) {
          //$message->subject('Email do Site: www.personalizero.com.br');
          //$message->to('personalize.rondonia@gmail.com');

          //  });

        Session::flash('message', 'Mensagem enviado com sucesso!');
        return Redirect::to('/contato');

    } // fim store()

} // contatoController
