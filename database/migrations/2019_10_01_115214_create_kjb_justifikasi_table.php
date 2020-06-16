<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKjbJustifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kjb_justifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('kenderaan_id');
            $table->string('model');
            $table->string('bilangan');
            $table->text('kegunaan');
            $table->timestamps();

            $table->foreign('pesanan_id')->references('id')->on('kjb_pesanan')->onDelete('cascade');
            $table->foreign('kenderaan_id')->references('id')->on('kjb_kenderaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kjb_justifikasi');
    }
}
