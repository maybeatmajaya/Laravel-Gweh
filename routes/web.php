<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\UserController;

// // Route untuk dashboard pengguna
// Route::get('/dashboard', function () {
//     // Pastikan user sudah login
//     if (Auth::check()) {
//         $user = Auth::user(); // Ambil data user yang sedang login
//         return view('dashboard', compact('user'));
//     }
//     // return redirect('/login'); // Jika belum login, arahkan ke halaman login
// });

Route::get('/dashboard', function () {
    $user = (object) ['role' => 'guest']; // Set user default sebagai guest
    return view('dashboard', compact('user'));
});

// Route untuk halaman greeting
Route::get('/greeting', function () {
    return view('greeting', ['name' => 'John']);
});

// Route untuk halaman home
Route::get('/home', function () {
    return view('home');
});

// Route untuk halaman user
Route::get('/user', function () {
    $user = (object) ['role' => 'admin']; // Ganti sesuai role yang diinginkan
    $status = 'completed'; // Ganti sesuai status yang diinginkan
    return view('user', compact('user', 'status'));
});

// Route fallback jika URL tidak ditemukan
Route::fallback(function () {
    return "404 - Not Found";
});

Route::get('/content', function () {
    return view('content');
});
