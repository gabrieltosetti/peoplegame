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

Route::get('/gerenciar', 'HomeController@index')->name('gerenciar');

Auth::routes();

Route::get('/jogos', 'JogosController@index')->name('jogos');
Route::get('/jogos/cs', 'JogosController@index')->name('cs');
Route::get('/jogos/lol', 'JogosController@index')->name('lol');
Route::get('/jogos/just_dance', 'JogosController@index')->name('just_dance');
Route::get('/jogos/fifa', 'JogosController@index')->name('fifa');

Route::get('/inscricao', 'InscricaoController@inscricao')->name('inscricao');

Route::get('/', 'LandingController@index')->name('index');
