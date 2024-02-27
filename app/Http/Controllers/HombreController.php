<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HombreController extends Controller
{
        public function index(){
            return view('Hombre.index');
        }
    
        public function Camisas(){
            return view('Hombre.Camisas'); 
        }
    
        public function Sudaderas(){
            return view('Hombre.Sudaderas'); 
        }
}
