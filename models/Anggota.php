<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'siswa'; // Nama tabel di database
    protected $primaryKey = 'id_anggota'; // Primary key tabel
    public $incrementing = true; // Jika primary key berupa integer auto increment
    protected $keyType = 'int'; // Tipe data primary key (integer)

    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas',
        'jurusan',
        'username',
        'password',
    ];
}
