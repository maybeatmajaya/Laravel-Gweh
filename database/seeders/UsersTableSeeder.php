<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::factory()->count(50)->create(); //membuat 50 data user

        
        // DB::table('users')->insert([
        //     'name' => 'admin User',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
