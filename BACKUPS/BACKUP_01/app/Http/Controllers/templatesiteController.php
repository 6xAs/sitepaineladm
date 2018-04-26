<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class templatesiteController extends Controller
{
    //template site
    public function index() {

      return view('templatesite.index');
    }


    public function contato() {

      return view('templatesite.contato');
    }

    public function sobrenos() {

      return view('templatesite.sobrenos');

    }

}
