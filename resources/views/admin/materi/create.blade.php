@extends('components.layouts.admin')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Tambah Materi Baru</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('admin.materi.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Materi:</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('judul') border-red-500 @enderror">
                @error('judul')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="urutan" class="block text-gray-700 font-bold mb-2">Nomor Urut:</label>
                <input type="number" name="urutan" id="urutan" value="{{ old('urutan') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('urutan') border-red-500 @enderror" placeholder="Contoh: 1">
                @error('urutan')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nama_kategori" class="block text-gray-700 font-bold mb-2">Nama Kategori:</label>
                <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nama_kategori') border-red-500 @enderror" placeholder="Ketik kategori baru atau yang sudah ada">
                @error('nama_kategori')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="konten" class="block text-gray-700 font-bold mb-2">Konten:</label>
                <textarea name="konten" id="konten" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('konten') border-red-500 @enderror">{{ old('konten') }}</textarea>
                @error('konten')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Materi
                </button>
            </div>
        </form>
    </div>
@endsection