<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('singkatan')->nullable();
            $table->unsignedBigInteger('kementerian_id')->nullable();
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();

            $table->foreign('kementerian_id')->references('id')->on('kementerian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatan');
    }
}
