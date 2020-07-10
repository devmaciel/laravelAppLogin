<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    //apresentar formulário de login
    public function apresentarUsuarioLogin()
    {
        return view('usuarios_login');
    }
}
