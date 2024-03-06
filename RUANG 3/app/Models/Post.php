<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'nis',
        'nama_siswa',
        'kelas',
        'jurusan',
        'bahasa_indonesia',
        'bahasa_inggris',
        'matematika',
        'pkn',
        'senibudaya',
        'agama',
        'ipas',
    ];
}
