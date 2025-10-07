<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    public function create()
    {
        // Ambil semua kategori yang sudah ada untuk ditampilkan di dropdown
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('admin.materi.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'urutan' => 'required|integer',
            'kategori_id' => 'required|array', // Diubah menjadi array
            'kategori_id.*' => 'string|max:100', // Validasi setiap item di array
        ]);

        // Buat Materi terlebih dahulu
        $materi = Materi::create([
            'materi_id' => (string) Str::uuid(),
            'judul' => $validated['judul'],
            'konten' => $validated['konten'],
            'urutan' => $validated['urutan'],
        ]);

        $kategoriIds = [];
        foreach ($validated['kategori_id'] as $kategoriInput) {
            // Coba cari kategori berdasarkan ID (jika pengguna memilih yang sudah ada)
            $kategori = Kategori::find($kategoriInput);
            
            // Jika tidak ditemukan, berarti ini nama baru, maka buat kategori baru
            if (!$kategori) {
                $kategori = Kategori::firstOrCreate(
                    ['nama_kategori' => $kategoriInput],
                    ['kategori_id' => (string) Str::uuid()]
                );
            }
            $kategoriIds[] = $kategori->kategori_id;
        }

        // Lampirkan (attach) semua kategori yang dipilih/dibuat ke materi
        $materi->kategori()->attach($kategoriIds);

        return redirect()->route('admin.materi.create')->with('success', 'Materi berhasil ditambahkan!');
    }
}