<header class="absolute top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0 flex items-center">
                <a href="/">
                    <x-application-logo class="block h-10 w-auto rounded-full" />
                </a>
            </div>
            <nav class="hidden sm:ml-6 sm:flex sm:space-x-8">
                <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Beranda</a>
                <a href="{{ route('materi.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Materi</a>
                <a href="{{ route('simbol.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Simbol Fonetik</a>
                <a href="{{ route('kamus.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Kamus Transkripsi</a>
                <a href="{{ route('tugas.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-200 transition">Penunjuk Fonetis</a>
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
    <div class="sm:hidden hidden bg-white shadow-lg border-t border-gray-200" id="mobile-menu-content">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('home') ? 'border-orange-500 bg-orange-50 text-orange-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Beranda</a>
            <a href="{{ route('materi.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('materi.index') ? 'border-orange-500 bg-orange-50 text-orange-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Materi</a>
            <a href="{{ route('simbol.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('simbol.index') ? 'border-orange-500 bg-orange-50 text-orange-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Simbol Fonetis</a>
            <a href="{{ route('kamus.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('kamus.index') ? 'border-orange-500 bg-orange-50 text-orange-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Kamus Transkripsi</a>
            <a href="{{ route('tugas.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('tugas.index') ? 'border-orange-500 bg-orange-50 text-orange-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Penunjuk Fonetis</a>
            <a href="{{ route('artikel.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('artikel.index') ? 'border-orange-500 bg-orange-50 text-orange-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Artikel</a>
        </div>
    </div>
</header>