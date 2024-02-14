<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        $n = rand(1,9);
        return view ("pagina1",["numero"=>$n]);
    }
}
