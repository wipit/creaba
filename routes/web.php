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

Route::get('/', 'PageController@index')->name('Bienvenida')->middleware("guest");

Route::get('/home', 'PageController@home')->name('Home');

Route::get('/usuarios', 'UserController@index')->name('Usuarios');

Route::get('/perfil', 'UserController@perfil')->name('Perfil');

Route::patch('/perfil', 'UserController@update');