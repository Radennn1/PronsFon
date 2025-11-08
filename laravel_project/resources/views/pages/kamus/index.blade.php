<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    Transkripsi Fonetis
                </h1>
                <p class="text-lg sm:text-xl opacity-90">
                    Ketik sebuah kata untuk melihat transkripsi fonetisnya berdasarkan IPA.
                </p>
            </div>
        </section>

        {{-- Konten "Translator" --}}
        <section class="bg-white py-12">
            <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <form action="{{ route('kamus.index') }}" method="GET">
                        {{-- Kotak Input --}}
                        <div class="mb-4">
                            <label for="kata_sumber" class="block text-gray-700 font-bold mb-2">Kata Sumber:</label>
                            <input type="text" name="kata_sumber" id="kata_sumber" value="{{ $inputKata ?? '' }}"
                                   class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                   placeholder="Contoh: senang" required>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                    class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline transition">
                                Transkripsikan
                            </button>
                        </div>
                    </form>

                    {{-- Bagian Hasil (Hanya muncul jika ada hasil) --}}
                    @if ($hasilTranskripsi)
                        <hr class="my-8">
                        <div class="text-center">
                            @if (is_object($hasilTranskripsi))
                                <p class="text-gray-600">Hasil transkripsi untuk '<span class="font-bold">{{ $hasilTranskripsi->kata_sumber }}</span>' ({{ $hasilTranskripsi->bahasa }}):</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">{{ $hasilTranskripsi->transkripsi_fonetik }}</p>
                            @else
                                <p class="text-red-500">{{ $hasilTranskripsi }}</p>
                            @endif
                        </div>
                    @endif

                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>