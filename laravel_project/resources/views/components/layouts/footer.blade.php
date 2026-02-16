<footer class="bg-gradient-to-r from-orange-500 to-red-500 text-white py-10 sm:py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Grid Responsif --}}
        {{-- Mengurangi gap-y di mobile lebih drastis, menjaga gap-x untuk sm ke atas --}}
        {{-- Mengubah gap-y-8 menjadi gap-y-6 --}}
        <div class="grid grid-cols-1 gap-y-0 sm:grid-cols-2 sm:gap-y-2 sm:gap-x-8 md:grid-cols-3 md:gap-x-6 lg:grid-cols-4 lg:gap-x-8">

            {{-- Kolom Kiri: Logo dan Kontak --}}
            {{-- Mengurangi mb-8 menjadi mb-6 untuk mobile --}}
            <div class="space-y-4 text-center sm:text-left mb-0 sm:mb-0">
                <div class="flex justify-center sm:justify-start mb-4">
                    <a href="/">
                        <x-application-logo class="block h-10 w-auto rounded-full" />
                    </a>
                </div>
                <div class="text-sm space-y-2">
                    <p>+62 895-1835-9201 (Eva Rosdiana)</p>
                    <p>erosdiana96@gmail.com</p>
                </div>
            </div>

            {{-- Kolom Quick Links 1 --}}
            {{-- Mengurangi mb-6 menjadi mb-4 untuk mobile --}}
            <div class="text-center sm:text-left mb-4 sm:mb-0">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('materi.index') }}" class="hover:underline">Materi</a></li>
                    <li><a href="{{ route('simbol.index') }}" class="hover:underline">Pengucapan Simbol Fonetis</a></li>
                </ul>
            </div>

            {{-- Kolom Quick Links 2 --}}
            {{-- Mengurangi mb-6 menjadi mb-4 untuk mobile --}}
            <div class="text-center sm:text-left mb-4 sm:mb-0">
                <h3 class="text-lg font-semibold mb-4">&nbsp;</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('kamus.index') }}" class="hover:underline">Transkrip</a></li>
                    <li><a href="{{ route('tugas.index') }}" class="hover:underline">Penunjuk Fonetis</a></li>
                </ul>
            </div>

            {{-- Kolom Quick Links 3 --}}
            {{-- Mengurangi mb-6 menjadi mb-4 untuk mobile --}}
            <div class="text-center sm:text-left mb-4 sm:mb-0">
                <h3 class="text-lg font-semibold mb-4">&nbsp;</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('artikel.index') }}" class="hover:underline">Artikel</a></li>
                    <li><a href="{{ route('privacy.policy') }}" class="hover:underline">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>

        {{-- Garis Pemisah --}}
        <hr class="border-white/20 mt-8 mb-6"> {{-- Mengurangi mt-10 menjadi mt-8 --}}

        {{-- Copyright --}}
        <div class="text-center text-sm opacity-80">
            &copy; {{ date('Y') }} Pronsfon. All rights reserved.
        </div>
    </div>
</footer>