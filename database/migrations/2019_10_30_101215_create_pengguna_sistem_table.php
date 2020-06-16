<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaSistemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna_sistem', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('no_kp');
            $table->string('jawatan');
            $table->string('gred');
            $table->string('tel_pejabat');
            $table->string('tel_bimbit');
            // $table->unsignedBigInteger('kementerian_id');
            $table->unsignedBigInteger('jabatan_id');
            $table->string('emel_alternatif')->nullable();
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('kementerian_id')->references('id')->on('kementerian');
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
        Schema::dropIfExists('pengguna_sistem');
    }
}
