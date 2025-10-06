<header class="absolute top-0 left-0 w-full z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0 flex items-center">
                <a href="/">
                    <x-application-logo class="block h-10 w-auto rounded-full" />
                </a>
            </div>
            <nav class="hidden sm:ml-6 sm:flex sm:space-x-8">
                <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Beranda</a>
                <a href="{{ url('/materi') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Materi</a>
                <a href="{{ url('/simbol-fonetik') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Simbol Fonetik</a>
                <a href="{{ url('/kamus-transkripsi') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Kamus Transkripsi</a>
                <a href="{{ url('/penunjuk-fonetis') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Penunjuk Fonetis</a>
                <a href="{{ route('artikel.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Artikel</a>
            </nav>
            <div class="-mr-2 flex items-center sm:hidden">
                <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-200 hover:text-white hover:bg-white/10 focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path id="menu-open-icon" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path id="menu-close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="sm:hidden hidden bg-gray-800/90 backdrop-blur-sm" id="mobile-menu-content">
    </div>
</header>