@extends('components.layouts.admin')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Tambah Data Kamus Transkripsi</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        {{-- Form sekarang membutuhkan 'enctype' untuk file upload --}}
        <form action="{{ route('admin.kamus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="kata_sumber" class="block text-gray-700 font-bold mb-2">Kata Sumber:</label>
                <input type="text" name="kata_sumber" id="kata_sumber" value="{{ old('kata_sumber') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('kata_sumber') border-red-500 @enderror" placeholder="Contoh: makan" required>
                @error('kata_sumber')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <hr class="my-6 border-gray-300">

            {{-- Bahasa Indonesia --}}
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Bahasa Indonesia</h3>
            <div class="mb-4">
                <label for="transkripsi_indonesia_ipa" class="block text-gray-700 font-bold mb-2">Transkripsi (Indonesia):</label>
                <input type="text" name="transkripsi_indonesia_ipa" id="transkripsi_indonesia_ipa" value="{{ old('transkripsi_indonesia_ipa') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Contoh: [makan]">
                @error('transkripsi_indonesia_ipa')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-8">
                <label for="audio_indonesia" class="block text-gray-700 font-bold mb-2">Audio Pengucapan (Indonesia):</label>
                <input type="file" name="audio_indonesia" id="audio_indonesia" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <hr class="my-6 border-gray-300">

            {{-- Bahasa Dayak Ahe --}}
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Bahasa Dayak Ahe</h3>
            <div class="mb-4">
                <label for="transkripsi_dayak_ahe_ipa" class="block text-gray-700 font-bold mb-2">Transkripsi (Dayak Ahe):</label>
                <input type="text" name="transkripsi_dayak_ahe_ipa" id="transkripsi_dayak_ahe_ipa" value="{{ old('transkripsi_dayak_ahe_ipa') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Contoh: [makatn]">
            </div>
            <div class="mb-8">
                <label for="audio_dayak_ahe" class="block text-gray-700 font-bold mb-2">Audio Pengucapan (Dayak Ahe):</label>
                <input type="file" name="audio_dayak_ahe" id="audio_dayak_ahe" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection