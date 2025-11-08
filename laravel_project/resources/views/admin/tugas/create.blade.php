@extends('components.layouts.admin')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Tambah Tugas Baru</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('admin.tugas.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="judul_tugas" class="block text-gray-700 font-bold mb-2">Judul Tugas:</label>
                <input type="text" name="judul_tugas" id="judul_tugas" value="{{ old('judul_tugas') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('judul_tugas') border-red-500 @enderror">
                @error('judul_tugas')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="kategori_tugas_id" class="block text-gray-700 font-bold mb-2">Kategori Terkait:</label>
                <select name="kategori_tugas_id" id="kategori_tugas_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('kategori_tugas_id') border-red-500 @enderror">
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->kategori_id }}" {{ old('kategori_tugas_id') == $kategori->kategori_id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('kategori_tugas_id')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi/Instruksi Tugas:</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="soal" class="block text-gray-700 font-bold mb-2">Soal / Instruksi Detail:</label>
                <textarea name="soal" id="soal" rows="7" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('soal') border-red-500 @enderror">{{ old('soal') }}</textarea>
                @error('soal')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tujuan_capaian" class="block text-gray-700 font-bold mb-2">Tujuan/Capaian Tugas (Opsional):</label>
                <textarea name="tujuan_capaian" id="tujuan_capaian" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('tujuan_capaian') }}</textarea>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Tugas
                </button>
            </div>
        </form>
    </div>
@endsection