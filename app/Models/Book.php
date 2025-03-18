<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    // nama tabel dalam database(jika tidak sesuau dengan konvensi laravel)

    protected $fillable = ['title', 'description', 'status'];
    // kolom yang bisa diisi

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';


}
