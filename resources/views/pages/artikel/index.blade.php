<x-guest-layout>
    <main>
        {{-- Header Halaman --}}
        <section class="bg-white pt-24 pb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">Kumpulan Artikel Penelitian</h1>
                <p class="mt-2 text-gray-600">Jelajahi berbagai penelitian terbaru di bidang fonetik.</p>
            </div>
        </section>

        {{-- Daftar Konten Artikel --}}
        <section class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- Di sini Anda akan me-looping data artikel dari controller --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Contoh satu artikel --}}
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="font-bold text-xl mb-2">Judul Artikel Disini</h2>
                        <p class="text-gray-700 text-sm mb-4">Penulis: John Doe | Sumber: Jurnal Linguistik Vol. 1</p>
                        <a href="#" class="text-orange-600 hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                    {{-- Ulangi untuk artikel lain --}}
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>