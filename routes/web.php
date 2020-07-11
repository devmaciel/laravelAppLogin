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

// Route::get('usuarios_login', function (){
//     return view('usuarios_login');
// });

Route::get('/', 'usuariosController@apresentarUsuarioLogin');
Route::post('usuarios_fazer_login', 'usuariosController@fazerLogin')->name('login');
