<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    // ... (metode create tetap sama) ...
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Menyimpan artikel baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk
        $validated = $request->validate([
            'judul_artikel' => 'required|string|max:255',
            'penulis' => 'nullable|string|max:255',
            'deskripsi_abstrak' => 'nullable|string', // <-- PERUBAHAN DI SINI
            'file_pdf' => 'required|file|mimes:pdf|max:51200',
        ]);

        $pdfPath = $request->file('file_pdf')->store('artikel-pdf', 'public');
        // 2. Tambahkan ID unik
        $validated['artikel_id'] = (string) Str::uuid();

        // 3. Simpan data
        Artikel::create([
            'artikel_id' => (string) Str::uuid(),
            'judul_artikel' => $validated['judul_artikel'],
            'penulis' => $validated['penulis'],
            'deskripsi_abstrak' => $validated['deskripsi_abstrak'],
            'file_pdf' => $pdfPath, // Simpan path PDF
        ]);

        // 4. Kembali dengan pesan sukses
        return redirect()->route('admin.artikel.create')->with('success', 'Artikel berhasil ditambahkan!');
    }
}