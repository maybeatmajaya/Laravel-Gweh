<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Ambil user yang sedang login
        $status = 'pending'; // Contoh status order

        return view('dashboard', compact('user', 'status'));
    }
}
// , 'status'
