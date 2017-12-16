<?php

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

Route::get('lista-usuarios', 'DoidoController@listaUsuario');
Route::get('index-usuarios', 'DoidoController@homeUsuario');	
Route::get('cria-usuario', 'DoidoController@formularioUsuario');
Route::get('editar-usuario/{id}', 'DoidoController@editarUsuario');
Route::put('altera-usuario/{id}', 'DoidoController@alteraUsuario');
Route::post('salva-usuario','DoidoController@salvarUsuario');
Route::delete('deletar-usuario/{id}', 'DoidoController@deletarUsuario');
