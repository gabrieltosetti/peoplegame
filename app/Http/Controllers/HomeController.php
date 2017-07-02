<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jogos = [
            "total" => Player::count(),
            "fifa_manha" => Player::where("jogo_manha", "fifa")->count(),
            "fifa_tarde" => Player::where("jogo_tarde", "fifa")->count(),
            "lol_manha" => Player::where("jogo_manha", "lol")->count(),
            "lol_tarde" => Player::where("jogo_tarde", "lol")->count(),
            "cs_manha" => Player::where("jogo_manha", "cs")->count(),
            "cs_tarde" => Player::where("jogo_tarde", "cs")->count(),
            "jd_manha" => Player::where("jogo_manha", "jd")->count(),
            "jd_tarde" => Player::where("jogo_tarde", "jd")->count(),
        ];
        $inscritos = Player::all();
        
        return view('home/index', ["jogos" => $jogos, "inscritos" => $inscritos]);
    }
}
