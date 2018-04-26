<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class templateadmController extends Controller
{
    // Template ADM
    public function index() {

      return view('templateadm.index');
    }

    
}
