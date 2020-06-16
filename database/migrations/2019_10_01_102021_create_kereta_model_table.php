<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeretaModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kereta_model', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model');
            $table->unsignedBigInteger('buatan_id')->nullable();
            $table->unsignedBigInteger('fuel_id')->nullable();
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();

            $table->foreign('buatan_id')->references('id')->on('kereta_buatan');
            $table->foreign('fuel_id')->references('id')->on('bahan_bakar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kereta_model');
    }
}
