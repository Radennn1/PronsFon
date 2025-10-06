<footer class="bg-gradient-to-r from-orange-500 to-red-500 text-white py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 md:gap-12">

            {{-- Kolom Kiri: Logo dan Kontak --}}
            <div class="col-span-1">
                <div class="mb-4">
                    <a href="/">
                        {{-- Memanggil komponen logo dan memberikan kelas untuk ukuran --}}
                        {{-- Pastikan logo_pronsfon_white.png ada di public/images --}}
                        <x-application-logo class="block h-10 w-auto rounded-full" />
                    </a>
                </div>
                <div class="text-sm space-y-2">
                    <p>+1 (7635) 547-42-97</p>
                    <p>support@ilit.agency</p>
                </div>
            </div>

            {{-- Kolom Kanan: Quick Links (Materi, Pengucapan Simbol Fonetis) --}}
            <div class="col-span-1 md:col-span-1"> {{-- Disesuaikan untuk menempati 1 kolom di md ke atas --}}
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/materi') }}" class="hover:underline">Materi</a></li>
                    <li><a href="{{ url('/simbol-fonetik') }}" class="hover:underline">Pengucapan Simbol Fonetis</a></li>
                </ul>
            </div>

            {{-- Kolom Kanan Tengah: Quick Links (Transkrip, Penunjuk Fonetis) --}}
            <div class="col-span-1 md:col-span-1"> {{-- Disesuaikan untuk menempati 1 kolom di md ke atas --}}
                <h3 class="text-lg font-semibold mb-4">&nbsp;</h3> {{-- Judul kosong agar sejajar --}}
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/kamus-transkripsi') }}" class="hover:underline">Transkrip</a></li>
                    <li><a href="{{ url('/penunjuk-fonetis') }}" class="hover:underline">Penunjuk Fonetis</a></li>
                </ul>
            </div>

            {{-- Kolom Kanan Paling Kanan: Quick Links (Penugasan, Artikel) --}}
            <div class="col-span-1 md:col-span-1"> {{-- Disesuaikan untuk menempati 1 kolom di md ke atas --}}
                <h3 class="text-lg font-semibold mb-4">&nbsp;</h3> {{-- Judul kosong agar sejajar --}}
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('artikel.index') }}" class="hover:underline">Artikel</a></li>
                </ul>
            </div>

        </div>

        {{-- Garis Pemisah (Opsional) --}}
        <hr class="border-white/20 mt-10 mb-6 hidden md:block"> {{-- Hanya tampil di desktop --}}

        {{-- Copyright (Opsional) --}}
        {{-- <div class="text-center text-sm opacity-80">
            &copy; {{ date('Y') }} Pronsfon. All rights reserved.
        </div> --}}

    </div>
</footer>