<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class LaporanController extends Controller
{
    //
        public function generatePDF()
    {
        $data = [
        'title' => 'Laporan Pegawai',
        'tanggal' => date('d-m-Y'),
        'pegawai' => [
            ['nama' => 'Andi', 'jabatan' => 'Manager'],
            ['nama' => 'Budi', 'jabatan' => 'Staff'],
        ]
    ];
    $pdf = app(PDF::class)->loadView('laporan.pegawai', $data);

    return $pdf->download('laporan-pegawai.pdf'); // Atau ->stream() untuk tampil di browser

    }

}
