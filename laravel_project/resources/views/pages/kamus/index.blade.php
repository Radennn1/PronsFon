<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    Kamus Transkripsi Fonetis
                </h1>
                <p class="text-lg sm:text-xl opacity-90">
                    Ketik sebuah kata untuk melihat transkripsi fonetisnya berdasarkan IPA.
                </p>
            </div>
        </section>

        {{-- Konten "Translator" --}}
        <section class="py-12 bg-gray-50 -mt-20 relative z-0"> {{-- Pastikan rounded-t-2xl di sini --}}
            <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-lg"> {{-- Mengurangi p-8 menjadi p-6 --}}
                    <form action="{{ route('kamus.index') }}" method="GET">
                        <div class="mb-4">
                            <label for="kata_sumber" class="block text-sm font-medium text-gray-500 mb-2">Masukkan Kata</label> {{-- Mengganti "Teks" menjadi "Kata" --}}
                            <textarea name="kata_sumber" id="kata_sumber"
                                      class="w-full h-20 border-2 border-orange-300 rounded-lg p-3 text-lg focus:ring-orange-500 focus:border-orange-500 transition resize-none" {{-- Menambah h-20, resize-none, mengurangi p-4 menjadi p-3 --}}
                                      placeholder="Ketik satu kata di sini..."
                                      required>{{ $inputKata ?? '' }}</textarea>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <button type="submit" class="inline-flex items-center px-6 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold text-sm rounded-md shadow-sm hover:opacity-90 transition">
                                Transkripsikan
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                            </button>
                        </div>
                    </form>

                    {{-- Bagian Hasil --}}
                    @if ($hasilTranskripsi)
                        <hr class="my-6 border-gray-200"> {{-- Mengurangi my-8 menjadi my-6 dan warna border --}}
                        <div class="space-y-4"> {{-- Mengurangi space-y-6 menjadi space-y-4 --}}
                            @if (is_object($hasilTranskripsi))
                                <h3 class="text-xl font-bold text-center">Hasil untuk '<span class="text-orange-600">{{ $hasilTranskripsi->kata_sumber }}</span>'</h3>
                                
                                {{-- Hasil Indonesia --}}
                                @if($hasilTranskripsi->transkripsi_indonesia_ipa)
                                    <div class="bg-white p-4 rounded-lg flex justify-between items-center border border-gray-200 shadow-sm"> {{-- Menambahkan shadow-sm, bg-white --}}
                                        <div>
                                            <p class="text-xs text-gray-500 font-medium mb-1">Bahasa Indonesia</p> {{-- Mengurangi text-sm menjadi text-xs, mb-2 menjadi mb-1 --}}
                                            <p class="text-xl font-semibold text-gray-800">{{ $hasilTranskripsi->transkripsi_indonesia_ipa }}</p> {{-- Mengurangi text-2xl menjadi text-xl --}}
                                        </div>
                                        @if($hasilTranskripsi->audio_indonesia)
                                            <button class="play-audio-btn flex-shrink-0 p-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition shadow-md" data-audio-src="{{ asset('storage/' . $hasilTranskripsi->audio_indonesia) }}"> {{-- Mengurangi p-3 menjadi p-2 --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"> {{-- Mengurangi h-5 w-5 menjadi h-4 w-4 --}}
                                                  <path d="M6.32 3.801C6.98 3.37 7.86 3.76 7.86 4.51v10.98c0 .75-.88 1.14-1.54.71l-4.28-2.7H1a1 1 0 01-1-1V7.5a1 1 0 011-1h1.04l4.28-2.699zM10 5c-.83 0-1.5.67-1.5 1.5v7c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-7c0-.83-.67-1.5-1.5-1.5zM14 6.5c-.83 0-1.5.67-1.5 1.5v4c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-4c0-.83-.67-1.5-1.5-1.5z" />
                                                </svg>
                                            </button>
                                        @endif
                                    </div>
                                @endif

                                {{-- Hasil Dayak Ahe --}}
                                @if($hasilTranskripsi->transkripsi_dayak_ahe_ipa)
                                    <div class="bg-white p-4 rounded-lg flex justify-between items-center border border-gray-200 shadow-sm"> {{-- Menambahkan shadow-sm, bg-white --}}
                                        <div>
                                            <p class="text-xs text-gray-500 font-medium mb-1">Bahasa Dayak Ahe</p> {{-- Mengurangi text-sm menjadi text-xs, mb-2 menjadi mb-1 --}}
                                            <p class="text-xl font-semibold text-gray-800">{{ $hasilTranskripsi->transkripsi_dayak_ahe_ipa }}</p> {{-- Mengurangi text-2xl menjadi text-xl --}}
                                        </div>
                                        @if($hasilTranskripsi->audio_dayak_ahe)
                                            <button class="play-audio-btn flex-shrink-0 p-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition shadow-md" data-audio-src="{{ asset('storage/' . $hasilTranskripsi->audio_dayak_ahe) }}"> {{-- Mengurangi p-3 menjadi p-2 --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"> {{-- Mengurangi h-5 w-5 menjadi h-4 w-4 --}}
                                                  <path d="M6.32 3.801C6.98 3.37 7.86 3.76 7.86 4.51v10.98c0 .75-.88 1.14-1.54.71l-4.28-2.7H1a1 1 0 01-1-1V7.5a1 1 0 011-1h1.04l4.28-2.699zM10 5c-.83 0-1.5.67-1.5 1.5v7c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-7c0-.83-.67-1.5-1.5-1.5zM14 6.5c-.83 0-1.5.67-1.5 1.5v4c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-4c0-.83-.67-1.5-1.5-1.5z" />
                                                </svg>
                                            </button>
                                        @endif
                                    </div>
                                @endif

                            @else
                                <p class="text-center text-red-500">{{ $hasilTranskripsi }}</p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </section>

        {{-- Elemen Audio Player (Tersembunyi) --}}
        <audio id="audio-player" class="hidden"></audio>
    </main>
</x-layouts.guest>