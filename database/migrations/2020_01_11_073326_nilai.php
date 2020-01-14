<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nilai');
            $table->unsignedBigInteger('mapel_id');
            $table->foreign('mapel_id')->references('id')->on('mapel')->onDelete('CASCADE');
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('CASCADE');
            $table->string('jenis_nilai');
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
        Schema::dropIfExists('nilai');
    }
}
