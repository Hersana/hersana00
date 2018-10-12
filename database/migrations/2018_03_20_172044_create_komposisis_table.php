<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomposisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komposisis', function (Blueprint $table){
          $table->increments('id');
          $table->string('kode');
          $table->string('spk_num');
          $table->string('kode_warna');
          $table->integer('customer_id')->unsigned()->index();
          $table->foreign('customer_id')->references('id')->on('customers')
          ->onDelete('cascade')->onUpdate('cascade');
          $table->date('prod_date');
          $table->integer('length')->unsigned();
          $table->integer('width')->unsigned();
          $table->decimal('thickness',5,2)->unsigned();
          $table->integer('quantity')->unsigned();
          $table->decimal('calspeed',5,4)->unsigned();
          $table->text('keterangan');
          $table->integer('user_id')->unsigned()->index();
          $table->foreign('user_id')->references('id')->on('users')
          ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('komposisis');
    }
}
