<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[580px] flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-10">
                    Detail Penugasan
                </h1>
            </div>
        </section>

        {{-- Detail Tugas --}}
        <section class="py-12 bg-white -mt-20 relative z-0">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

                {{-- Judul dan Deskripsi --}}
                <div class="prose max-w-none">
                    <h2 class="text-3xl font-bold text-gray-900 not-prose">{{ $tugas->judul_tugas }}</h2>
                    <br>
                    @if($tugas->deskripsi)
                        <p class="lead">{{ $tugas->deskripsi }}</p>
                    @endif
                </div>

                <hr class="my-12 w-[70%] mx-auto border-t-2 border-orange-500">

                {{-- Soal / Instruksi --}}
                <div class="prose max-w-none">
                    <h3 class="text-2xl font-bold text-gray-900 not-prose">Soal / Instruksi</h3>
                    <p class="whitespace-pre-wrap">{{ $tugas->soal }}</p>
                </div>

                <hr class="my-12 w-[70%] mx-auto border-t-2 border-orange-500">

                {{-- Capaian Tugas --}}
                @if($tugas->tujuan_capaian)
                <div class="prose max-w-none">
                    <h3 class="text-2xl font-bold text-gray-900 not-prose">Capaian Tugas</h3>
                    <p class="whitespace-pre-wrap">{{ $tugas->tujuan_capaian }}</p>
                </div>
                @endif

                <hr class="my-12 w-[70%] mx-auto border-t-2 border-orange-500">

                {{-- Materi Relevan --}}
                @if($materiRelevan->count() > 0)
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Materi Relevan</h2>

                    <div class="relative max-w-6xl mx-auto px-8">
                        {{-- Tombol Navigasi di kiri-kanan luar --}}
                        <div class="absolute -left-8 top-1/2 transform -translate-y-1/2 z-10">
                            <button class="swiper-button-prev-custom bg-orange-500 hover:bg-orange-600 text-white p-3 rounded-full shadow-md transition">
                                {{-- Heroicon panah kiri --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute -right-8 top-1/2 transform -translate-y-1/2 z-10">
                            <button class="swiper-button-next-custom bg-orange-500 hover:bg-orange-600 text-white p-3 rounded-full shadow-md transition">
                                {{-- Heroicon panah kanan --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                        {{-- Swiper Container --}}
                        <div class="swiper mySwiper w-full overflow-hidden">
                            <div class="swiper-wrapper flex items-stretch mb-5">
                                @foreach ($materiRelevan as $materi)
                                    <div class="swiper-slide w-auto flex-shrink-0 flex">
                                        <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col justify-between text-center border border-gray-100 h-full hover:shadow-xl transition-all duration-300">
                                            <div class="flex-grow">
                                                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $materi->judul }}</h3>
                                                @if($materi->konten)
                                                    <p class="text-sm text-gray-600 leading-relaxed">
                                                        {{ Str::limit(strip_tags($materi->konten), 80) }}
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="mt-6">
                                                @if ($materi->file_pdf)
                                                    <a href="{{ asset('storage/' . $materi->file_pdf) }}" download
                                                    class="inline-flex items-center justify-center px-4 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                        </svg>
                                                        Unduh PDF
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- Pagination --}}
                            <div class="swiper-pagination !bottom-0"></div>
                        </div>
                    </div>
                </div>
                @else
                {{-- JIKA TIDAK ADA MATERI RELEVAN --}}
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Materi Relevan</h2>

                    <div class="max-w-3xl mx-auto text-center bg-gradient-to-r from-orange-100 to-orange-50 border border-orange-200 rounded-2xl shadow-sm p-8">
                        <div class="flex justify-center mb-4">
                            <div class="bg-orange-500 text-white p-3 rounded-full shadow-md">
                                {{-- Icon buku terbuka --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 0a9 9 0 019 9v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7a9 9 0 019-9zm0 0v2m0 0H5m7 0h7" />
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-xl font-semibold text-orange-700 mb-2">Belum Ada Materi Relevan</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Saat ini belum ada materi tambahan yang terkait langsung dengan tugas ini.
                            Namun, kamu bisa menjelajahi bagian
                            <span class="font-semibold text-orange-600">contoh pengucapan simbol fonetik</span>
                            atau
                            <span class="font-semibold text-orange-600">transkripsi fonetik</span> di website Pronsfon untuk memperdalam pemahamanmu.
                        </p>

                        <div class="mt-6">
                            <a href="{{ url('/materi') }}"
                            class="inline-flex items-center justify-center px-5 py-2.5 bg-orange-500 hover:bg-orange-600 text-white font-semibold text-sm rounded-md transition-all duration-200 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                                Jelajahi Materi Lain
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            </div>
        </section>
    </main>

    {{-- SwiperJS Init --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 24,
                loop: true,
                centeredSlides: false,
                grabCursor: true,
                navigation: {
                    nextEl: ".swiper-button-next-custom",
                    prevEl: ".swiper-button-prev-custom",
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    1024: { slidesPerView: 3 },
                    768: { slidesPerView: 2 },
                    640: { slidesPerView: 1 },
                },
            });
        });
    </script>
</x-layouts.guest>
