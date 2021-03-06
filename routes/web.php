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

Route::get('/welcome', function () {
    return view('welcome_basic');
})->middleware('auth.basic');

Route::get('/', ['as'=>'home','uses'=>'AppController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::get('/perfilCambiar', 'PerfilController@cambiar')->name('perfilCambiar');
Route::get('/mensajes', 'MensajesController@index')->name('mensajes');
