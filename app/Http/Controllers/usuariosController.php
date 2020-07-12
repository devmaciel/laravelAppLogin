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
        // $this->validate($request, [
        //     'text_usuario' => 'bail|required|min:5',
        //     'text_senha' => 'required|min:3'
        // ]);

        // //encrypt senha
        // $senha = Hash::make($request->text_senha);



        /*

        * 1º o usuário preenche o formulário
        * 2º submit no formulário
        * 3º procurar os dados do usuário no banco de dados
        * 4º verificar se o usuário e senha correspondem no bd

        */

        $dados = usuarios::where('usuario', $request->text_usuario)->first();
        // return(dd($dados));

        $resultado = "";

        // if(count($dados) == 0){
        $countPK = (is_array($dados) ? count($dados) : 0);
        if($countPK == 0){
            $resultado = "Não existe essa conta de usuário";
        }else{
            if(Hash::check($request->text_senha, $dados->senha)){
                $resultado = "Login feito com sucesso!";
            }else{
                $resultado = "Login sem sucesso.";
            }
        }


        return($resultado);

    }

    public function inserirUsuario()
    {
        //inserir um usuário na base de dados

        //estatico exemplo
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
