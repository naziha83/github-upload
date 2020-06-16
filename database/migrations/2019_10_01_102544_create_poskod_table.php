<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoskodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poskod', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('poskod')->index();
            $table->string('bandar');
            $table->unsignedBigInteger('negeri_id');
            $table->timestamps();

            $table->foreign('negeri_id')->references('id')->on('negeri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poskod');
    }
}
