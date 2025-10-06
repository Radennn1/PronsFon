<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[400px] flex items-center justify-center pt-20">
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
        <section class="py-12 bg-gray-50">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="space-y-4">

                    @forelse ($materis as $materi)
                        {{-- Tautan ke halaman detail materi (bisa dibuat nanti) --}}
                        <a href="#" class="block bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:scale-[1.02] transition-all duration-200">
                            <h2 class="text-xl font-bold text-gray-900">{{ $materi->judul }}</h2>
                            {{-- Jika Anda menambahkan kolom deskripsi singkat di tabel materi, bisa ditampilkan di sini --}}
                            <p class="mt-2 text-gray-600">{{ $materi->konten }}</p>
                        </a>
                    @empty
                        <div class="bg-white p-6 rounded-lg shadow-sm text-center text-gray-500">
                            <p>Belum ada materi yang tersedia.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>