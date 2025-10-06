<?php

namespace App\Http\Controllers;

use App\Models\Artikel; // <-- Import model Artikel
use Illuminate\Http\Request;

class ArtikelPageController extends Controller
{
    /**
     * Menampilkan daftar semua artikel.
     */
    public function index()
    {
        // 1. Ambil semua data artikel dari database, urutkan dari yang terbaru (jika ada timestamps)
        $artikels = Artikel::all(); // Anda juga bisa menggunakan ->latest()->get() jika ada timestamps

        // 2. Kirim data ke view
        return view('pages.artikel.index', [
            'artikels' => $artikels
        ]);
    }
}