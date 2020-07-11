<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $this->validate($request, [
            'text_usuario' => 'bail|required|min:5',
            'text_senha' => 'required|min:3'
        ]);

        //encrypt senha
        $senha = Hash::make($request->text_senha);

    }

    public function inserirUsuario()
    {
        //inserir um usuário na base de dados
        //estatico example
        $usuario = '';
        $senha = '';
        $email = '';

        $novo = new usuarios();
        $novo->usuario = 'Joao';
        $novo->senha = Hash::make('abc123');
        $novo->email = 'teste@teste.com';
        $novo->save();

        return 'Usuário inserido com sucesso.';
    }
}
