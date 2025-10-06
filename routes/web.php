<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\ArtikelPageController;
use App\Http\Controllers\MateriPageController;

Route::get('/', function () {
    return view('home');
});

Route::prefix('RadenOnly')->name('admin.')->group(function () {

    // Rute Artikel
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');
    // Rute Materi
    Route::get('/materi/create', [MateriController::class, 'create'])->name('materi.create');
    Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');
});

Route::get('/artikel', [ArtikelPageController::class, 'index'])->name('artikel.index');

Route::get('/materi', [MateriPageController::class, 'index'])->name('materi.index');