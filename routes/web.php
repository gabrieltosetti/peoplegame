<?php
use App\Player;
use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;

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

Route::get('/inscrito/{inscrito_id?}',function($inscrito_id){
    $inscrito = Player::find($inscrito_id);

    return Response::json($inscrito);
});

//Route::put('/inscrito/{inscrito_id?}', 'HomeController@editar');

Route::post('/inscrito/{inscrito_id?}',function(PlayerRequest $request,$inscrito_id){
    $inscrito = Player::find($inscrito_id);

/*    $inscrito->inscrito = $request->input('nome');
    $inscrito->email = $request->input('email');

    $inscrito->save();*/
    
    return Response::json($inscrito);
});
