<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MujerController extends Controller
{
    public function index(){
        return view('Mujer.index');
    }

    public function Camisas(){
        return view('Mujer.Camisas'); 
    }

    public function Sudaderas(){
        return view('Mujer.Sudaderas'); 
    }
}
