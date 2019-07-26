<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCetaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cetaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('frame_id');
            $table->foreign('frame_id')->references('id')->on('frames')->onDelete('cascade');
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('cascade');
            $table->string('foto');

            $table->timestamps();
            $table->index('frame_id');
            $table->index('pegawai_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cetaks');
    }
}
