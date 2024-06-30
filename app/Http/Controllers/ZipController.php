<?php

namespace App\Http\Controllers;

use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ZipController extends Controller
{
    public function downloadZip()
{
    // Nama file zip yang akan dibuat
    $zipFileName = 'ijazah.zip';
    
    // Inisialisasi objek ZipArchive
    $zip = new ZipArchive();
    
    // Path ke direktori dengan file-file yang akan di-zip
    $filesPath = storage_path('app/public/ijazah'); // Ubah sesuai dengan lokasi file Anda di storage
    
    if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
        // List semua file yang ada di direktori
        $files = Storage::files('public/ijazah');

        foreach ($files as $file) {
            // Tambahkan setiap file ke dalam zip
            $filePath = storage_path('app/' . $file);
            $zip->addFile($filePath, basename($file));
        }
        
        // Tutup zip
        $zip->close();
    } else {
        // Jika gagal membuka file zip
        return response()->json(['message' => 'Failed to create zip file'], 500);
    }
    
    // Set header untuk men-download file zip yang sudah dibuat
    if (file_exists($zipFileName)) {
        return response()->download($zipFileName)->deleteFileAfterSend(true);
    } else {
        return response()->json(['message' => 'Zip file not found'], 404);
    }
}
}
