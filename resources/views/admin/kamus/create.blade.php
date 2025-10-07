@extends('components.layouts.admin')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Tambah Data Kamus Transkripsi</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('admin.kamus.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="kata_sumber" class="block text-gray-700 font-bold mb-2">Kata Sumber:</label>
                <input type="text" name="kata_sumber" id="kata_sumber" value="{{ old('kata_sumber') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('kata_sumber') border-red-500 @enderror" placeholder="Contoh: makan">
                @error('kata_sumber')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="transkripsi_fonetik" class="block text-gray-700 font-bold mb-2">Transkripsi Fonetis (IPA):</label>
                <input type="text" name="transkripsi_fonetik" id="transkripsi_fonetik" value="{{ old('transkripsi_fonetik') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('transkripsi_fonetik') border-red-500 @enderror" placeholder="Contoh: [makan]">
                @error('transkripsi_fonetik')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="bahasa" class="block text-gray-700 font-bold mb-2">Bahasa:</label>
                <select name="bahasa" id="bahasa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('bahasa') border-red-500 @enderror">
                    <option value="">Pilih Bahasa</option>
                    <option value="Indonesia" {{ old('bahasa') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                    <option value="Melayu" {{ old('bahasa') == 'Melayu' ? 'selected' : '' }}>Melayu</option>
                    <option value="Dayak" {{ old('bahasa') == 'Dayak' ? 'selected' : '' }}>Dayak</option>
                </select>
                @error('bahasa')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection