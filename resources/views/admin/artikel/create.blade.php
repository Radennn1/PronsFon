@extends('components.layouts.admin')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Tambah Artikel Baru</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('admin.artikel.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="judul_artikel" class="block text-gray-700 font-bold mb-2">Judul Artikel:</label>
                <input type="text" name="judul_artikel" id="judul_artikel" value="{{ old('judul_artikel') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('judul_artikel') border-red-500 @enderror">
                @error('judul_artikel')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="penulis" class="block text-gray-700 font-bold mb-2">Penulis (Opsional):</label>
                <input type="text" name="penulis" id="penulis" value="{{ old('penulis') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="deskripsi_abstrak" class="block text-gray-700 font-bold mb-2">Deskripsi/Abstrak (Opsional):</label>
                <textarea name="deskripsi_abstrak" id="deskripsi_abstrak" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('deskripsi_abstrak') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="link_atau_file" class="block text-gray-700 font-bold mb-2">Link atau Path File:</label>
                <input type="text" name="link_atau_file" id="link_atau_file" value="{{ old('link_atau_file') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('link_atau_file') border-red-500 @enderror">
                 @error('link_atau_file')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Artikel
                </button>
            </div>
        </form>
    </div>
@endsection