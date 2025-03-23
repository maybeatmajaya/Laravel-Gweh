<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function showUser()

    {
    $user = User::find(1); // Gantilah dengan data yang sesuai
    return view('user', compact('user'));
    }


    public function showForm()
    {
        return view('user');
    }

    public function store(Request $request)
    {
        $id = DB::table('users')->insertGetId([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => bcrypt('password123')
        ]);

        return response()->json(['message' => 'User created', 'id' => $id]);
    }
}
