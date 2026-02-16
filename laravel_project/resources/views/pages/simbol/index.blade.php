<x-layouts.guest>
    <main>
        {{-- Header --}}
        <section class="relative bg-gradient-to-r from-orange-500 to-red-500 min-h-[400px] flex items-center justify-center pt-20">
            <div class="max-w-4xl mx-auto px-4 text-center text-white">
                <h1 class="text-4xl sm:text-5xl font-extrabold mb-4">Pengucapan Simbol Fonetis Vokal</h1>
                <p class="text-lg opacity-90">Klik pada simbol vokal di diagram interaktif untuk mendengar pengucapannya.</p>
            </div>
        </section>

        {{-- Diagram Vokal --}}
        <section class="py-12 bg-gray-50">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-orange-600 mb-6">Vokal</h2>
                <p class="text-center text-gray-600 mb-8">
                    Klik simbol untuk mendengar pengucapan.
                </p>
        
                <!-- WRAPPER UNTUK SCROLL MOBILE -->
                <div class="w-full overflow-x-auto touch-pan-x">
                    <!-- AREA CHART (tidak diubah strukturnya) -->
                    <div class="relative bg-white border rounded-xl shadow-lg p-6 overflow-hidden aspect-[4/3] min-w-[700px] mx-auto">
                        
                        <!-- Background image -->
                        <img src="{{ asset('images/Blank_vowel_trapezoid.png') }}"
                             alt="Vowel Chart Background"
                             class="absolute inset-0 w-full h-full object-contain pointer-events-none opacity-90">
        
                        <!-- Label kiri -->
                        <div class="absolute left-[1.5%] top-[9%] text-xs text-gray-600 font-semibold">Close</div>
                        <div class="absolute left-[1.5%] top-[36%] text-xs text-gray-600 font-semibold">Close-mid</div>
                        <div class="absolute left-[1.5%] top-[61%] text-xs text-gray-600 font-semibold">Open-mid</div>
                        <div class="absolute left-[1.5%] top-[90%] text-xs text-gray-600 font-semibold">Open</div>
        
                        <!-- Tombol IPA -->
                        <!-- CLOSE -->
                        <button class="ipa-button absolute left-[6%] top-[7%]">i</button>
                        <button class="ipa-button absolute left-[11%] top-[7%]">y</button>
                        <button class="ipa-button absolute left-[46%] top-[7%]">ɨ</button>
                        <button class="ipa-button absolute left-[51%] top-[7%]">ʉ</button>
                        <button class="ipa-button absolute left-[85%] top-[7%]">ɯ</button>
                        <button class="ipa-button absolute left-[91%] top-[7%]">u</button>
        
                        <!-- NEAR-CLOSE -->
                        <button class="ipa-button absolute left-[23%] top-[20%]">ɪ</button>
                        <button class="ipa-button absolute left-[28%] top-[20%]">ʏ</button>
                        <button class="ipa-button absolute left-[77%] top-[20%]">ʊ</button>
        
                        <!-- CLOSE-MID -->
                        <button class="ipa-button absolute left-[21%] top-[34%]">e</button>
                        <button class="ipa-button absolute left-[26%] top-[34%]">ø</button>
                        <button class="ipa-button absolute left-[52%] top-[34%]">ɘ</button>
                        <button class="ipa-button absolute left-[57%] top-[34%]">ɵ</button>
                        <button class="ipa-button absolute left-[85%] top-[34%]">ɤ</button>
                        <button class="ipa-button absolute left-[91%] top-[34%]">o</button>
        
                        <!-- MID -->
                        <button class="ipa-button absolute left-[58.5%] top-[46%]">ə</button>
        
                        <!-- OPEN-MID -->
                        <button class="ipa-button absolute left-[32%] top-[60%]">ɛ</button>
                        <button class="ipa-button absolute left-[37%] top-[60%]">œ</button>
                        <button class="ipa-button absolute left-[60%] top-[60%]">ɜ</button>
                        <button class="ipa-button absolute left-[65%] top-[60%]">ɞ</button>
                        <button class="ipa-button absolute left-[85%] top-[60%]">ʌ</button>
                        <button class="ipa-button absolute left-[91%] top-[60%]">ɔ</button>
        
                        <!-- NEAR-OPEN -->
                        <button class="ipa-button absolute left-[39%] top-[73%]">æ</button>
                        <button class="ipa-button absolute left-[64%] top-[70%]">ɐ</button>
        
                        <!-- OPEN -->
                        <button class="ipa-button absolute left-[45%] top-[87%]">a</button>
                        <button class="ipa-button absolute left-[50%] top-[87%]">ɶ</button>
                        <button class="ipa-button absolute left-[85%] top-[87%]">ɑ</button>
                        <button class="ipa-button absolute left-[91%] top-[87%]">ɒ</button>
                    </div>
                </div>
        
                <!-- BAGIAN GAMBAR -->
                <div class="mt-10 bg-white border rounded-xl shadow p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Gambar Penjelasan Vokal</h3>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vowel_explanation.png') }}" 
                             alt="Penjelasan posisi lidah saat vokal"
                             class="max-w-full md:max-w-lg shadow-md">
                    </div>
                </div>
            </div>
        </section>

        {{-- Konsonan Pulmonik --}}
        <section class="py-12 bg-gray-50 border-t-4 border-orange-500">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-orange-600 mb-6">
            Konsonan Pulmonik
            </h2>
            <p class="text-center text-gray-600 mb-8">
            Klik simbol untuk mendengar pengucapan. Simbol kanan pada pasangan mewakili konsonan bersuara.
            </p>

            <div class="overflow-x-auto rounded-2xl shadow-lg border border-orange-200 bg-white">
            <table class="min-w-full text-center border-collapse">
                <thead class="bg-gradient-to-r from-orange-500 to-red-500 text-white">
                <tr>
                    <th class="p-3 font-semibold"> </th>
                    <th class="p-3 font-semibold">Bi-labial</th>
                    <th class="p-3 font-semibold">Labio-dental</th>
                    <th class="p-3 font-semibold">Dental</th>
                    <th class="p-3 font-semibold">Alveolar</th>
                    <th class="p-3 font-semibold">Post-alveolar</th>
                    <th class="p-3 font-semibold">Retroflex</th>
                    <th class="p-3 font-semibold">Palatal</th>
                    <th class="p-3 font-semibold">Velar</th>
                    <th class="p-3 font-semibold">Uvular</th>
                    <th class="p-3 font-semibold">Pharyngeal</th>
                    <th class="p-3 font-semibold">Glottal</th>
                </tr>
                </thead>

                <tbody>
                <!-- Plosive -->
                <tr class="border-b border-orange-200">
                    <td class="bg-orange-100 font-semibold p-2">Plosive</td>
                    <td><button class="ipa-button">p</button> <button class="ipa-button">b</button></td>
                    <td></td>
                    <td></td>
                    <td><button class="ipa-button">t</button> <button class="ipa-button">d</button></td>
                    <td></td>
                    <td><button class="ipa-button">ʈ</button> <button class="ipa-button">ɖ</button></td>
                    <td><button class="ipa-button">c</button> <button class="ipa-button">ɟ</button></td>
                    <td><button class="ipa-button">k</button> <button class="ipa-button">ɡ</button></td>
                    <td><button class="ipa-button">q</button> <button class="ipa-button">ɢ</button></td>
                    <td></td>
                    <td><button class="ipa-button">ʔ</button></td>
                </tr>

                <!-- Nasal -->
                <tr class="border-b border-orange-200">
                    <td class="bg-orange-100 font-semibold p-2">Nasal</td>
                    <td><button class="ipa-button">m</button></td>
                    <td><button class="ipa-button">ɱ</button></td>
                    <td></td>
                    <td><button class="ipa-button">n</button></td>
                    <td></td>
                    <td><button class="ipa-button">ɳ</button></td>
                    <td><button class="ipa-button">ɲ</button></td>
                    <td><button class="ipa-button">ŋ</button></td>
                    <td><button class="ipa-button">ɴ</button></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- Trill -->
                <tr class="border-b border-orange-200">
                    <td class="bg-orange-100 font-semibold p-2">Trill</td>
                    <td><button class="ipa-button">ʙ</button></td>
                    <td></td>
                    <td></td>
                    <td><button class="ipa-button">r</button></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="ipa-button">ʀ</button></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- Tap/Flap -->
                <tr class="border-b border-orange-200">
                    <td class="bg-orange-100 font-semibold p-2">Tap/Flap</td>
                    <td></td>
                    <td><button class="ipa-button">ⱱ</button></td>
                    <td></td>
                    <td><button class="ipa-button">ɾ</button></td>
                    <td></td>
                    <td><button class="ipa-button">ɽ</button></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- Fricative -->
                <tr class="border-b border-orange-200">
                    <td class="bg-orange-100 font-semibold p-2">Fricative</td>
                    <td><button class="ipa-button">ɸ</button> <button class="ipa-button">β</button></td>
                    <td><button class="ipa-button">f</button> <button class="ipa-button">v</button></td>
                    <td><button class="ipa-button">θ</button> <button class="ipa-button">ð</button></td>
                    <td><button class="ipa-button">s</button> <button class="ipa-button">z</button></td>
                    <td><button class="ipa-button">ʃ</button> <button class="ipa-button">ʒ</button></td>
                    <td><button class="ipa-button">ʂ</button> <button class="ipa-button">ʐ</button></td>
                    <td><button class="ipa-button">ç</button> <button class="ipa-button">ʝ</button></td>
                    <td><button class="ipa-button">x</button> <button class="ipa-button">ɣ</button></td>
                    <td><button class="ipa-button">χ</button> <button class="ipa-button">ʁ</button></td>
                    <td><button class="ipa-button">ħ</button> <button class="ipa-button">ʕ</button></td>
                    <td><button class="ipa-button">h</button> <button class="ipa-button">ɦ</button></td>
                </tr>

                <!-- Approximant -->
                <tr class="border-b border-orange-200">
                    <td class="bg-orange-100 font-semibold p-2">Approximant</td>
                    <td></td>
                    <td><button class="ipa-button">ʋ</button></td>
                    <td></td>
                    <td><button class="ipa-button">ɹ</button></td>
                    <td></td>
                    <td><button class="ipa-button">ɻ</button></td>
                    <td><button class="ipa-button">j</button></td>
                    <td><button class="ipa-button">ɰ</button></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- Lateral Approximant -->
                <tr>
                    <td class="bg-orange-100 font-semibold p-2">Lateral Approximant</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="ipa-button">l</button></td>
                    <td></td>
                    <td><button class="ipa-button">ɭ</button></td>
                    <td><button class="ipa-button">ʎ</button></td>
                    <td><button class="ipa-button">ʟ</button></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="mt-10 bg-white border rounded-xl shadow p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Gambar Penjelasan Konsonan Pulmonik</h3>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/pulmonic_explanation.png') }}" 
                             alt="Penjelasan mekanisme aliran udara konsonan pulmonik"
                             class="max-w-full md:max-w-lg shadow-md">
                    </div>
                </div>
            <!-- Garis horizontal pemisah -->
            <div class="h-0.5 bg-gradient-to-r from-orange-400 via-red-400 to-orange-400 my-10 rounded-full"></div>
        </div>
        </section>

        <audio id="audio-player" class="hidden"></audio>
    </main>
</x-layouts.guest>