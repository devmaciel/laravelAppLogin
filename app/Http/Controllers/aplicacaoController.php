<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class aplicacaoController extends Controller
{
    //
    public function apresentarPaginaInicial()
    {
        //Sessão não está ativa
        if(!Session::has('login'))
            return redirect('/');


        return view('aplicacao');
    }
}
