<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin'; // Nama tabel
    protected $primaryKey = 'id_admin'; // Primary key
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password', 'remember_token'];
}