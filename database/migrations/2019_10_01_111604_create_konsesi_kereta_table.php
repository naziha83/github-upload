<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsesiKeretaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsesi_kereta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('variasi_id');
            $table->string('no_chasis');
            $table->string('no_enjin');
            $table->string('no_assembly_plant');
            $table->string('no_purchase_order');
            $table->string('tahun_buatan');
            $table->string('kuasa_enjin');
            $table->string('no_pendaftaran');
            $table->unsignedBigInteger('status');
            $table->timestamps();

            $table->foreign('variasi_id')->references('id')->on('kereta_variasi');
            $table->foreign('status')->references('id')->on('konsesi_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsesi_kereta');
    }
}
