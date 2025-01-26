<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Gunakan Authenticatable
use Illuminate\Notifications\Notifiable;

class Siswa extends Authenticatable
{
    use Notifiable;

    protected $table = 'siswa'; // Nama tabel
    protected $primaryKey = 'id_anggota'; // Primary key
    protected $fillable = ['nis', 'nama_siswa', 'kelas', 'jurusan', 'username', 'password'];

    protected $hidden = ['password', 'remember_token'];

    // Relasi ke transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'nis', 'nis');
    }
}