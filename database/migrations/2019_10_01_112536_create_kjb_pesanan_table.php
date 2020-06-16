<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKjbPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kjb_pesanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_pesanan')->unique();
            $table->unsignedBigInteger('variasi_id')->nullable();
            $table->unsignedBigInteger('variasi_id_pindaan')->nullable();
            $table->unsignedBigInteger('pindaan_by')->nullable();
            // $table->unsignedBigInteger('kementerian_id');
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->string('program')->nullable();
            $table->string('cawangan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('penerima_nokp')->nullable();
            $table->string('penerima_nama')->nullable();
            $table->string('penerima_tel_pejabat')->nullable();
            $table->string('penerima_tel_bimbit')->nullable();
            $table->string('penerima_alamat1')->nullable();
            $table->string('penerima_alamat2')->nullable();
            $table->string('penerima_alamat3')->nullable();
            $table->unsignedBigInteger('poskod_id')->nullable();
            $table->unsignedBigInteger('pegawai_perhubungan_id')->nullable();
            $table->string('dokumen_sokongan')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('rujukan_waran')->nullable();
            $table->string('bil_jawatan')->nullable();
            $table->string('bil_pemandu')->nullable();
            $table->integer('maklumat_bahagian')->default('1')->comment('0-Bahagian Baru; 1-Bahagian Sedia ada')->nullable();
            $table->integer('maklumat_peruntukan')->default('1')->comment('0-Tidak Cukup; 1-Mencukupi')->nullable();
            $table->dateTime('tarikh_permohonan')->nullable()->comment('Tarikh Hantar Borang');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('variasi_id')->references('id')->on('kereta_variasi');
            $table->foreign('variasi_id_pindaan')->references('id')->on('kereta_variasi');
            $table->foreign('pindaan_by')->references('id')->on('users');
            // $table->foreign('kementerian_id')->references('id')->on('kementerian');
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
            $table->foreign('poskod_id')->references('id')->on('poskod');
            $table->foreign('pegawai_perhubungan_id')->references('id')->on('pegawai_perhubungan');
            $table->foreign('created_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kjb_pesanan');
    }
}
