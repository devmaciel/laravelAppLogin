<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{

    //===============================================
    // LOGIN
    //===============================================
    public function index()
    {
        return view('usuario_form_login');
    }


    //===============================================
    // RECUPERAR SENHA
    //===============================================
    public function formRecuperarSenha()
    {
        //apresentar o form para recuperar senha
        return view('usuario_form_recuperar_senha');
    }

    public function executarRecuperarSenha()
    {

    }


    //===============================================
    // CRIAÇÃO DE NOVA CONTA
    //===============================================
    public function formCriarNovaConta()
    {
        //apresentar o formulário de criação de nova conta
        return view('usuario_form_criar_conta');
    }

    public function executarCriacaodeNovaConta()
    {
        //executar os procedimentos e verificações para criação de uma nova conta
    }
}
