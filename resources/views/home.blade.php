<x-layouts.guest>
    <main class="bg-white">
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 fixed top-24 right-4 z-50" role="alert">
                <p class="font-bold">Sukses!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[500px] flex items-center justify-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    PronsFon
                </h1>
                <p class="text-lg sm:text-xl opacity-90">
                    Maksimalkan pemahaman fonetik Anda dan pelajari transkripsi dari awal hingga akhir dengan cara yang interaktif.
                </p>
                <div class="mt-8">
                    <a href="{{ url('/materi') }}" class="inline-block px-8 py-3 border border-transparent text-base font-medium rounded-md text-orange-600 bg-white hover:bg-gray-100">
                        Mulai Belajar
                    </a>
                </div>
            </div>              
        </section>

        <section class="py-16 lg:py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight">
                    Tentang PronsFon
                </h2>
                <p class="mt-6 max-w-2xl mx-auto text-lg text-gray-600">
                    Aplikasi pembelajaran linguistik berbasis web untuk memfasilitasi pemahaman fonetik yang lebih baik. Pelajari transkripsi, simbol IPA, dan pengucapan dengan cara yang modern dan interaktif, dapat diakses dari komputer, ponsel, atau tablet Anda.
                </p>
            </div>
        </section>
        <hr class="mt-12 w-[70%] mx-auto border-t-2 border-orange-500">
        {{-- Section 2: Fitur --}}
        <section class="pt-10 pb-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Fitur</h2>
                    <span class="pt- 2 text-orange-500">
                        {{-- Ikon Baru: Table Cells --}}
                        <svg width="64px" height="64px" viewBox="-6.72 -6.72 37.44 37.44" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)matrix(1, 0, 0, 1, 0, 0)" stroke="#F97316"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.24000000000000005"></g><g id="SVGRepo_iconCarrier"><path d="M20.6 4H3.4A2.4 2.4 0 0 0 1 6.4v11.2A2.4 2.4 0 0 0 3.4 20h17.2a2.4 2.4 0 0 0 2.4-2.4V6.4A2.4 2.4 0 0 0 20.6 4Z" fill="#F97316" fill-opacity=".16" stroke="#F97316" stroke-width="1.752" stroke-miterlimit="10"></path><path d="M6 9h8M6 12h8" stroke="#F97316" stroke-width="1.752" stroke-miterlimit="10" stroke-linecap="round"></path></g></svg>                
                </div>
                <div id="fitur-slider" class="splide" aria-label="Fitur Pronsfon">
                    <div class="splide__track">
                        <ul class="splide__list">
                            {{-- Card 1: Materi --}}
                            <li class="splide__slide p-2">
                                <div class="bg-white rounded-lg shadow p-8 flex flex-col text-center h-full border border-gray-200 min-h-[200px]">
                                    <div class="flex-grow">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Materi</h3>
                                        <p class="text-sm text-gray-500">Modul pembelajaran terstruktur mulai dari dasar fonetik hingga klasifikasi bunyi.</p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('materi.index') }}" class="inline-block px-8 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">Lihat</a>
                                    </div>
                                </div>
                            </li>
                            {{-- Card 2: Simbol Fonetis --}}
                            <li class="splide__slide p-2">
                                <div class="bg-white rounded-lg shadow p-8 flex flex-col text-center h-full border border-gray-200 min-h-[200px]">
                                    <div class="flex-grow">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Pengucapan Simbol Fonetis</h3>
                                        <p class="text-sm text-gray-500">Dengarkan audio pengucapan setiap simbol IPA untuk melatih pendengaran Anda.</p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('simbol.index') }}" class="inline-block px-8 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">Lihat</a>
                                    </div>
                                </div>
                            </li>
                            {{-- Card 3: Kamus Transkripsi --}}
                            <li class="splide__slide p-2">
                                <div class="bg-white rounded-lg shadow p-8 flex flex-col text-center h-full border border-gray-200 min-h-[200px]">
                                    <div class="flex-grow">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Transkrip</h3>
                                        <p class="text-sm text-gray-500">Ubah kata dari ejaan biasa ke dalam bentuk transkripsi fonetis secara instan.</p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('kamus.index') }}" class="inline-block px-8 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">Lihat</a>
                                    </div>
                                </div>
                            </li>
                            
                            {{-- =============================================================== --}}
                            {{-- KARTU BARU: PENUNJUK FONETIS (TUGAS) --}}
                            {{-- =============================================================== --}}
                            <li class="splide__slide p-2">
                                <div class="bg-white rounded-lg shadow p-8 flex flex-col text-center h-full border border-gray-200 min-h-[200px]">
                                    <div class="flex-grow">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Penunjuk Fonetis</h3>
                                        <p class="text-sm text-gray-500">Terapkan pengetahuan fonetik Anda melalui latihan dan tugas praktis yang terarah.</p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('tugas.index') }}" class="inline-block px-8 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">Lihat</a>
                                    </div>
                                </div>
                            </li>

                            {{-- =============================================================== --}}
                            {{-- KARTU BARU: ARTIKEL --}}
                            {{-- =============================================================== --}}
                            <li class="splide__slide p-2">
                                <div class="bg-white rounded-lg shadow p-8 flex flex-col text-center h-full border border-gray-200 min-h-[200px]">
                                    <div class="flex-grow">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Artikel</h3>
                                        <p class="text-sm text-gray-500">Jelajahi berbagai penelitian dan wawasan terbaru di bidang linguistik dan fonetik.</p>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('artikel.index') }}" class="inline-block px-8 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">Lihat</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <hr class="mt-12 w-[70%] mx-auto border-t-2 border-orange-500">
        {{-- Section 3: Kata Mereka (Testimoni) --}}
        <section class="py-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-12">
                    {{-- Judul Section --}}
                    <div class="flex items-center">
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Kata Mereka</h2>
                        <span class="ml-4 text-orange-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </span>
                    </div>
                    {{-- Tombol Aksi --}}
                    <div class="flex space-x-2">
                        <button id="open-ulasan-modal" class="px-4 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">
                            Beri Ulasan
                        </button>
                        <a href="#" class="px-4 py-2 bg-gray-200 text-gray-800 font-semibold text-sm rounded-md hover:bg-gray-300 transition">
                            Lihat Semua
                        </a>
                    </div>
                </div>

                @if($ulasans->count() > 0)
                <div id="ulasan-slider" class="splide" aria-label="Testimoni Pengguna">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @forelse ($ulasans as $ulasan)
                            <li class="splide__slide p-2">
                                {{-- KARTU ULASAN BARU (Mirip Kartu Fitur) --}}
                                <div class="bg-white rounded-lg shadow-lg p-8 flex flex-col border border-gray-200 min-h-[320px]">
                                    {{-- Rating Bintang --}}
                                    <div class="flex items-center justify-center mb-4 text-orange-400">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $ulasan->rating)
                                                {{-- Bintang Terisi --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.007z" clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                {{-- Bintang Kosong --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                    
                                    {{-- Isi Ulasan --}}
                                    <div class="flex-grow">
                                        <p class="text-gray-600 italic">"{{ $ulasan->isi_ulasan }}"</p>
                                    </div>

                                    {{-- Nama Pengirim --}}
                                    <div class="mt-6">
                                        <p class="font-bold text-gray-800">{{ $ulasan->nama_pengirim }}</p>
                                        <p class="text-sm text-gray-500">{{ $ulasan->universitas_pengirim }}</p>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <li class="splide__slide p-2">
                                <div class="bg-white rounded-lg shadow-lg p-8 text-center h-full border border-gray-200">
                                    <p class="text-gray-500">Belum ada ulasan yang diberikan.</p>
                                </div>
                            </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                @else
                <div class="text-center text-gray-500 bg-gray-50 p-8 rounded-lg">
                    <p>Belum ada ulasan.</p>
                </div>
                @endif
            </div>
        </section>
    </main>
    <div id="ulasan-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        {{-- Konten Modal --}}
        <div id="modal-content" class="bg-white rounded-lg shadow-xl w-full max-w-lg p-8 transform transition-all -translate-y-12 opacity-0">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold">Beri Ulasan Anda</h3>
                <button id="close-ulasan-modal" class="text-gray-400 hover:text-gray-600">&times;</button>
            </div>

            <form action="{{ route('ulasan.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="nama_pengirim" class="block text-sm font-medium text-gray-700">Nama Anda</label>
                        <input type="text" name="nama_pengirim" id="nama_pengirim" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <div>
                        <label for="universitas_pengirim" class="block text-sm font-medium text-gray-700">Asal Universitas</label>
                        <input type="text" name="universitas_pengirim" id="universitas_pengirim" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <div>
                        <label for="isi_ulasan" class="block text-sm font-medium text-gray-700">Ulasan Anda</label>
                        <textarea name="isi_ulasan" id="isi_ulasan" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500"></textarea>
                    </div>
                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700">Rating (1-5)</label>
                        <select name="rating" id="rating" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                            <option value="">Pilih Rating</option>
                            <option value="5">5 - Sangat Baik</option>
                            <option value="4">4 - Baik</option>
                            <option value="3">3 - Cukup</option>
                            <option value="2">2 - Kurang</option>
                            <option value="1">1 - Sangat Kurang</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">
                            Kirim Ulasan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest>