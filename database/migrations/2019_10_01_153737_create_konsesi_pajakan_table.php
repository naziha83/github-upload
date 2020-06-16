<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsesiPajakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsesi_pajakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('konsesi_kereta_id');
            $table->string('no_pajakan');
            $table->unsignedBigInteger('jadual_pajakan_id');
            $table->date('tarikh_mula_pajakan');
            $table->date('tarikh_akhir_pajakan');
            $table->integer('tempoh_pajakan');
            $table->double('sewa_bulanan');
            $table->string('tahun1_mula');
            $table->string('tahun1_akhir');
            $table->double('tahun1_kos');
            $table->string('tahun2_mula');
            $table->string('tahun2_akhir');
            $table->double('tahun2_kos');
            $table->string('tahun3_mula');
            $table->string('tahun3_akhir');
            $table->double('tahun3_kos');
            $table->string('tahun4_mula');
            $table->string('tahun4_akhir');
            $table->double('tahun4_kos');
            $table->string('tahun5_mula');
            $table->string('tahun5_akhir');
            $table->double('tahun5_kos');
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();

            $table->foreign('pesanan_id')->references('id')->on('kjb_pesanan');
            $table->foreign('konsesi_kereta_id')->references('id')->on('konsesi_kereta');
            $table->foreign('jadual_pajakan_id')->references('id')->on('jadual_pajakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsesi_pajakan');
    }
}
