<?php

namespace App\Http\Controllers;

use App\Models\SimbolFonetik;
use Illuminate\Http\Request;

class SimbolFonetikPageController extends Controller
{
    public function index()
    {
        // Ambil data dari database, urutkan berdasarkan simbol, dan gunakan pagination
        $simbols = SimbolFonetik::orderBy('simbol_ipa', 'asc')->get();

        return view('pages.simbol.index', [
            'simbols' => $simbols
        ]);
    }
}