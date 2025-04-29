<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\ImagickEscposImage; // kalau pakai imagick
use Mike42\Escpos\EscposImage; // kalau pakai GD

class ReceiptController extends Controller
{
    public function index()
    {
        try {
            $connector = new WindowsPrintConnector("print");
            $printer = new Printer($connector);

            // Load logo
            $logoPath = public_path('astra.png');
            $logo = EscposImage::load($logoPath, false);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            // $picture->EscposImage::load('public/astra.png'); // cetak logo di tengah
            $printer->graphics($logo); // cetak logo di tengah

            // Isi struk
            $printer->text("TOL ASTRA\n");
            $printer->text("Gerbang Tol Jember\n");
            $printer->text("Petugas : Faraysz\n");
            $printer->text("========================\n");
            $printer->setJustification(Printer::JUSTIFY_LEFT);
            $printer->text("No. Transaksi : E41230453\n");
            $printer->text("Tanggal       : 28-04-2025 14:35\n");
            $printer->text("Jenis Kendaraan: Golongan 1\n");
            $printer->text("------------------------\n");
            $printer->text("Tarif Tol     : Rp15.000\n");
            $printer->text("========================\n");
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("Selamat Jalan Masbroo!\n");
            $printer->cut();
            $printer->close();

            return response()->json(['message' => 'Struk TOL JEMBER AMBARAWA berhasil dicetak']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
