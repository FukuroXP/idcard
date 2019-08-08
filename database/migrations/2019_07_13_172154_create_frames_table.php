<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('judul');
            $table->string('instansi');
            $table->string('daerah');
            $table->string('masa_berlaku');
            $table->string('atas_nama');
            $table->string('perwakilan')->nullable();
            $table->string('nama_ttd');
            $table->string('nip_frame');
            $table->string('satuan_kerja');
            $table->string('background');
            $table->string('logo');
            $table->string('ttd');
            $table->string('stampel');

            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frames');
    }
}
