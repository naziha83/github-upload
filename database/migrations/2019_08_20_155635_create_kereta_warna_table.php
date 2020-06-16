<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeretaWarnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kereta_warna', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('warna');
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
        Schema::dropIfExists('kereta_warna');
    }
}
