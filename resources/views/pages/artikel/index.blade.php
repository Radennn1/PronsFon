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

                    @forelse ($artikels as $artikel)
                        {{-- Satu Item Artikel --}}
                        <div class="pt-10">
                            <div class="flex flex-col sm:flex-row gap-8 items-start">
                                {{-- Kolom Kiri: Judul dan Deskripsi --}}
                                <div class="flex-1">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">
                                        {{-- Link ke detail artikel (saat ini #) --}}
                                        <a href="{{ $artikel->link_atau_file }}" target="_blank" class="hover:text-orange-600">
                                            {{ $artikel->judul_artikel }}
                                        </a>
                                    </h2>
                                    <p class="text-gray-600 leading-relaxed">
                                        {{ $artikel->deskripsi_abstrak }}
                                    </p>
                                </div>
                                {{-- Kolom Kanan: Tombol --}}
                                <div class="flex-shrink-0">
                                    <a href="{{ $artikel->link_atau_file }}" target="_blank"
                                       class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold text-sm rounded-md shadow-sm hover:opacity-90 transition">
                                        Baca Artikel
                                        <span class="ml-2">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        {{-- Tampilan jika tidak ada artikel --}}
                        <div class="pt-10 text-center text-gray-500">
                            <p>Belum ada artikel yang dipublikasikan.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>