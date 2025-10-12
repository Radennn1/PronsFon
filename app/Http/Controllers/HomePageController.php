<?php

namespace App\Http\Controllers;

use App\Models\Ulasan; // Import model Ulasan
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        // 1. Ambil SEMUA ulasan, diurutkan dari rating terbaik, lalu yang terbaru
        $semuaUlasan = Ulasan::orderBy('rating', 'desc')->latest()->get();

        // 2. Buat variabel baru untuk carousel yang berisi 10 ulasan teratas
        $ulasanCarousel = $semuaUlasan->take(10);

        // 3. Kirim kedua variabel ke view
        return view('home', [
            'ulasanCarousel' => $ulasanCarousel,
            'semuaUlasan' => $semuaUlasan,
        ]);
    }
}