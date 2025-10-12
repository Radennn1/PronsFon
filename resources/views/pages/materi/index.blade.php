<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    Materi Pembelajaran
                </h1>
                <p class="text-lg sm:text-xl opacity-90">
                    Pelajari dasar-dasar fonetik dan linguistik melalui modul yang terstruktur.
                </p>
            </div>
        </section>

        {{-- Daftar Konten Materi --}}
        <section class="bg-gray-50 py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="space-y-6">

                    @forelse ($materis as $materi)
                        {{-- Satu Kartu Materi --}}
                        <div class="block bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-200">
                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                {{-- Judul Materi dan Konten Singkat --}}
                                <div class="flex-grow mb-3 sm:mb-0">
                                    <h2 class="text-xl font-bold text-gray-900 mb-2">
                                        {{ $materi->judul }}
                                    </h2>
                                    {{-- Tampilkan sebagian konten --}}
                                    @if ($materi->konten)
                                        <p class="text-gray-600 text-sm">
                                            {{ Str::limit($materi->konten, 150) }}
                                        </p>
                                    @endif
                                </div>
                                
                                {{-- Tombol Unduh (hanya muncul jika ada file PDF) --}}
                                @if ($materi->file_pdf)
                                    <a href="{{ asset('storage/' . $materi->file_pdf) }}" download
                                       class="inline-flex items-center px-4 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Unduh PDF
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        {{-- Tampilan jika tidak ada materi --}}
                        <div class="bg-white p-8 rounded-lg shadow-sm text-center text-gray-500">
                            <p>Belum ada materi yang tersedia.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>