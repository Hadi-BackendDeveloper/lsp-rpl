<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nis');
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('bahasa_indonesia');
            $table->string('bahasa_inggris');
            $table->string('matematika');
            $table->string('pkn');
            $table->string('senibudaya');
            $table->string('agama');
            $table->string('ipas');
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
        Schema::dropIfExists('posts');
    }
};
