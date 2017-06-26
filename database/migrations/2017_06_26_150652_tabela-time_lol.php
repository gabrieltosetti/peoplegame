<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaTimeLol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_lol', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nome_time', 50);
            $table->integer('dono_id')->unsigned();
            $table->integer('player2_id')->unsigned();
            $table->integer('player3_id')->unsigned();
            $table->integer('player4_id')->unsigned();
            $table->integer('player5_id')->unsigned();
            
            $table->timestamps();

            $table->foreign('dono_id')->references('id')->on('players');
            $table->foreign('player2_id')->references('id')->on('players');
            $table->foreign('player3_id')->references('id')->on('players');
            $table->foreign('player4_id')->references('id')->on('players');
            $table->foreign('player5_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_lol');
    }
}
