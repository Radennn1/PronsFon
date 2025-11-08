<footer class="bg-gradient-to-r from-orange-500 to-red-500 text-white py-10 sm:py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Grid Responsif --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 sm:gap-10 md:gap-12">

            {{-- Kolom Kiri: Logo dan Kontak --}}
            <div class="space-y-4">
                <div class="flex justify-center sm:justify-start mb-4">
                    <a href="/">
                        <x-application-logo class="block h-10 w-auto rounded-full" />
                    </a>
                </div>
                <div class="text-sm space-y-2 text-center sm:text-left">
                    <p>+62 895-1835-9201 (Eva Rosdiana)</p>
                    <p>erosdiana96@gmail.com</p>
                </div>
            </div>

            {{-- Kolom Quick Links 1 --}}
            <div class="text-center sm:text-left">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('materi.index') }}" class="hover:underline">Materi</a></li>
                    <li><a href="{{ route('simbol.index') }}" class="hover:underline">Pengucapan Simbol Fonetis</a></li>
                </ul>
            </div>

            {{-- Kolom Quick Links 2 --}}
            <div class="text-center sm:text-left">
                <h3 class="text-lg font-semibold mb-4">&nbsp;</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('kamus.index') }}" class="hover:underline">Transkrip</a></li>
                    <li><a href="{{ route('tugas.index') }}" class="hover:underline">Penunjuk Fonetis</a></li>
                </ul>
            </div>

            {{-- Kolom Quick Links 3 --}}
            <div class="text-center sm:text-left">
                <h3 class="text-lg font-semibold mb-4">&nbsp;</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('artikel.index') }}" class="hover:underline">Artikel</a></li>
                    <li><a href="{{ route('privacy.policy') }}" class="hover:underline">Kebijakan Privasi</a></li>
                </ul>
            </div>
        </div>

        {{-- Garis Pemisah --}}
        <hr class="border-white/20 mt-10 mb-6">

        {{-- Copyright --}}
        <div class="text-center text-sm opacity-80">
            &copy; {{ date('Y') }} Pronsfon. All rights reserved.
        </div>
    </div>
</footer>
