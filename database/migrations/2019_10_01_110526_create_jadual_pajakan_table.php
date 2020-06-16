<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadualPajakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadual_pajakan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('lokasi_id');
            $table->date('tarikh_kuatkuasa');
            $table->double('kos');
            $table->double('rebat');
            $table->double('kos_selenggara1');
            $table->double('kos_selenggara2');
            $table->double('kos_selenggara3');
            $table->double('kos_selenggara4');
            $table->double('kos_selenggara5');
            $table->text('catatan');
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();

            $table->foreign('model_id')->references('id')->on('kereta_model');
            $table->foreign('cat_id')->references('id')->on('kereta_cat');
            $table->foreign('lokasi_id')->references('id')->on('kereta_lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadual_pajakan');
    }
}
