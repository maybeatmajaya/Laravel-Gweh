<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul' => 'Belajar Laravel',
                'pengarang' => 'Faraysz',
                'tgl_pembelian' => '2050-03-01',
                'jumlah_ex' => 10,
                'status' => 'tersedia',
            ],
            [
                'judul' => 'Pemrograman PHP',
                'pengarang' => 'Atmajaya',
                'tgl_pembelian' => '2024-02-15',
                'jumlah_ex' => 5,
                'status' => 'tidak tersedia',
            ]
        ]);
    }
}
