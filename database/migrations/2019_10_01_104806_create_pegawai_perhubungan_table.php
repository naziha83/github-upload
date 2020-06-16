<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiPerhubunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_perhubungan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_kp');
            $table->string('nama');
            $table->string('jawatan');
            $table->string('gred');
            $table->string('emel');
            $table->string('tel_pejabat');
            $table->string('tel_bimbit');
            $table->string('alamat1');
            $table->string('alamat2');
            $table->string('alamat3');
            $table->unsignedBigInteger('poskod_id');
            $table->unsignedBigInteger('jabatan_id');
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();

            $table->foreign('poskod_id')->references('id')->on('poskod');
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai_perhubungan');
    }
}
