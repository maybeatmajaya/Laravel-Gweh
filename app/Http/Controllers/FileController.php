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
            'document' => 'required|file|max:10240', // Maksimal 10MB
        ]);

        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            // Mengambil file dari request
            $file = $request->file('document');

            // Dapatkan ekstensi file
            $extension = $file->getClientOriginalExtension();

            // Hitung jumlah file di folder uploads
            $uploadPath = storage_path('app/public/uploads');
            $uploadCount = 1;

            // Pastikan folder uploads ada
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            } else {
                // Hitung file yang sudah ada di folder
                $existingFiles = array_filter(scandir($uploadPath), function($item) {
                    return !in_array($item, ['.', '..']);
                });
                $uploadCount = count($existingFiles) + 1;
            }

            // Format nama file: upload-ke-X-YmdHis.extension
            $fileName = 'upload-ke-' . $uploadCount . '-' . date('YmdHis') . '.' . $extension;

            // Simpan file dengan nama baru
            $path = $file->storeAs('uploads', $fileName, 'public');

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'File berhasil diupload: ' . $fileName);
        }

        return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupload file.');
    }
}
