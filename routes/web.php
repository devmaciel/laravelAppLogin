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

//usuário - login


//usuário - recuperar senha
Route::get('/recuperar-senha', 'usuariosController@formRecuperarSenha')
 ->name('usuario_form_recuperar_senha');

//usuário - nova conta
Route::get('/nova-conta', 'usuariosController@formCriarNovaConta')
 ->name('usuario_criar_nova_conta');
