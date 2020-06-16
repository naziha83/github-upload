<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKjbPenerimaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kjb_penerimaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesanan_id');
            $table->date('tarikh_penghantaran');
            $table->string('alamat1');
            $table->string('alamat2');
            $table->string('alamat3');
            $table->unsignedBigInteger('poskod_id');
            $table->string('penghantar_nama');
            $table->string('penghantar_nokp');
            $table->string('penghantar_jawatan');
            $table->date('penghantar_tarikh');
            $table->string('saksi_hantar_nama');
            $table->string('saksi_hantar_nokp');
            $table->string('saksi_hantar_jawatan');
            $table->date('saksi_hantar_tarikh');
            $table->string('penerima_nama');
            $table->string('penerima_nokp');
            $table->string('penerima_jawatan');
            $table->date('penerima_tarikh');
            $table->string('saksi_terima_nama');
            $table->string('saksi_terima_nokp');
            $table->string('saksi_terima_jawatan');
            $table->date('saksi_terima_tarikh');
            $table->string('wakil_kerajaan_nama');
            $table->string('wakil_kerajaan_nokp');
            $table->string('wakil_kerajaan_jawatan');
            $table->date('wakil_kerajaan_tarikh');
            $table->timestamps();

            $table->foreign('pesanan_id')->references('id')->on('kjb_pesanan');
            $table->foreign('poskod_id')->references('id')->on('poskod');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kjb_penerimaan');
    }
}
