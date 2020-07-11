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

    //fazer login
    public function fazerLogin(Request $request)
    {
        //verificação dos inputs
        $this->validate($request, [
            'text_usuario' => 'bail|required|min:5',
            'text_senha' => 'required|min:3'
        ]);

        //consultar bd

        return 'validado!';
    }
}
