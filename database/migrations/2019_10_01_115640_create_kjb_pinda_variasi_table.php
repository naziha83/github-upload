<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKjbPindaVariasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kjb_pinda_variasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('variasi_asal');
            $table->unsignedBigInteger('variasi_baru');
            $table->unsignedBigInteger('amended_by');
            $table->timestamps();

            $table->foreign('pesanan_id')->references('id')->on('kjb_pesanan');
            $table->foreign('variasi_asal')->references('id')->on('kereta_variasi');
            $table->foreign('variasi_baru')->references('id')->on('kereta_variasi');
            $table->foreign('amended_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kjb_pinda_variasi');
    }
}
