<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    Kumpulan Artikel Penelitian
                </h1>
                <p class="text-lg sm:text-xl opacity-90">
                    Jelajahi berbagai penelitian dan wawasan terbaru di bidang fonetik dan linguistik.
                </p>
            </div>
        </section>

        {{-- Daftar Konten Artikel --}}
        <section class="bg-white py-12">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- Container untuk daftar artikel, dengan garis pemisah antar item --}}
                <div class="space-y-10 divide-y divide-gray-200">

                    <div class="space-y-6"> {{-- Ubah space-y-10 menjadi space-y-6 atau sesuaikan --}}
                        @forelse ($artikels as $artikel)
                            {{-- Satu Item Artikel --}}
                            <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100"> {{-- Tambahkan kelas ini --}}
                                <div class="flex flex-col sm:flex-row gap-8 items-start">
                                    {{-- Kolom Kiri: Judul dan Deskripsi --}}
                                    <div class="flex-1">
                                        <h2 class="text-2xl font-bold text-gray-900 mb-2">
                                            <a href="{{ asset('storage/' . $artikel->file_pdf) }}" download target="_blank" class="hover:text-orange-600">
                                                {{ $artikel->judul_artikel }}
                                            </a>
                                        </h2>
                                        <div class="abstract-container text-gray-600 leading-relaxed" data-max-length="250">
                                            <span class="full-abstract hidden">
                                                {{ $artikel->deskripsi_abstrak }}
                                            </span>
                                            <span class="short-abstract">
                                                {{ Str::limit($artikel->deskripsi_abstrak, 250, '...') }}
                                            </span>
                                            @if (strlen($artikel->deskripsi_abstrak) > 250)
                                                <button class="read-more-toggle text-orange-600 hover:text-orange-700 font-semibold mt-2 block focus:outline-none">
                                                    Baca Selengkapnya
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                    {{-- Kolom Kanan: Tombol --}}
                                    <div class="flex-shrink-0 mt-4 sm:mt-0"> {{-- Tambahkan mt-4 sm:mt-0 untuk responsivitas --}}
                                        <a href="{{ asset('storage/' . $artikel->file_pdf) }}" download
                                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold text-sm rounded-md shadow-sm hover:opacity-90 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Unduh PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="pt-10 text-center text-gray-500">
                                <p>Belum ada artikel yang dipublikasikan.</p>
                            </div>
                        @endforelse
                    </div> {{-- Tutup div space-y-6 --}}
                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>