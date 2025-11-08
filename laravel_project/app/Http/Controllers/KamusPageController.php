<?php

namespace App\Http\Controllers;

use App\Models\KamusTranskripsi;
use Illuminate\Http\Request;

class KamusPageController extends Controller
{
    public function index(Request $request)
    {
        $inputKata = $request->input('kata_sumber');
        $hasilTranskripsi = null;

        // Hanya jalankan pencarian jika ada input kata
        if ($inputKata) {
            // Bersihkan input (hapus spasi ekstra dan ubah ke huruf kecil)
            $kataBersih = strtolower(trim($inputKata));

            // Cari kata di database
            $kamusData = KamusTranskripsi::where('kata_sumber', $kataBersih)->first();

            if ($kamusData) {
                // Jika ditemukan, siapkan hasilnya
                $hasilTranskripsi = $kamusData;
            } else {
                // Jika tidak ditemukan, siapkan pesan error
                $hasilTranskripsi = 'Kata tidak ditemukan dalam kamus.';
            }
        }

        // Tampilkan view dengan membawa data input dan hasilnya
        return view('pages.kamus.index', [
            'inputKata' => $inputKata,
            'hasilTranskripsi' => $hasilTranskripsi,
        ]);
    }
}