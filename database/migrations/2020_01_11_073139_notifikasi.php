<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('CASCADE');
            $table->string('deskripsi');
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
        Schema::dropIfExists('notifikasi');
    }
}
