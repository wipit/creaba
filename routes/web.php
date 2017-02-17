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

Auth::routes();

Route::get('/', 'HomeController@index')->name('Home');

Route::get('/usuarios', 'UserController@index')->name('Usuarios');

Route::middleware('auth')->get('/perfil', 'UserController@perfil')->name('Perfil');

Route::middleware('auth')->patch('/perfil', 'UserController@update');

Route::middleware('auth')->patch('/imagen', 'UserController@updateImagen');