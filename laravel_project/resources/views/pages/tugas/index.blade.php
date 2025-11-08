<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">Penunjuk Fonetis</h1>
                <p class="text-lg sm:text-xl opacity-90">Terapkan pengetahuan Anda melalui latihan praktis berikut.</p>
            </div>
        </section>

        {{-- Daftar Tugas --}}
        <section class="bg-white py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="space-y-4">
                    @forelse ($tugas as $item)
                        <a href="{{ route('tugas.show', $item) }}" class="block bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition">
                            <h2 class="text-xl font-bold text-gray-900">{{ $item->judul_tugas }}</h2>
                            <p class="mt-2 text-sm text-gray-600">{{ Str::limit($item->deskripsi, 150) }}</p>
                        </a>
                    @empty
                        <p class="text-center text-gray-500">Belum ada tugas yang tersedia.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>