<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    // nama tabel dalam database(jika tidak sesuau dengan konvensi laravel)

    protected $fillable = ['nama', 'harga', 'stok'];
    // mass assignment protection, atribut yang boleh diisi oleh user

    protected $primaryKey = 'id_book';

    public $incrementing = false;

    protected $keyType = 'string';
}
