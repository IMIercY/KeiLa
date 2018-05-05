<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_possession', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('team_id')->nullable();
            $table->integer('tournament_id')->nullable();
            $table->timestamps();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
//			$table->foreign('team_id')->nullable()->references('id')->on('teams')->onDelete('cascade');
//			$table->foreign('tournament_id')->nullable()->references('id')->on('tournaments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
}
