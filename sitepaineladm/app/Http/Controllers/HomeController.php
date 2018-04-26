<?php

namespace App\Http\Controllers;
use DB;
use App\produtos;
use App\categoria;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto =    \App\produtos::count();
        $categoria =  \App\categoria::count();
        $usuarios =   \App\user::count();
        if (count($produto) > 0 && ($categoria) > 0 && ($usuarios) > 0) {
          return view('templateadm.index', compact('produto', 'categoria', 'usuarios'));

          }


    } //index()

    public function admadm() {

      return view('templateadm.index');
    }

    public function login() {

      return view('auth.login');
    }



    public function countProdutos() {

      $produto = \App\produtos::count();
      return view('templatesite.index', compact('produto'));

    }//countProdutos()

} //HomerController
