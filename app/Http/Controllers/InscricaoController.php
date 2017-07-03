<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;
use App\Player;

class InscricaoController extends Controller
{
    public function inscricao()
    {
        $jogos = [
            "fifa_manha" => Player::where("jogo_manha", "fifa")->count(),
            "fifa_tarde" => Player::where("jogo_tarde", "fifa")->count(),
            "lol_manha" => (Player::where("jogo_manha", "lol")->count()) >= 60 ? true : false,
            "cs_manha" => Player::where("jogo_manha", "cs")->count(),
            "cs_tarde" => Player::where("jogo_tarde", "cs")->count(),
            "jd_manha" => (Player::where("jogo_manha", "jd")->count()) >= 30 ? true : false,
            "jd_tarde" => (Player::where("jogo_tarde", "jd")->count()) >= 30 ? true : false,
        ];

        return view('inscricao/cadastro')->with("jogos", $jogos);
    }

    public function adiciona(PlayerRequest $request)
    {
        Player::create($request->all());

        $jogos = [
            "fifa_manha" => Player::where("jogo_manha", "fifa")->count(),
            "fifa_tarde" => Player::where("jogo_tarde", "fifa")->count(),
            "lol_manha" => (Player::where("jogo_manha", "lol")->count()) >= 60 ? true : false,
            "cs_manha" => Player::where("jogo_manha", "cs")->count(),
            "cs_tarde" => Player::where("jogo_tarde", "cs")->count(),
            "jd_manha" => (Player::where("jogo_manha", "jd")->count()) >= 30 ? true : false,
            "jd_tarde" => (Player::where("jogo_tarde", "jd")->count()) >= 30 ? true : false,
        ];

        return view('inscricao/cadastro')->with(["resultado" => "cadastrado", "jogos" => $jogos]);
    }
}
