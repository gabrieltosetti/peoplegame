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

Route::get('/gerenciar', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/jogos', 'JogosController@index')->name('jogos');
Route::get('/jogos/cs', 'JogosController@index')->name('cs');
Route::get('/jogos/lol', 'JogosController@index')->name('lol');
Route::get('/jogos/just_dance', 'JogosController@index')->name('just_dance');
Route::get('/jogos/fifa', 'JogosController@index')->name('fifa');

// inscrição
Route::get('/inscricao', 'InscricaoController@inscricao')->name('inscricao');
Route::post('/inscricao', 'InscricaoController@adiciona')->name('nova_inscricao_post');

Route::get('/', 'LandingController@index')->name('index');
