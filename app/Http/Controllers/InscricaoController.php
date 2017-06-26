<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;
use App\Player;

class InscricaoController extends Controller
{
    public function inscricao()
    {
        return view('inscricao/cadastro');
    }

    public function adiciona(PlayerRequest $request)
    {
        Player::create($request->all());

        return view('inscricao/cadastro')->with("resultado", "cadastrado");
    }
}
