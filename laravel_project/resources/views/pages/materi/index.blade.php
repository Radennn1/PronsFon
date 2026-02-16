<x-layouts.guest>
    <main>
        {{-- Header Halaman --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[400px] flex items-center justify-center pt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
                    Materi Pembelajaran
                </h1>
                <p class="text-lg sm:text-xl opacity-90">
                    Pelajari dasar-dasar fonetik dan linguistik melalui modul yang terstruktur.
                </p>
            </div>
        </section>

        {{-- =============================================================== --}}
        {{-- BAGIAN BARU 1: Pengantar Kajian Fonetik --}}
        {{-- =============================================================== --}}
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- 'prose' akan otomatis menata teks agar rapi dan mudah dibaca --}}
                <div class="prose max-w-none text-gray-700 text-center">
                    <p class="mb-5">Kajian fonetik menempatkan fokusnya pada bunyi ujar manusia sebagaimana adanya, tanpa memperhatikan nilai makna atau fungsi linguistiknya. Bunyi-bunyi tersebut dapat diibaratkan sebagai bahan mentah (<i>raw material</i>) yang belum memiliki makna dalam sistem bahasa karena belum diatur dalam pola tertentu. </p>
                    <p class="mb-5">Setiap bunyi, termasuk bunyi bahasa sesungguhnya adalah getaran. Getaran ini terjadi karena adanya energi yang bekerja pada bagian tubuh manusia yang menjadi sumber bunyi tersebut. Getaran ini baru disadari sebagai suatu bunyi apabila terdengar oleh telinga melalui udara. Proses terjadinya bunyi bahasa melalui empat tahap, yaitu: proses mengalirnya udara, proses fonasi, proses artikulasi, dan porses ora-nasal (Ladefoged & Jhonson, 2010).</p>
                </div>
            </div>
        </section>

        {{-- =============================================================== --}}
        {{-- BAGIAN BARU 2: Organ-Organ Bicara (Alat Ucap) --}}
        {{-- =============================================================== --}}
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                    Organ-Organ Bicara (Alat Ucap)
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
                    {{-- Kolom Kiri: Gambar --}}
                    <div>
                        <img src="{{ asset('images/alat_ucap.png') }}" alt="Diagram Organ Bicara Manusia" 
                            class="mx-auto w-full md:w-3/4 lg:w-full h-auto rounded-lg shadow-lg border border-gray-200 object-contain max-h-[400px]">
                        <p class="text-xs text-center text-gray-500 mt-2">Sumber: Marsono (2008)</p>
                    </div>
                    
                    {{-- Kolom Kanan: Daftar Penjelasan --}}
                    <div>
                        <p class="text-gray-700 mb-4">Organ-organ yang berfungsi untuk membentuk bunyi-bunyi bahasa dapat dilukiskan di dalam gambar ilustrasi di samping beserta dengan nama-nama organ tersebut:</p>
                        <div class="grid grid-cols-2 gap-x-6 gap-y-2 text-gray-700 text-sm">
                            <p>1. Paru-paru (lungs)</p>
                            <p>2. Batang tenggorokan (trachea)</p>
                            <p>3. Pangkal tenggorokan (larynx)</p>
                            <p>4. Pita-pita suara (vocal chords)</p>
                            <p>5. Krikoid (cricoid)</p>
                            <p>6. Tiroid (thyroid) atau lekum</p>
                            <p>7. Artienoid (arythenoids)</p>
                            <p>8. Dinding rongga kerongkongan</p>
                            <p>9. Epiglotis (epiglottis)</p>
                            <p>10. Akar lidah (root of the tongue)</p>
                            <p>11. Pangkal lidah (back of the tongue)</p>
                            <p>12. Tengah lidah (middle of the tongue)</p>
                            <p>13. Daun lidah (blade of the tongue)</p>
                            <p>14. Ujung lidah (tip of the tongue)</p>
                            <p>15. Anak tekak (uvula)</p>
                            <p>16. Langit-langit lunak (soft palate)</p>
                            <p>17. Langit-langit keras (hard palate)</p>
                            <p>18. Gusi (alveolae, gums)</p>
                            <p>19. Gigi atas (upper teeth)</p>
                            <p>20. Gigi bawah (lower teeth)</p>
                            <p>21. Bibir atas (upper lip)</p>
                            <p>22. Bibir bawah (lower lip)</p>
                            <p>23. Mulut (mouth, oral)</p>
                            <p>24. Rongga mulut (mouth cavity)</p>
                            <p>25. Rongga hidung (nasal cavity)</p>
                        </div>
                        <p class="text-gray-700 mt-6">Bunyi-bunyi bahasa yang dihasilkan oleh alat-alat ucap tersebut namanya selalu disebutkan sesuai dengan alat-alat ucap yang menghasilkannya. Ada dua macam alat ucap atau artikulatoris, yaitu artikulatoris aktif dan artikulatoris pasif. Artikulatoris aktif ialah artikulator yang dapat digerakkan, misalnya bibir, lidah, pangkal tenggorok, dan anak tekak. Sedangkan artikulatoris pasif ialah artikulator yang tidak dapat digerakkan, misalnya gigi, dan langit-langit (Akhyaruddin et al., 2020)</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- =============================================================== --}}
        {{-- BAGIAN BARU 3: Tempat Artikulasi dan Jenis Bunyi --}}
        {{-- =============================================================== --}}
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- Judul --}}
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-3">
                        Tempat Artikulasi dan Jenis Bunyi
                    </h2>
                    <div class="h-1 w-24 bg-gradient-to-r from-orange-500 to-red-500 mx-auto rounded-full"></div>
                    <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                        Berikut adalah pertemuan artikulatoris aktif dan pasif beserta penjelasan dan contoh bunyinya.
                    </p>
                </div>

                {{-- Tabel Interaktif --}}
                <div class="overflow-x-auto bg-white shadow-md rounded-2xl border border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gradient-to-r from-orange-500 to-red-500 text-white">
                            <tr>
                                <th class="px-4 py-3 text-left font-semibold">Tempat Artikulasi</th>
                                <th class="px-4 py-3 text-left font-semibold">Penjelasan Singkat</th>
                                <th class="px-4 py-3 text-left font-semibold">Artikulator yang Terlibat</th>
                                <th class="px-4 py-3 text-left font-semibold">Contoh Bunyi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700">
                            <tr><td class="px-4 py-3 font-semibold">Bilabial</td><td>Dua bibir bertemu</td><td>Bibir atas + bibir bawah</td><td>[p, b, m, ʙ, ɸ, β]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Labiodental</td><td>Bibir bawah menyentuh gigi atas</td><td>Bibir bawah + gigi atas</td><td>[ɱ, ⱱ, f, v, ʋ]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Dental</td><td>Ujung lidah menyentuh gigi atas</td><td>Lidah + gigi atas</td><td>[θ, ð]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Alveolar</td><td>Ujung lidah menyentuh gusi</td><td>Lidah + pangkal gigi</td><td>[t, d, n, r, ɾ, s, z, ɬ, ɮ, ɹ, l]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Post-alveolar</td><td>Daun lidah dekat area belakang gusi</td><td>Lidah + pangkal gigi</td><td>[ʃ, ʒ]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Retroflex</td><td>Ujung lidah melengkung ke belakang</td><td>Ujung lidah + pangkal gigi</td><td>[ʈ, ɖ, ɳ, ɽ, ʂ, ʐ, ɻ, ɭ]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Palatal</td><td>Tengah lidah mendekati langit-langit keras</td><td>Lidah tengah + langit-langit keras</td><td>[c, ɟ, ɲ, ç, ʝ, j, ʎ]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Velar</td><td>Belakang lidah menyentuh langit-langit lunak</td><td>Lidah belakang + langit-langit lunak</td><td>[k, g, ŋ, x, ɣ, ɰ, ʟ]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Uvular</td><td>Belakang lidah menyentuh anak tekak</td><td>Lidah belakang + anak tekak</td><td>[q, ɢ, ɴ, ʀ, χ, ʁ]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Faringal</td><td>Akar lidah menyempitkan faring</td><td>Akar lidah + faring</td><td>[ħ, ʕ]</td></tr>
                            <tr><td class="px-4 py-3 font-semibold">Glotal</td><td>Pita suara membuka/menutup</td><td>Glotis</td><td>[ʔ, h, ɦ]</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mt-4 text-justify">Bunyi yang mengalami dua titik hambatan sekaligus pada pita-pita suara dan pada titik artikulasi yang lain disebut konsonan bersuara (voiced consonants), misalnya: [b, d, j, g]. Sedangkan bunyi yang hanya mengalami satu hambatan pada titik artikulasi tertentu disebut konsonan tak bersuara (voiceless consonants), misalnya: [p, t, c, k]</p>


                {{-- Penjelasan Tambahan --}}
               <div class="mt-12 bg-white rounded-2xl shadow-md p-8 border-l-4 border-orange-500">
                    <h3 class="text-3xl font-bold text-[#E86A33] border-l-4 border-[#E86A33] pl-4 mb-6">
                        Kategori Bunyi Bahasa Berdasarkan Cara Pengucapan
                    </h3>

                    <ol class="space-y-6 list-decimal list-inside text-base leading-relaxed">
                        <li>
                        <span class="font-semibold text-orange-600">Vokal</span>  
                        — dihasilkan ketika udara dari paru-paru melewati pita suara yang bergetar karena celah di antara keduanya menyempit. 
                        Getaran pita suara membuat udara bergetar tanpa hambatan di tempat artikulasi lain. Oleh sebab itu, vokal disebut 
                        sebagai <em>bunyi bersuara</em> (voiced sounds).
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Letupan (Plosive) / Hambat (Stop)</span>  
                        — muncul karena aliran udara dari paru-paru tertutup sepenuhnya di suatu titik artikulasi, lalu dilepaskan tiba-tiba. 
                        Tahapan penutupan disebut <em>implosi</em>, sedangkan pelepasannya disebut <em>eksplosi</em>. Contohnya, pertemuan kedua bibir 
                        menghasilkan bunyi hambat bilabial.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Sengau (Nasal)</span>  
                        — terbentuk ketika udara dari paru-paru diarahkan keluar melalui rongga hidung, sedangkan jalur udara melalui mulut ditutup.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Afrikat (Affricate)</span>  
                        — gabungan antara bunyi hambat dan bunyi geser. Dihasilkan dengan menahan udara di satu tempat artikulasi seperti pada bunyi letupan, 
                        kemudian melepaskannya perlahan sehingga terjadi gesekan.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Geseran (Frikatif)</span>  
                        — dihasilkan ketika udara melewati celah sangat sempit antara dua organ ucap, sehingga sebagian besar aliran udara tertahan 
                        dan menimbulkan suara gesekan.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Getar (Trill)</span>  
                        — dihasilkan ketika ujung lidah bergetar cepat dan berulang kali menyentuh lengkung gusi, lalu segera terlepas dalam waktu singkat.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Approximant</span>  
                        — bunyi yang dihasilkan ketika alat ucap (seperti lidah dan langit-langit) saling mendekat, tetapi tidak cukup dekat 
                        untuk menimbulkan gesekan udara seperti pada bunyi frikatif.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Lateral Approximant</span>  
                        — bunyi yang dihasilkan ketika udara mengalir melalui sisi lidah, bukan tengahnya. Bagian tengah lidah menyentuh langit-langit 
                        sehingga udara keluar dari sisi kanan dan/atau kiri lidah.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Alir (Liquid)</span>  
                        — timbul karena udara mengalir melalui celah sempit antara pita suara dan tempat artikulasi tanpa hambatan tambahan di rongga mulut.
                        </li>

                        <li>
                        <span class="font-semibold text-orange-600">Kembar (Geminat) / Geminasi</span>  
                        — bunyi yang diucapkan dengan memperpanjang durasi penutupan atau tekanan antara fase implosi dan eksplosi pada bunyi hambat 
                        atau letupan, sehingga terdengar lebih lama dari bunyi tunggal.
                        </li>
                    </ol>
                    </div>
            </div>
        </section>

        {{-- =============================================================== --}}
        {{-- BAGIAN BARU 3: Video Pembelajaran --}}
        {{-- =============================================================== --}}
        <section class="py-8 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">
                    Video Pembelajaran
                </h2>
                <p class="text-center text-gray-600 mb-6">Video ini memaparkan proses terbentuknya bunyi bahasa melalui alat ucap manusia (proses fonasi) serta menjelaskan klasifikasi dasar bunyi vokal dan konsonan.</p>
                
                {{-- Embed Video YouTube --}}
                <div class="w-full max-w-6xl mx-auto rounded-lg overflow-hidden shadow-xl border border-gray-200">
                    <div class="relative w-full" style="padding-top: 56.25%;"> <!-- Rasio 16:9 -->
                        <iframe 
                        class="absolute inset-0 w-full h-full" 
                        src="https://www.youtube.com/embed/zkQNIRGa80c?si=K7jCjlaKWiQXH2Ja"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                {{-- Judul --}}
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">
                        Daftar Pustaka
                    </h2>
                    <div class="h-1 w-24 bg-gradient-to-r from-orange-500 to-red-500 mx-auto rounded-full"></div>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                        Sumber-sumber acuan yang digunakan dalam penyusunan materi pembelajaran fonetik berikut.
                    </p>
                </div>

                {{-- Daftar Referensi --}}
                <div class="bg-white rounded-2xl shadow-md border-l-4 border-orange-500 p-8">
                    <ol class="list-decimal list-inside space-y-4 text-gray-700 leading-relaxed">
                        <li>
                            Ladefoged, P., &amp; Johnson, K. (2010). 
                            <em>A Course in Phonetics</em> (edisi ke-6). 
                            United States: Cengage Learning.
                        </li>
                        <li>
                            Marsono. (2008). 
                            <em>Fonetik.</em> 
                            Yogyakarta: Gadjah Mada University Press.
                        </li>
                        <li>
                            Akhyaruddin., Harahap, E. P., &amp; Yusra, H. (2020). 
                            <em>Bahan Ajar Fonologi.</em> 
                            Jambi: Komunitas Gemulun Indonesia.
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        {{-- =============================================================== --}}
        {{-- BAGIAN 4: Daftar Materi (Kode Anda Sebelumnya) --}}
        {{-- =============================================================== --}}
        <section class="bg-gray-50 py-16">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                    Modul Materi Pronsfon
                </h2>
                
                <div class="space-y-6">
                    @forelse ($materis as $materi)
                        {{-- Satu Kartu Materi --}}
                        <div class="block bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-200">
                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                {{-- Judul Materi dan Konten Singkat --}}
                                <div class="flex-grow mb-3 sm:mb-0">
                                    <h2 class="text-xl font-bold text-gray-900 mb-2">
                                        {{ $materi->judul }}
                                    </h2>
                                    @if ($materi->konten)
                                        <p class="text-gray-600 text-sm">
                                            {{ Str::limit($materi->konten, 150) }}
                                        </p>
                                    @endif
                                </div>
                                
                                {{-- Tombol Unduh (hanya muncul jika ada file PDF) --}}
                                @if ($materi->file_pdf)
                                    <a href="{{ asset('storage/' . $materi->file_pdf) }}" download
                                       class="inline-flex items-center px-4 py-2 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 transition flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Unduh PDF
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="bg-white p-8 rounded-lg shadow-sm text-center text-gray-500">
                            <p>Belum ada materi yang tersedia.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
</x-layouts.guest>