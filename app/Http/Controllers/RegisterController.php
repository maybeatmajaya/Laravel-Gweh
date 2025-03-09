<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {

        $request->validate
        ([
            'username' => 'required|min:3|max:50|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'nama_lengkap' => 'required|min:3|max:100',
            'alamat' => 'nullable|max:255',
            'gaji_pokok' => 'required|numeric|min:0',
            'potongan' => 'required|numeric|min:0',
        ]);

        // Simpan ke database
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'gaji_pokok' => $request->gaji_pokok,
            'potongan' => $request->potongan,

        ]);

        // return back()->with('success', 'Registrasi berhasil!');
        // Redirect ke halaman dashboard dengan data user
    return redirect('/dashboard')->with('success', 'Registrasi berhasil!');
    }
}
