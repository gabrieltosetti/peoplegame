<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome', 120);
            $table->char('email', 100)->unique();
            $table->smallInteger('idade');
            $table->char('celular', 14); //(19)99999-9999
            $table->boolean('aluno');            
            $table->boolean('pagamento')->default(false);            
            $table->char('jogo_manha', 20);
            $table->char('jogo_tarde', 20);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
