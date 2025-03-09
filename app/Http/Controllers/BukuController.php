<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\View;

class BukuController extends Controller
{
    /**~
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view('index', compact('buku'));

        //
    }
}
