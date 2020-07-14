<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Default
Route::get('/', 'usuariosController@index');


//---------------------------------------------------------
//usuário - login
Route::get('/login', 'usuariosController@formLogin')
 ->name('usuario_form_login');

Route::post('/efetuar-login', 'usuariosController@executarLogin')
->name('usuario_form_executar-login');


//---------------------------------------------------------
//usuário - logout
Route::get('usuario_logout', 'usuariosController@logout')
    ->name('logout');


//---------------------------------------------------------
//usuário - recuperar senha
Route::get('/recuperar-senha', 'usuariosController@formRecuperarSenha')
 ->name('usuario_form_recuperar_senha');

 Route::post('/efetuar-recuperar-senha', 'usuariosController@executarRecuperarSenha')
 ->name('usuario_form_efetuar_recuperar_senha');


//---------------------------------------------------------
//usuário - nova conta
Route::get('/nova-conta', 'usuariosController@formCriarNovaConta')
 ->name('usuario_criar_nova_conta');

 Route::post('/efetuar-nova-conta', 'usuariosController@executarCriacaoDeNovaConta')
 ->name('usuario_executar_criar_nova_conta');


//---------------------------------------------------------
//página depois de logado
Route::get('/aplicacao_index', 'aplicacaoController@apresentarPaginaInicial');



