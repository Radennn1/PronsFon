<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\KamusController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\SimbolController;
use App\Http\Controllers\Admin\TugasController;
use App\Http\Controllers\ArtikelPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KamusPageController;
use App\Http\Controllers\MateriPageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SimbolFonetikPageController;
use App\Http\Controllers\TugasPageController;
use App\Http\Controllers\UlasanController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
// ================== ROUTE ADMIN (RadenOnly) ==================
Route::prefix('RadenOnly')->name('admin.')->group(function () {

    // Rute Artikel
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');

    // Rute Materi
    Route::get('/materi/create', [MateriController::class, 'create'])->name('materi.create');
    Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');

    // Rute Tugas
    Route::get('/tugas/create', [TugasController::class, 'create'])->name('tugas.create');
    Route::post('/tugas', [TugasController::class, 'store'])->name('tugas.store');

    // Rute Kamus
    Route::get('/kamus/create', [KamusController::class, 'create'])->name('kamus.create');
    Route::post('/kamus', [KamusController::class, 'store'])->name('kamus.store');

    // Rute Simbol
    Route::get('/simbol/create', [SimbolController::class, 'create'])->name('simbol.create');
    Route::post('/simbol', [SimbolController::class, 'store'])->name('simbol.store');
});

// ================== ROUTE USER PAGE ==================
Route::get('/artikel', [ArtikelPageController::class, 'index'])->name('artikel.index');

Route::get('/materi', [MateriPageController::class, 'index'])->name('materi.index');

Route::get('/tugas', [TugasPageController::class, 'index'])->name('tugas.index');
Route::get('/tugas/{tugas}', [TugasPageController::class, 'show'])->name('tugas.show');

Route::get('/kamus-transkripsi', [KamusPageController::class, 'index'])->name('kamus.index');

Route::get('/simbol-fonetik', [SimbolFonetikPageController::class, 'index'])->name('simbol.index');

Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');

Route::get('/kebijakan-privasi', [PageController::class, 'privacy'])->name('privacy.policy');

// ================== ROUTE AUDIO PLAYER (FIX .WAV DOWNLOAD) ==================
Route::get('/audio/{filename}', function ($filename) {
    $path = storage_path('app/public/audio/fonetik/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path, [
        'Content-Type' => 'audio/wav',
        'Content-Disposition' => 'inline; filename="' . $filename . '"'
    ]);
})->where('filename', '.*');
