@extends('components.layouts.admin')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Tambah Materi Baru</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('admin.materi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            {{-- Judul, Urutan --}}
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Materi:</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
             <div class="mb-4">
                <label for="urutan" class="block text-gray-700 font-bold mb-2">Nomor Urut:</label>
                <input type="number" name="urutan" id="urutan" value="{{ old('urutan') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Contoh: 1">
            </div>

            {{-- Dropdown Kategori yang bisa diketik --}}
            <div class="mb-4">
                <label for="kategori_id" class="block text-gray-700 font-bold mb-2">Kategori:</label>
                <select name="kategori_id[]" id="kategori_id" placeholder="Pilih atau ketik kategori baru...">
                    <option value="">Pilih atau ketik kategori baru...</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->kategori_id }}" {{ old('kategori_id') == $kategori->kategori_id ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('kategori_id')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="konten" class="block text-gray-700 font-bold mb-2">Konten (Teks):</label>
                <textarea name="konten" id="konten" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('konten') border-red-500 @enderror">{{ old('konten') }}</textarea>
                @error('konten')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="file_pdf" class="block text-gray-700 font-bold mb-2">Upload PDF (Opsional):</label>
                <input type="file" name="file_pdf" id="file_pdf" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('file_pdf') border-red-500 @enderror">
                @error('file_pdf')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Materi
            </button>
        </form>
    </div>
@endsection

@push('scripts')
<script>
    // Inisialisasi Tom-Select dengan opsi untuk membuat item baru
    new TomSelect('#kategori_id', {
        create: true, 
        sortField: {
            field: "text",
            direction: "asc"
        }
    });
</script>
@endpush