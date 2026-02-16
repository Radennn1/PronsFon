<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pronsfon - Media Pembelajaran Fonetik</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('storage/favicon.png') }}" type="image/png">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    @include('components.layouts.navigation')

    <div>
        {{ $slot }}
    </div>

    @include('components.layouts.footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /* ===============================
               2. Swiper - Fitur
            =============================== */
            if (document.querySelector('.swiper-fitur')) {
                new Swiper('.swiper-fitur', {
                    slidesPerView: 3,
                    spaceBetween: 24,
                    loop: true,
                    grabCursor: true,
                    navigation: {
                        nextEl: '.swiper-fitur-next',
                        prevEl: '.swiper-fitur-prev',
                    },
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        0: { slidesPerView: 1, spaceBetween: 10 },
                        768: { slidesPerView: 2, spaceBetween: 20 },
                        1024: { slidesPerView: 3, spaceBetween: 30 },
                    },
                });
            }

            /* ==============================================
            2. Swiper – Ulasan
            =============================================== */
            const swiperUlasan = new Swiper(".swiper-ulasan", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".swiper-ulasan-next",
                prevEl: ".swiper-ulasan-prev",
            },
            breakpoints: {
                0: { slidesPerView: 1, spaceBetween: 10 },
                768: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 30 },
            },
            });

            /* ===============================
               4. Modal Ulasan
            =============================== */
            const ulasanModal = document.getElementById('ulasan-modal');
            const modalContent = document.getElementById('modal-content');
            const openBtn = document.getElementById('open-ulasan-modal');
            const closeBtn = document.getElementById('close-ulasan-modal');

            if (ulasanModal && openBtn && closeBtn) {
                const openModal = () => {
                    ulasanModal.classList.remove('hidden');
                    setTimeout(() => modalContent.classList.remove('-translate-y-12', 'opacity-0'), 50);
                };

                const closeModal = () => {
                    modalContent.classList.add('-translate-y-12', 'opacity-0');
                    setTimeout(() => ulasanModal.classList.add('hidden'), 300);
                };

                openBtn.addEventListener('click', openModal);
                closeBtn.addEventListener('click', closeModal);

                ulasanModal.addEventListener('click', (e) => {
                    if (e.target === ulasanModal) closeModal();
                });
            }

        /* ===============================
           Pemutar Audio (Simbol Fonetik - Chart Interaktif)
        =============================== */
        const buttons = document.querySelectorAll('.ipa-button');
        const player = document.getElementById('audio-player');

        buttons.forEach(button => {
            button.addEventListener('click', async () => {
                const symbol = button.textContent.trim();
                const basePath = `/storage/audio/fonetik/${symbol}`;
                
                // Coba versi .ogg dulu
                let audioPath = `${basePath}.ogg`;
                let canPlay = player.canPlayType('audio/ogg');

                // Jika tidak bisa, fallback ke .mp3
                if (!canPlay) {
                    audioPath = `${basePath}.mp3`;
                }

                // Cek apakah file audio ada
                try {
                    const response = await fetch(audioPath, { method: 'HEAD' });
                    if (!response.ok) throw new Error('File audio tidak ditemukan');
                } catch {
                    console.warn(`Audio untuk simbol "${symbol}" tidak ditemukan: ${audioPath}`);
                    return;
                }

                // Setel audio dan mainkan
                player.src = audioPath;
                player.play().catch(err => console.error('Gagal memutar:', err));

                // Efek visual klik
                button.classList.add('ring-4', 'ring-orange-400', 'scale-110', 'transition', 'duration-300');
                setTimeout(() => {
                    button.classList.remove('ring-4', 'ring-orange-400', 'scale-110');
                }, 300);
            });
        });
            /* ===============================
               6. Navigasi Mobile Menu
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

        const semuaUlasanModal = document.getElementById('semua-ulasan-modal');
        const semuaModalContent = document.getElementById('semua-modal-content');
        const openSemuaBtn = document.getElementById('open-semua-ulasan-modal');
        const closeSemuaBtn = document.getElementById('close-semua-ulasan-modal');

        if (semuaUlasanModal && openSemuaBtn && closeSemuaBtn) {
            const openSemuaModal = () => {
                semuaUlasanModal.classList.remove('hidden');
                setTimeout(() => {
                    semuaModalContent.classList.remove('-translate-y-12', 'opacity-0');
                }, 50);
            };

            const closeSemuaModal = () => {
                semuaModalContent.classList.add('-translate-y-12', 'opacity-0');
                setTimeout(() => {
                    semuaUlasanModal.classList.add('hidden');
                }, 300);
            };

            openSemuaBtn.addEventListener('click', openSemuaModal);
            closeSemuaBtn.addEventListener('click', closeSemuaModal);
            semuaUlasanModal.addEventListener('click', function(event) {
                if (event.target === semuaUlasanModal) {
                    closeSemuaModal();
                }
            });
        }

        document.querySelectorAll('.abstract-container').forEach(container => {
            const fullAbstract = container.querySelector('.full-abstract');
            const shortAbstract = container.querySelector('.short-abstract');
            const toggleButton = container.querySelector('.read-more-toggle');
            // const maxLength = parseInt(container.dataset.maxLength); // Jika ingin ambil dari data-attribute

            if (toggleButton) {
                toggleButton.addEventListener('click', function () {
                    const isMinimized = shortAbstract.classList.contains('hidden');

                    if (isMinimized) {
                        shortAbstract.classList.remove('hidden');
                        fullAbstract.classList.add('hidden');
                        toggleButton.textContent = 'Baca Selengkapnya';
                    } else {
                        shortAbstract.classList.add('hidden');
                        fullAbstract.classList.remove('hidden');
                        toggleButton.textContent = 'Sembunyikan';
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
