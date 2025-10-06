<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    // ... (metode create tetap sama, tidak perlu lagi mengambil kategori) ...
    public function create()
    {
        return view('admin.materi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'urutan' => 'required|integer',
            'nama_kategori' => 'required|string|max:100', // <-- Nama field di form
        ]);

        // Logika untuk mencari atau membuat kategori baru
        $kategori = Kategori::firstOrCreate(
            ['nama_kategori' => $validated['nama_kategori']], // Kriteria pencarian
            ['kategori_id' => (string) Str::uuid()]            // Data jika harus membuat baru
        );

        Materi::create([
            'materi_id' => (string) Str::uuid(),
            'judul' => $validated['judul'],
            'konten' => $validated['konten'],
            'urutan' => $validated['urutan'],
            'kategori_id' => $kategori->kategori_id, // Gunakan ID dari kategori yang ditemukan/dibuat
        ]);

        return redirect()->route('admin.materi.create')->with('success', 'Materi berhasil ditambahkan!');
    }
}