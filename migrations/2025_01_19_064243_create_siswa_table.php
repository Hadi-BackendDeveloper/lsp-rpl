<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('siswa', function (Blueprint $table) {
        $table->id('id_anggota');
        $table->string('nis', 20)->unique();
        $table->string('nama_siswa', 100);
        $table->string('kelas', 20);
        $table->string('jurusan', 50);
        $table->string('username', 50)->unique();
        $table->string('password');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
