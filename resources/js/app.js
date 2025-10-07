import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
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