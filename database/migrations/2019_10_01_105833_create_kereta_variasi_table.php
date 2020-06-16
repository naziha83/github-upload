<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeretaVariasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kereta_variasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('warna_id');
            $table->unsignedBigInteger('transmisi_id');
            $table->unsignedBigInteger('kategori_id');
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();

            $table->foreign('model_id')->references('id')->on('kereta_model');
            $table->foreign('cat_id')->references('id')->on('kereta_cat');
            $table->foreign('warna_id')->references('id')->on('kereta_warna');
            $table->foreign('transmisi_id')->references('id')->on('kereta_transmisi');
            $table->foreign('kategori_id')->references('id')->on('kereta_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kereta_variasi');
    }
}
