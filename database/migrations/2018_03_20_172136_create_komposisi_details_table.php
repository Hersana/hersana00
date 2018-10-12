<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomposisiDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komposisi_details', function(Blueprint $table){
          $table->increments('id');
          $table->integer('komposisi_id')->unsigned()->index();
          $table->foreign('komposisi_id')->references('id')->on('komposisis')
          ->onDelete('cascade')->onUpdate('cascade');
          $table->integer('no_mesin')->unsigned();
          $table->integer('melt_pump')->unsigned();
          $table->string('mat_com1');
          $table->string('mat_com2');
          $table->string('mat_com3');
          $table->string('mat_com4');
          $table->string('mat_com5');
          $table->string('mat_com6');
          $table->integer('per_com1')->unsigned();
          $table->integer('per_com2')->unsigned();
          $table->integer('per_com3')->unsigned();
          $table->integer('per_com4')->unsigned();
          $table->integer('per_com5')->unsigned();
          $table->integer('per_com6')->unsigned();
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
        Schema::dropIfExists('komposisi_details');
    }
}
