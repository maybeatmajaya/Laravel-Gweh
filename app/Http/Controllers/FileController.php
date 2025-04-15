<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048', // Validasi file
        ]);
        // Pastikan ada file yang diupload
        
        // Mengambil file dari request
        $file = $request->file('document');

        // Membuat nama file baru dengan format timestamp + nama asli file
        $filename = time() . '.' . $file->getClientOriginalName();

        // Menyimpan file dengan nama yang sudah diubah ke folder documents di disk public
        $path = $file->storeAs('documents', $filename, 'public');

        // Alternatif jika ingin menggunakan UUID
        // use Illuminate\Support\Str;
        // $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        return "File uploaded: $path";

        // Contoh lain untuk menyimpan text file
        // Storage::put('file.txt', 'isi dari text file');
        // return 'File berhasil disimpan!';
    }
}
