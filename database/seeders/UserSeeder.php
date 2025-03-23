<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Faraysz',
            'email' => 'Raysz@polije.ac.id',
            'password' => Hash::make('Polije1234'),
            'nama_lengkap' => 'Enthusiastic Raysz',
            'alamat' => 'Bumi 51',
            'gaji_pokok' => 5000000.00,
            'potongan' => 500000.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
