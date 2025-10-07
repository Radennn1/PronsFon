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
        $tugas = Tugas::all();
        return view('pages.tugas.index', ['tugas' => $tugas]);
    }

    /**
     * Menampilkan detail satu tugas.
     */
    public function show(Tugas $tugas)
    {
        // Ambil kategori dari tugas yang sedang ditampilkan
        $kategori = $tugas->kategori;

        // Ambil semua materi yang berada dalam kategori yang sama
        $materiRelevan = $kategori->materi;

        return view('pages.tugas.show', [
            'tugas' => $tugas,
            'materiRelevan' => $materiRelevan
        ]);
    }
}