<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('body');
            $table->integer('user_id');
            $table->integer('location')->nullable();
            $table->integer('gameLocation')->nullable();
            $table->integer('issueLocation')->nullable();
            $table->integer('homeLocation')->nullable();
            $table->integer('game_id')->nullable();
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
        Schema::drop('comments');
    }
}
