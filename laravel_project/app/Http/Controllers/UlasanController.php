<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UlasanController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pengirim' => 'required|string|max:100',
            'universitas_pengirim' => 'required|string|max:255',
            'isi_ulasan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5' // Menambahkan rating (opsional)
        ]);

        $validated['ulasan_id'] = (string) Str::uuid();

        Ulasan::create($validated);

        // Kembali ke halaman utama dengan pesan sukses
        return redirect()->route('home')->with('success', 'Terima kasih atas ulasan Anda!');
    }
}