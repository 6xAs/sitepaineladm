<?php

namespace App\Http\Controllers;

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
        return view('templateadm.index');
    }

    public function admadm() {

      return view('templateadm.index');
    }

    public function login() {

      return view('auth.login');
    }

    public function usuarios() {

      return view('auth.register');
    }
}
