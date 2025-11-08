<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    Pengucapan Simbol Fonetis
                </h1>
                <p class="text-lg sm:text-xl opacity-90">
                    Klik tombol "Mainkan" untuk mendengar pengucapan setiap simbol IPA.
                </p>
            </div>
        </section>

        {{-- Grid Konten Simbol --}}
        <section class="bg-white py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

                @if($simbols->count() > 0)
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-6">
                        @foreach ($simbols as $simbol)
                            {{-- Satu Kartu Simbol --}}
                            <div class="bg-white rounded-lg shadow-sm p-6 flex flex-col text-center items-center border border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $simbol->deskripsi ?? 'Simbol' }}</h3>
                                <div class="my-4 text-6xl font-serif text-orange-600 mb-8">
                                    {{ $simbol->simbol_ipa }}
                                </div>

                                {{-- Tombol Mainkan --}}
                                <button
                                    class="play-audio-btn mt-auto inline-block px-6 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition"
                                    data-audio-src="{{ url('audio/' . basename($simbol->file_audio)) }}">
                                    Mainkan
                                </button>
                            </div>
                        @endforeach
                    </div>

                    {{-- Link Pagination --}}
                    <div class="mt-12">
                        {{ $simbols->links() }}
                    </div>
                @else
                    <div class="text-center text-gray-500 bg-white p-8 rounded-lg shadow-sm">
                        <p>Belum ada data simbol fonetis yang diinput.</p>
                    </div>
                @endif

            </div>
        </section>

        {{-- Elemen Audio Player (Tersembunyi) --}}
        <audio id="audio-player" class="hidden"></audio>
    </main>
</x-layouts.guest>