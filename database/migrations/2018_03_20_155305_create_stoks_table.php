<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function(Blueprint $table){
          $table->increments('id');
          $table->integer('bahan_id')->unsigned()->index();
          $table->foreign('bahan_id')->references('id')->on('bahans')
          ->onDelete('cascade')
          ->onUpdate('cascade');
          $table->integer('jumlah')->unsigned();
          $table->integer('user_id')->unsigned()->index();
          $table->foreign('user_id')->references('id')->on('users')
          ->onDelete('cascade')
          ->onUpdate('cascade');
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
        Schema::dropIfExists('stoks');
    }
}
