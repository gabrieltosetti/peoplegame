<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = true;

    protected $table = 'players';

    protected $fillable = [
        'nome', 
        'email', 
        'idade',
        'celular',
        'aluno',
        'jogo_manha',
        'jogo_tarde',
    ];

    protected $guarded = ['id'];

}
