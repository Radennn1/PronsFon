<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // ... (metode team() jika masih ada) ...

    /**
     * Menampilkan halaman kebijakan privasi.
     */
    public function privacy()
    {
        return view('pages.kebijakan-privasi');
    }
}