<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    //===============================================
    public function index()
    {
        return $this->formLogin();
    }


    //===============================================
    // LOGIN
    //===============================================
    public function formLogin()
    {
        //apresenta o formulário de login
        return view('usuario_form_login');
    }

    public function executarLogin(Request $request)
    {
        //Validação
        $this->validate($request, [
            'text_usuario' => 'required',
            'text_senha' => 'required',
        ]);

        return 'OK';

    }

    //===============================================
    // RECUPERAR SENHA
    //===============================================
    public function formRecuperarSenha()
    {
        //apresentar o form para recuperar senha
        return view('usuario_form_recuperar_senha');
    }

    public function executarRecuperarSenha(Request $request)
    {
        //Validação
        $this->validate($request, [
            'text_email' => 'required|email'
        ]);

        return 'OK';
    }


    //===============================================
    // CRIAÇÃO DE NOVA CONTA
    //===============================================
    public function formCriarNovaConta()
    {
        //apresentar o formulário de criação de nova conta
        return view('usuario_form_criar_conta');
    }

    public function executarCriacaoDeNovaConta(Request $request)
    {
        //executar os procedimentos e verificações para criação de uma nova conta

        //Validação
        $this->validate($request, [
            'text_usuario' => 'required|between:3,30|alpha_num',
            'text_senha' => 'required|between:6,50',
            'text_senha_repetida' => 'required|same:text_senha',
            'text_email' => 'required|email',
            'check_termos_condicoes' => 'accepted'
        ]);

        return 'OK';

    }
}
