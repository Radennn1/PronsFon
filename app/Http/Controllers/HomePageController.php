<?php

namespace App\Http\Controllers;

use App\Models\Ulasan; // Import model Ulasan
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        // Ambil 6 ulasan terbaru untuk ditampilkan di slider
        $ulasans = Ulasan::latest()->take(6)->get();

        return view('home', [
            'ulasans' => $ulasans
        ]);
    }
}