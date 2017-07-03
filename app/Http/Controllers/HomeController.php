<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Illuminate\Support\Facades\Response;

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

    public function editar(Request $request, $inscrito_id)
    {
        $inscrito = Player::find($inscrito_id);

        $inscrito->nome = $request->input('nome');
        $inscrito->email = $request->input('email');
        $inscrito->idade = $request->input('idade');
        $inscrito->celular = $request->input('celular');
        $inscrito->aluno = $request->input('aluno');
        /*$inscrito->pagamento = $request->input('pagamento');*/
        $inscrito->jogo_manha = $request->input('jogo_manha');
        $inscrito->jogo_tarde = $request->input('jogo_tarde');

        $inscrito->save();
        
        return Response::json($inscrito);
    }
}
