<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable; // Tambahkan HasApiTokens di sini

    protected $fillable = [
        'username',
        'email',
        'password',
        'nama_lengkap',
        'alamat',
        'gaji_pokok',
        'potongan',
    ];

}

// class User extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'username', 'email', 'password', 'nama_lengkap', 'alamat', 'gaji_pokok', 'potongan'
//     ];
//     public $timestamps = true; // aktifkan timestamps

//     protected $hidden = ['password'];
// }
