<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pronsfon - Media Pembelajaran Fonetik</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('components.layouts.navigation')
        <div>
            {{ $slot }}
        </div>
        @include('components.layouts.footer')
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const audioPlayer = document.getElementById('audio-player');
            const playButtons = document.querySelectorAll('.play-audio-btn');

            if (!audioPlayer) {
                console.error('Elemen audio player tidak ditemukan!');
                return;
            }

            playButtons.forEach(button => {
                button.addEventListener('click', async function () {
                    const audioSrc = this.dataset.audioSrc;

                    if (!audioSrc) {
                        console.error('Tombol tidak memiliki sumber audio (data-audio-src).');
                        return;
                    }

                    try {
                        // Hentikan audio sebelumnya kalau sedang bermain
                        if (!audioPlayer.paused) {
                            audioPlayer.pause();
                        }

                        // Set ulang sumber audio dan load ulang
                        audioPlayer.src = audioSrc;
                        await audioPlayer.load();

                        // Mainkan audio
                        await audioPlayer.play();
                        console.log('Memainkan audio:', audioSrc);
                    } catch (error) {
                        console.error('Gagal memutar audio:', error);
                    }
                });
            });
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenuContent = document.getElementById('mobile-menu-content');
            const menuOpenIcon = document.getElementById('menu-open-icon');
            const menuCloseIcon = document.getElementById('menu-close-icon');

            // Pastikan semua elemen ada sebelum menambahkan event listener
            if (mobileMenuButton && mobileMenuContent && menuOpenIcon && menuCloseIcon) {
                mobileMenuButton.addEventListener('click', function() {
                    // Toggle (tampilkan/sembunyikan) menu konten
                    mobileMenuContent.classList.toggle('hidden');

                    // Ganti ikon hamburger dengan ikon 'X' dan sebaliknya
                    menuOpenIcon.classList.toggle('hidden');
                    menuOpenIcon.classList.toggle('inline-flex');
                    menuCloseIcon.classList.toggle('hidden');
                    menuCloseIcon.classList.toggle('inline-flex');
                });
            }
        });
    </script>
</html>