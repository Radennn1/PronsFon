<?php
// app/Http/Controllers/Admin/KamusController.php
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
            'kata_sumber' => 'required|string|max:255|unique:kamus_transkripsi,kata_sumber',
            'transkripsi_indonesia_ipa' => 'nullable|string|max:255',
            'audio_indonesia' => 'nullable|file|mimes:mp3,wav,ogg,m4a|max:5120', // Maks 5MB
            'transkripsi_dayak_ahe_ipa' => 'nullable|string|max:255',
            'audio_dayak_ahe' => 'nullable|file|mimes:mp3,wav,ogg,m4a|max:5120', // Maks 5MB
        ]);

        // Pastikan setidaknya satu transkripsi diisi
        if (empty($validated['transkripsi_indonesia_ipa']) && empty($validated['transkripsi_dayak_ahe_ipa'])) {
            return back()->withErrors(['transkripsi_indonesia_ipa' => 'Minimal satu field transkripsi harus diisi.'])->withInput();
        }

        $data = $validated;
        $data['kata_id'] = (string) Str::uuid();

        // Handle file upload Indonesia
        if ($request->hasFile('audio_indonesia')) {
            $data['audio_indonesia'] = $request->file('audio_indonesia')->store('audio/kamus', 'public');
        }

        // Handle file upload Dayak Ahe
        if ($request->hasFile('audio_dayak_ahe')) {
            $data['audio_dayak_ahe'] = $request->file('audio_dayak_ahe')->store('audio/kamus', 'public');
        }

        KamusTranskripsi::create($data);

        return redirect()->route('admin.kamus.create')->with('success', 'Data transkripsi berhasil ditambahkan!');
    }
}