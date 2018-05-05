<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBracketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brackets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_ally_id');
            $table->integer('team_enemy_id');
            $table->string('matching_date');
            $table->string('winner');
            $table->timestamps();

//            $table->foreign('team_ally_id')->references('id')->on('teams')->onDelete('cascade');
//            $table->foreign('team_enemy_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brackets');
    }
}
