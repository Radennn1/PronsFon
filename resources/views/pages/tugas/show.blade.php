<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-auto text-center text-white py-auto">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mx-auto">
                    Penugasan
                </h1>
            </div>
        </section>

        {{-- Detail Tugas --}}
        <section class="bg-white py-12">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

                {{-- Nama Tugas --}}
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">{{ $tugas->judul_tugas }}</h2>
                    <hr class="my-4">
                    <p class="text-gray-600 leading-relaxed text-center mx-50">{{ $tugas->deskripsi }}</p>
                </div>

                {{-- Capaian Tugas --}}
                @if($tugas->tujuan_capaian)
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Capaian Tugas</h2>
                    <hr class="my-4">
                    <p class="text-gray-600 leading-relaxed text-center mx-50">{{ $tugas->tujuan_capaian }}</p>
                </div>
                @endif

                {{-- Materi Relevan --}}
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 text-center">Materi Relevan</h2>
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        @forelse ($materiRelevan as $materi)
                            {{-- KARTU BARU --}}
                            <div class="bg-white rounded-lg shadow-md p-8 flex flex-col text-center">
                                {{-- Bagian Konten Teks --}}
                                <div class="flex-grow">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        {{ $materi->judul }}
                                    </h3>
                                    <p class="text-sm text-gray-500 leading-relaxed">
                                        {{-- Membuat penjelasan singkat otomatis dari konten utama --}}
                                        {{ Str::limit(strip_tags($materi->konten), 80) }}
                                    </p>
                                </div>
                                
                                {{-- Bagian Tombol (akan terdorong ke bawah) --}}
                                <div class="mt-6">
                                    <a href="#" class="inline-block px-8 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold text-sm rounded-md shadow-sm hover:opacity-90 transition">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                            
                        @empty
                            <p class="text-gray-500 col-span-3">Tidak ada materi relevan yang ditemukan.</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>