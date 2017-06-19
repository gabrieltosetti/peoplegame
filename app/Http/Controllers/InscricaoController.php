<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscricaoController extends Controller
{
    public function inscricao()
    {
        return view('inscricao/cadastro');
    }
}
