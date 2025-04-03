<x-layout>
    <div class="flex flex-col items-center max-w-5xl mx-auto mt-20 px-6">
        <h1 class="text-yellow-500 text-3xl ">Panduan</h1>
        <h1 class="text-black text-4xl md:text-5xl ">Kekayaan Intelektual</h1>

        <!-- FAQ Container -->
        <div class="w-full mt-10 space-y-4">
            <div x-data="{ open: null }" class="bg-white shadow-lg rounded-xl overflow-hidden">
                <!-- FAQ Item 1 -->
                <div>
                    <button @click="open === 1 ? open = null : open = 1" class="flex justify-between w-full p-5 text-lg font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
                        <span class="text-yellow-500">Apa itu Flowbite?</span>
                        <svg :class="open === 1 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    <div x-show="open === 1" x-transition.duration.300ms class="p-5 text-gray-600 bg-white overflow-hidden h-auto">
                        Definisi Umum Hak Cipta
                        Hak Cipta merupakan salah satu bagian dari kekayaan intelektual yang memiliki ruang lingkup objek dilindungi paling luas, karena mencakup ilmu pengetahuan, seni dan sastra (art and literary) yang di dalamnya mencakup pula program komputer. Perkembangan ekonomi kreatif yang menjadi salah satu andalan Indonesia dan berbagai negara dan berkembang pesatnya teknologi informasi dan komunikasi mengharuskan adanya pembaruan Undang-Undang Hak Cipta, mengingat Hak Cipta menjadi basis terpenting dari ekonomi kreatif nasional. Dengan Undang-Undang Hak Cipta yang memenuhi unsur pelindungan dan pengembangan ekonomi kreatif ini maka diharapkan kontribusi sektor Hak Cipta dan Hak Terkait bagi perekonomian negara dapat lebih optimal.
                        
                        Definisi Hak Cipta
                        Hak Cipta adalah hak eksklusif pencipta yang timbul secara otomatis berdasarkan prinsip deklaratif setelah suatu ciptaan diwujudkan dalam bentuk nyata tanpa mengurangi pembatasan sesuai dengan ketentuan peraturan perundang-undangan.
                        Hak Terkait itu adalah hak yang berkaitan dengan Hak Cipta yang merupakan hak eksklusif bagi pelaku pertunjukan, produser fonogram, atau lembaga penyiaran.
                        Ciptaan yang dapat dilindungi
                        Buku, program komputer, pamflet, perwajahan (layout) karya tulis yang diterbitkan, dan semua hasil karya tulis lain;
                        Ceramah, kuliah, pidato, dan ciptaan lain yang sejenis dengan itu;
                        Alat peraga yang dibuat untuk kepentingan pendidikan dan ilmu pengetahuan;
                        Lagu atau musik dengan atau tanpa teks;
                        Drama atau drama musikal, tari, koreografi, pewayangan, dan pantomim;
                        Seni rupa dalam segala bentuk seperti seni lukis, gambar, seni ukir, seni kaligrafi, seni pahat, seni patung, kolase, dan seni terapan;
                        Arsitektur;
                        Peta;
                        Seni Batik;
                        Fotografi;
                        Terjemahan, tafsir, saduran, bunga rampai, dan karya lain dari hasil pengalihwujudan.
                        Masa Pelindungan Ciptaan
                        Perlindungan Hak Cipta : Seumur Hidup Pencipta + 70 Tahun.
                        Program Komputer : 50 tahun Sejak pertama kali dipublikasikan.
                        Pelaku : 50 tahun sejak pertama kali di pertunjukkan.
                        Produser Rekaman : 50 tahun sejak Ciptaan di fiksasikan.
                        Lembaga Penyiaran : 20 tahun sejak pertama kali di siarkan.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div>
                    <button @click="open === 2 ? open = null : open = 2" class="flex justify-between w-full p-5 text-lg font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
                        <span class="text-yellow-500">Apakah ada file Figma yang tersedia?</span>
                        <svg :class="open === 2 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    <div x-show="open === 2" x-transition.duration.300ms class="p-5 text-gray-600 bg-white overflow-hidden max-h-40">
                        Ya, Flowbite memiliki file desain di Figma yang dapat digunakan sebagai referensi untuk membangun UI menggunakan Tailwind CSS.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div>
                    <button @click="open === 3 ? open = null : open = 3" class="flex justify-between w-full p-5 text-lg font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
                        <span class="text-yellow-500">Apa perbedaan antara Flowbite dan Tailwind UI?</span>
                        <svg :class="open === 3 ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                    <div x-show="open === 3" x-transition.duration.300ms class="p-5 text-gray-600 bg-white overflow-hidden max-h-40">
                        Flowbite adalah pustaka komponen berbasis Tailwind yang bersifat open-source, sedangkan Tailwind UI adalah koleksi UI berbayar yang lebih lengkap.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
