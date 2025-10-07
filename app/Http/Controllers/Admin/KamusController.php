<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KamusTranskripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KamusController extends Controller
{
    public function create()
    {
        return view('admin.kamus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kata_sumber' => 'required|string|max:255',
            'transkripsi_fonetik' => 'required|string|max:255',
            'bahasa' => 'required|string|max:50',
        ]);

        $validated['kata_id'] = (string) Str::uuid();

        KamusTranskripsi::create($validated);

        return redirect()->route('admin.kamus.create')->with('success', 'Data transkripsi berhasil ditambahkan!');
    }
}