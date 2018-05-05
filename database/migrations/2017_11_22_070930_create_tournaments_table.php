<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('profile_image');
            $table->string('address');
            $table->string('privacy');
            $table->integer('team_number');
            $table->integer('team_member');
            $table->integer('key_join');
            $table->integer('sport_id');
            $table->string('start_date');
            $table->string('end_date');
            $table->timestamps();
//            $table->foreign('sport_id')->references('id')->on('sport_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}
