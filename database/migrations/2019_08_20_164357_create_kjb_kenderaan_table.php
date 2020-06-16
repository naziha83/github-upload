<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKjbKenderaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kjb_kenderaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kenderaan')->comment('Pacuan Empat Roda, Kereta, Bas, Van/MPV, Ambulan, Lain-lain');
            $table->integer('status')->default('1')->comment('0-Tidak aktif; 1-Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kjb_kenderaan');
    }
}
