<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pronsfon - Media Pembelajaran Fonetik</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    @include('components.layouts.navigation')

    <div>
        {{ $slot }}
    </div>

    @include('components.layouts.footer')

    {{-- JS library Splide --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Inisialisasi Semua Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
             if (document.getElementById('materi-relevan-slider')) {
                new Splide('#materi-relevan-slider', {
                    type: 'loop',
                    focus: 'center',
                    perPage: 3, // Tampilkan 3 kartu di desktop
                    gap: '1.5rem',
                    pagination: false,
                    padding: { left: '2rem', right: '2rem' },
                    breakpoints: {
                        1024: { // Tablet
                            perPage: 2,
                        },
                        640: { // Mobile
                            perPage: 1,
                            padding: '2rem', // Beri jarak di mobile
                        },
                    }
                }).mount();
            }
            /* ===============================
               1. Inisialisasi Slider (Splide)
            =============================== */
            if (document.getElementById('fitur-slider')) {
                new Splide('#fitur-slider', {
                    type: 'loop',
                    perPage: 3,
                    focus: 'center',
                    gap: '1.5rem',
                    pagination: false,
                    breakpoints: {
                        768: { perPage: 2 },
                        640: { perPage: 1 },
                    },
                }).mount();
            }

            if (document.getElementById('ulasan-slider')) {
                new Splide('#ulasan-slider', {
                    type: 'loop',
                    perPage: 3,
                    focus: 'center',
                    gap: '1.5rem',
                    pagination: false,
                    padding: '2rem',
                    breakpoints: {
                        768: { perPage: 2 },
                        640: { perPage: 1 },
                    },
                }).mount();
            }

            const ulasanModal = document.getElementById('ulasan-modal');
            const modalContent = document.getElementById('modal-content');
            const openBtn = document.getElementById('open-ulasan-modal');
            const closeBtn = document.getElementById('close-ulasan-modal');

            const openModal = () => {
                ulasanModal.classList.remove('hidden');
                // Efek animasi saat muncul
                setTimeout(() => {
                    modalContent.classList.remove('-translate-y-12', 'opacity-0');
                }, 50);
            };

            const closeModal = () => {
                // Efek animasi saat menghilang
                modalContent.classList.add('-translate-y-12', 'opacity-0');
                setTimeout(() => {
                    ulasanModal.classList.add('hidden');
                }, 300);
            };

            openBtn.addEventListener('click', openModal);
            closeBtn.addEventListener('click', closeModal);

            // Tutup modal jika klik di luar area konten modal
            ulasanModal.addEventListener('click', function(event) {
                if (event.target === ulasanModal) {
                    closeModal();
                }
            });

            /* ===============================
               2. Pemutar Audio (Simbol Fonetik)
            =============================== */
            const audioPlayer = document.getElementById('audio-player');
            const playButtons = document.querySelectorAll('.play-audio-btn');

            if (audioPlayer) {
                playButtons.forEach(button => {
                    button.addEventListener('click', async function () {
                        const audioSrc = this.dataset.audioSrc;

                        if (!audioSrc) {
                            console.error('Tombol tidak memiliki sumber audio (data-audio-src).');
                            return;
                        }

                        try {
                            if (!audioPlayer.paused) {
                                audioPlayer.pause();
                            }

                            audioPlayer.src = audioSrc + '?v=' + Date.now(); // cegah cache
                            await audioPlayer.load();
                            await audioPlayer.play();

                            console.log('Memainkan audio:', audioSrc);
                        } catch (error) {
                            console.error('Gagal memutar audio:', error);
                        }
                    });
                });
            } else {
                console.warn('Elemen audio player tidak ditemukan.');
            }


            /* ===============================
               3. Navigasi Mobile Menu
            =============================== */
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenuContent = document.getElementById('mobile-menu-content');
            const menuOpenIcon = document.getElementById('menu-open-icon');
            const menuCloseIcon = document.getElementById('menu-close-icon');

            if (mobileMenuButton && mobileMenuContent && menuOpenIcon && menuCloseIcon) {
                mobileMenuButton.addEventListener('click', function () {
                    mobileMenuContent.classList.toggle('hidden');

                    menuOpenIcon.classList.toggle('hidden');
                    menuOpenIcon.classList.toggle('inline-flex');
                    menuCloseIcon.classList.toggle('hidden');
                    menuCloseIcon.classList.toggle('inline-flex');
                });
            }

        });
    </script>

    {{-- Tempatkan stack script dari Blade --}}
    @stack('scripts')
</body>
</html>
