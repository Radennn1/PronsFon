<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SimbolFonetik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SimbolController extends Controller
{
    public function create()
    {
        return view('admin.simbol.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'simbol_ipa' => 'required|string|max:10|unique:simbol_fonetik,simbol_ipa',
            'deskripsi' => 'nullable|string',
            'file_audio' => 'required|file|mimes:mp3,wav,ogg', // Validasi file audio
        ]);

        // Proses upload file audio
        $path = $request->file('file_audio')->store('audio/fonetik', 'public');

        // Simpan data ke database
        SimbolFonetik::create([
            'simbol_id' => (string) Str::uuid(),
            'simbol_ipa' => $validated['simbol_ipa'],
            'deskripsi' => $validated['deskripsi'],
            'file_audio' => $path, // Simpan path file yang di-upload
        ]);

        return redirect()->route('admin.simbol.create')->with('success', 'Simbol fonetis berhasil ditambahkan!');
    }
}