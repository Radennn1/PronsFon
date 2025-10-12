<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TugasController extends Controller
{
    public function create()
    {
        // Ambil semua kategori untuk ditampilkan di dropdown
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('admin.tugas.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_tugas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'soal' => 'required|string',
            'tujuan_capaian' => 'nullable|string',
            'kategori_tugas_id' => 'nullable|string|exists:kategori,kategori_id',
        ]);

        $validated['tugas_id'] = (string) Str::uuid();
        Tugas::create($validated);

        return redirect()->route('admin.tugas.create')->with('success', 'Tugas berhasil ditambahkan!');
    }
}