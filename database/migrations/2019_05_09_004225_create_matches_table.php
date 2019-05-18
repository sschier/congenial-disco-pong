<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Should make name columns NOT NULL
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('round_id');
            $table->string('matchName');
            $table->integer('team1Id');
            $table->string('team1Name');
            $table->integer('team1Score')->default(0);
            $table->integer('team2Id');
            $table->string('team2Name');
            $table->string('team2Score')->default(0);;
            $table->integer('winnerId')->default(-1);;
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
        Schema::dropIfExists('matches');
    }
}
