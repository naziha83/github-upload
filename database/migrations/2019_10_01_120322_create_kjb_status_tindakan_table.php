<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKjbStatusTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kjb_status_tindakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tindakan_id');
            $table->unsignedBigInteger('status_id');
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->foreign('pesanan_id')->references('id')->on('kjb_pesanan')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tindakan_id')->references('id')->on('tindakan');
            $table->foreign('status_id')->references('id')->on('status_permohonan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kjb_status_tindakan');
    }
}
