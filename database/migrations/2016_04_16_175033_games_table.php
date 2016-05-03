<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gameTitle');
            $table->text('gameDescription');
            $table->string('gitHubLink');
            $table->string('gameLink');
            $table->string('zipGame');
            $table->string('thumbnail');
            $table->text('gameRequirements');
            $table->string('gameWebsite');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('photo');
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
        Schema::drop('games');
    }
}
