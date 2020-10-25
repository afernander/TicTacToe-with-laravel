<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plays', function (Blueprint $table) {
            $table->id();
            $table->string('box0')->nullable();
            $table->string('box1')->nullable();
            $table->string('box2')->nullable();
            $table->string('box3')->nullable();
            $table->string('box4')->nullable();
            $table->string('box5')->nullable();
            $table->string('box6')->nullable();
            $table->string('box7')->nullable();
            $table->string('box8')->nullable();
            $table->string('win')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('plays');
    }
}
