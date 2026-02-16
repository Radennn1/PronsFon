<?php

namespace App\Http\Controllers;

use App\Models\Tugas; // <-- Import model Tugas
use Illuminate\Http\Request;

class TugasPageController extends Controller
{
    /**
     * Menampilkan daftar semua tugas.
     */
    public function index()
    {
        $tugas = Tugas::orderBy('urutan', 'asc')->get();

        return view('pages.tugas.index', ['tugas' => $tugas]);
    }

    /**
     * Menampilkan detail satu tugas.
     */
    public function show(Tugas $tugas)
    {
        // Ambil kategori dari tugas yang sedang ditampilkan
        $kategori = $tugas->kategori;

        $materiRelevan = collect();

        // Ambil semua materi yang berada dalam kategori yang sama
        if ($kategori) {
            $materiRelevan = $kategori->materi;
        }

        return view('pages.tugas.show', [
            'tugas' => $tugas,
            'materiRelevan' => $materiRelevan
        ]);
    }
}