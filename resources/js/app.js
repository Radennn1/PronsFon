import './bootstrap'; // Jika Anda menggunakan bootstrap.js bawaan Laravel

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuContent = document.getElementById('mobile-menu-content');

    if (mobileMenuButton && mobileMenuContent) {
        mobileMenuButton.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            mobileMenuContent.classList.toggle('hidden');
        });
    }
});