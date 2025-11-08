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
                    Program Transkripsi Fonetik interaktif untuk mahasiswa. Ubah kata menjadi simbol IPA (otomatis/manual), akses materi, contoh pengucapan, artikel, dan penugasan fonetik. Pahami bunyi bahasa dan transkripsikan dengan tepat.
                </p>
                <div class="mt-8">
                    <a href="{{ url('/materi') }}" class="inline-block px-8 py-3 border border-transparent text-base font-medium rounded-md text-orange-600 bg-white hover:bg-gray-100">
                        Mulai Belajar
                    </a>
                </div>
            </div>              
        </section>

        <section class="py-16 lg:py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight">
                        Sejarah Singkat Perkembangan Fonetik
                    </h2>
                </div>
                <div class="prose max-w-none text-gray-600 text-center">
                    <p>Fonetik sebagai ilmu bahasa memiliki sejarah panjang yang berawal dari kajian bunyi dalam bahasa Sanskerta oleh Panini pada abad ke-5 SM. Panini, seorang ahli tata bahasa India kuno, telah merumuskan deskripsi sistematis mengenai bunyi ujaran melalui karya monumentalnya Ashtadhyayi. Pada masa Yunani Kuno, tokoh seperti Aristoteles dan Democritus turut mempelajari bunyi sebagai bagian dari filsafat bahasa.</p>
                    <p>Perkembangan signifikan terjadi pada abad ke-19, dan pada tahun 1886, berdirinya International Phonetic Association (IPA) di Paris menjadi tonggak penting. Lembaga ini menciptakan International Phonetic Alphabet, sistem simbol bunyi internasional yang masih digunakan hingga saat ini. Pada abad ke-20, fonetik berkembang lebih jauh dengan bantuan teknologi seperti spektrograf, dan kini dipandang sebagai disiplin ilmiah yang menjembatani linguistik, fisiologi, akustik, dan psikologi untuk memahami bagaimana manusia menghasilkan dan memahami bunyi bahasa.</p>
                </div>
            </div>
        </section>

        {{-- GARIS PEMISAH --}}
        <hr class="mt-12 w-[70%] mx-auto border-t-2 border-orange-500">

        {{-- =============================================================== --}}
        {{-- Section 3: Fonetik sebagai Ilmu (BARU) --}}
        {{-- =============================================================== --}}
        <section class="py-16 lg:py-24 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight">
                        Fonetik sebagai Ilmu Suara
                    </h2>
                </div>
                <div class="prose max-w-none text-gray-600 space-y-8">
                    <p>Kajian fonetik berfokus pada analisis bunyi-bunyi bahasa tanpa mempertimbangkan hubungan dengan makna kata. Ilmu bunyi (fonetik) dibagi ke dalam tiga fokus pembahasan utama:</p>
                    <div>
                        <h3 class="font-bold text-xl text-gray-800">1. Fonetik Artikulatoris (Articulatory Phonetics)</h3>
                        <p>Mempelajari bagaimana bunyi dihasilkan oleh alat ucap manusia. Alat ucap ini dibagi menjadi artikulator aktif (yang dapat digerakkan seperti bibir dan lidah) dan pasif (yang tidak dapat digerakkan seperti gigi dan langit-langit).</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl text-gray-800">2. Fonetik Akustik (Acoustic Phonetics)</h3>
                        <p>Mempelajari aspek fisik bunyi bahasa sebagai gelombang suara. Fokus utamanya adalah memahami bagaimana karakteristik akustik seperti frekuensi, amplitudo, dan durasi berkaitan dengan cara kita mempersepsi bunyi tersebut.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl text-gray-800">3. Fonetik Auditoris (Auditory Phonetics)</h3>
                        <p>Berfokus pada bagaimana bunyi diterima dan diproses oleh pendengar, mencakup studi tentang bagaimana telinga manusia dan otak menginterpretasikan sinyal-sinyal bunyi.</p>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- GARIS PEMISAH --}}
        <hr class="mt-12 w-[70%] mx-auto border-t-2 border-orange-500">

        {{-- =============================================================== --}}
        {{-- Section 4: Relevansi & Mengapa Pronsfon? (BARU) --}}
        {{-- =============================================================== --}}
        <section class="py-16 lg:py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Kolom Kiri: Relevansi --}}
                <div class="prose max-w-none text-gray-600">
                    <h2 class="text-3xl font-extrabold text-gray-900 not-prose">Relevansi dalam Pembelajaran Bahasa</h2>
                    <p class="text-justify">Pronsfon menjembatani pemahaman teori fonetik dengan praktik nyata. Pemahaman fonetik adalah dasar penting untuk meningkatkan kemampuan pelafalan, pendengaran, dan produksi ujaran yang benar. Sebagai media pembelajaran, Pronsfon memungkinkan pengguna untuk mempelajari, mendengarkan, dan mempraktikkan bunyi bahasa secara langsung, membuat pembelajaran lebih menarik dan efektif.</p>
                </div>
                {{-- Kolom Kanan: Keunggulan --}}
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Mengapa Pronsfon?</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 mr-4">✓</span>
                            <span class="text-gray-700">Akses fleksibel kapan saja dan di mana saja.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 mr-4">✓</span>
                            <span class="text-gray-700">Fitur interaktif seperti audio pengucapan bunyi.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 mr-4">✓</span>
                            <span class="text-gray-700">Contoh penulisan fonetik untuk belajar mandiri.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 mr-4">✓</span>
                            <span class="text-gray-700">Materi yang selalu sesuai dengan perkembangan ilmu.</span>
                        </li>
                         <li class="flex items-start">
                            <span class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 mr-4">✓</span>
                            <span class="text-gray-700">Gratis untuk digunakan.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <hr class="mt-12 w-[70%] mx-auto border-t-2 border-orange-500">

        {{-- Section 2: Fitur --}}
        <section class="pt-10 pb-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Fitur</h2>
                <span class="ml-3 text-orange-500">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                </span>
                </div>

                <!-- Swiper Container -->
                <div class="relative">
                <div class="swiper swiper-fitur">
                    <div class="swiper-wrapper">
                    <!-- Card -->
                    <div class="swiper-slide p-2">
                        <div class="bg-white rounded-xl shadow-md p-8 text-center border border-gray-200 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Materi</h3>
                            <p class="text-sm text-gray-600">Modul pembelajaran terstruktur mulai dari dasar fonetik hingga klasifikasi bunyi.</p>
                        </div>
                        <a href="{{ route('materi.index') }}" class="mt-6 inline-block bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition">Lihat</a>
                        </div>
                    </div>

                    <div class="swiper-slide p-2">
                        <div class="bg-white rounded-xl shadow-md p-8 text-center border border-gray-200 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pengucapan Simbol Fonetis</h3>
                            <p class="text-sm text-gray-600">Dengarkan audio pengucapan setiap simbol IPA untuk melatih pendengaran Anda.</p>
                        </div>
                        <a href="{{ route('simbol.index') }}" class="mt-6 inline-block bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition">Lihat</a>
                        </div>
                    </div>

                    <div class="swiper-slide p-2">
                        <div class="bg-white rounded-xl shadow-md p-8 text-center border border-gray-200 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Transkrip</h3>
                            <p class="text-sm text-gray-600">Ubah kata dari ejaan biasa ke bentuk transkripsi fonetis secara instan.</p>
                        </div>
                        <a href="{{ route('kamus.index') }}" class="mt-6 inline-block bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition">Lihat</a>
                        </div>
                    </div>

                    <div class="swiper-slide p-2">
                        <div class="bg-white rounded-xl shadow-md p-8 text-center border border-gray-200 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Penunjuk Fonetis</h3>
                            <p class="text-sm text-gray-600">Latihan dan tugas praktis untuk mengasah kemampuan fonetik Anda.</p>
                        </div>
                        <a href="{{ route('tugas.index') }}" class="mt-6 inline-block bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition">Lihat</a>
                        </div>
                    </div>

                    <div class="swiper-slide p-2">
                        <div class="bg-white rounded-xl shadow-md p-8 text-center border border-gray-200 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Artikel</h3>
                            <p class="text-sm text-gray-600">Jelajahi wawasan dan riset menarik di bidang linguistik dan fonetik.</p>
                        </div>
                        <a href="{{ route('artikel.index') }}" class="mt-6 inline-block bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition">Lihat</a>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Tombol Navigasi -->
                <div
                class="swiper-fitur-prev absolute left-0 top-1/2 -translate-y-1/2 z-10 flex justify-center items-center">
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                </div>

                <div
                class="swiper-fitur-next absolute right-0 top-1/2 -translate-y-1/2 z-10 flex justify-center items-center">
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                </div>
                </div>
            </div>
        </section>
        <hr class="mt-12 w-[70%] mx-auto border-t-2 border-orange-500">

        {{-- Section 3: Kata Mereka (Testimoni) --}}
        <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-12">
            <div class="flex items-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Kata Mereka</h2>
                <span class="ml-4 text-orange-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                </span>
            </div>
            <div class="flex space-x-2">
                <button id="open-ulasan-modal"
                class="px-4 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">Beri
                Ulasan</button>
                <button id="open-semua-ulasan-modal" class="px-4 py-2 bg-gray-200 text-gray-800 font-semibold text-sm rounded-md hover:bg-gray-300 transition">
                    Lihat Semua
                </button>
            </div>
            </div>

            @if($ulasanCarousel->count() > 0)
            <div class="relative">
            <div class="swiper swiper-ulasan pb-12">
                <div class="swiper-wrapper">
                @foreach ($ulasanCarousel as $ulasan)
                <div class="swiper-slide flex justify-center p-2">
                    <div
                    class="bg-white rounded-2xl shadow-md border border-gray-200 p-8 w-full max-w-sm flex flex-col justify-between text-center">
                    <div class="flex justify-center mb-4 text-orange-400">
                        @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $ulasan->rating)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="w-5 h-5 mx-0.5">
                            <path
                                d="M12 .587l3.668 7.431L24 9.753l-6 5.847L19.335 24 12 19.897 4.665 24 6 15.6 0 9.753l8.332-1.735z" />
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            class="w-5 h-5 mx-0.5">
                            <path
                                d="M12 .587l3.668 7.431L24 9.753l-6 5.847L19.335 24 12 19.897 4.665 24 6 15.6 0 9.753l8.332-1.735z" />
                            </svg>
                        @endif
                        @endfor
                    </div>
                    <p class="text-gray-600 italic mb-6">"{{ $ulasan->isi_ulasan }}"</p>
                    <div>
                        <p class="font-bold text-gray-800">{{ $ulasan->nama_pengirim }}</p>
                        <p class="text-sm text-gray-500">{{ $ulasan->universitas_pengirim }}</p>
                    </div>
                    </div>
                </div>
                @endforeach
                </div>

                <!-- Tombol navigasi -->
                <div
                class="swiper-ulasan-prev absolute left-0 top-1/2 -translate-y-1/2 z-10 flex justify-center items-center">
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                </div>

                <div
                class="swiper-ulasan-next absolute right-0 top-1/2 -translate-y-1/2 z-10 flex justify-center items-center">
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                </div>
            </div>
            </div>
            @else
            <div class="text-center text-gray-500 bg-gray-50 p-8 rounded-lg">
            <p>Belum ada ulasan.</p>
            </div>
            @endif
        </div>
        </section>
        <hr class="mt-12 w-[70%] mx-auto border-t-2 border-orange-500">
        <section class="py-16 lg:py-24 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight">
                        Tim Pengembang Pronsfon
                    </h2>
                </div>
                
                <div class="space-y-8">
                    {{-- Kartu Anggota Tim --}}
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900">Eva Rosdiana, S.Pd.</h3>
                        <p class="mt-1 text-gray-600">Mahasiswa Pascasarjana Program Studi Pendidikan Bahasa Indonesia di Universitas Tanjungpura</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900">Prof. Dr. H. Ahadi Sulissusiawan, M.Pd.</h3>
                        <p class="mt-1 text-gray-600">Dosen Ilmu Sastra Program Studi Pendidikan Bahasa Indonesia di Universitas Tanjungpura</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900">Dr. Henny Sanulita, M.Pd.</h3>
                        <p class="mt-1 text-gray-600">Dosen Ilmu Pembelajaran Program Studi Pendidikan Bahasa Indonesia di Universitas Tanjungpura</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900">Hotma Simanjuntak, M.Hum, Ph.D.</h3>
                        <p class="mt-1 text-gray-600">Dosen Ilmu Linguistik Program Studi Pendidikan Bahasa Indonesia di Universitas Tanjungpura</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900">Dr. Patriantoro, M.Hum.</h3>
                        <p class="mt-1 text-gray-600">Dosen Ilmu Linguistik Program Studi Pendidikan Bahasa Indonesia di Universitas Tanjungpura</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900">Khairullah, M.Pd.</h3>
                        <p class="mt-1 text-gray-600">Dosen Program Studi Pendidikan Bahasa Indonesia di Universitas Tanjungpura</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900">Raden Adang Edithya Astama</h3>
                        <p class="mt-1 text-gray-600">Pengembang Situs</p>
                    </div>
                </div>
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
    <div id="semua-ulasan-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div id="semua-modal-content" class="bg-white rounded-lg shadow-xl w-full max-w-4xl transform transition-all -translate-y-12 opacity-0">
            <div class="flex justify-between items-center p-6 border-b">
                <h3 class="text-2xl font-bold">Semua Ulasan</h3>
                <button id="close-semua-ulasan-modal" class="text-gray-400 hover:text-gray-600 text-3xl">&times;</button>
            </div>
            {{-- Konten yang bisa di-scroll --}}
            <div class="p-6 max-h-[70vh] overflow-y-auto">
                <div class="space-y-6">
                    @forelse ($semuaUlasan as $ulasan)
                        {{-- Kartu Ulasan di dalam Modal --}}
                        <div class="bg-gray-50 p-4 rounded-lg border">
                            <div class="flex items-center justify-center mb-2 text-orange-400">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $ulasan->rating)
                                        {{-- Bintang Terisi (Solid) --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.007z" clip-rule="evenodd" />
                                        </svg>
                                    @else
                                        {{-- Bintang Kosong (Outline) --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <p class="text-gray-600 italic text-center">"{{ $ulasan->isi_ulasan }}"</p>
                            <div class="mt-4 text-center">
                                <p class="font-bold text-gray-800 text-sm">{{ $ulasan->nama_pengirim }}</p>
                                <p class="text-xs text-gray-500">{{ $ulasan->universitas_pengirim }}</p>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500">Belum ada ulasan.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layouts.guest>