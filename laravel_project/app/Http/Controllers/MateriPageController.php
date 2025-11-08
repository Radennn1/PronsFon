<?php

namespace App\Http\Controllers;

use App\Models\Materi; // <-- Import model Materi
use Illuminate\Http\Request;

class MateriPageController extends Controller
{
    /**
     * Menampilkan daftar semua materi.
     */
    public function index()
    {
        // Ambil semua data dari tabel 'materi', urutkan berdasarkan kolom 'urutan'
        $materis = Materi::orderBy('urutan', 'asc')->get();

        // Kirim data ke view
        return view('pages.materi.index', [
            'materis' => $materis
        ]);
    }
}