<x-layout>
    <div class="flex flex-col items-center max-w-5xl mx-auto mt-20 px-6">
        <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full mb-4"></div>
        <h1 class="text-yellow-500 text-3xl ">Testimoni</h1>
        <h1 class="text-black text-4xl md:text-5xl ">Para Pengguna</h1>
        <p class="text-gray-500 mt-2 mb-4 text-center max-w-lg">Apa kata mereka tentang layanan Sentra HKI Polsri? Berikut pengalaman para pengguna kami.</p>
        <span class="inline-block bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">120+ Testimoni</span>

    
    <div class="w-full max-w-md mx-auto mt-8 bg-gray-50 rounded-2xl shadow-inner p-4">
        <div x-data="{
            activeIndex: 1,
            testimonials: [
                { id: 1, name: 'Dewi Lestari', role: 'Dosen', text: 'Pelayanan SHKI Polsri sangat ramah dan membantu proses pendaftaran HKI saya.', image: '/images/user1.jpg' },
                { id: 2, name: 'Budi Santoso', role: 'Mahasiswa', text: 'Proses pendaftaran HKI jadi mudah dan cepat.', image: '/images/user2.jpg' },
                { id: 3, name: 'Siti Aminah', role: 'Peneliti', text: 'Sangat puas dengan layanan SHKI Polsri.', image: '/images/user3.jpg' },
                { id: 4, name: 'Rina Wijaya', role: 'Dosen', text: 'Sangat membantu dalam pengurusan HKI kampus.', image: '/images/user4.jpg' },
                { id: 5, name: 'Andi Pratama', role: 'Alumni', text: 'Layanan cepat dan informatif.', image: '/images/user5.jpg' }
            ]
        }">
            <div class="flex flex-col gap-6 items-center max-h-[420px] overflow-y-auto py-2 scrollbar-thin scrollbar-thumb-yellow-300 scrollbar-track-gray-200">
                <template x-for="(item, idx) in testimonials" :key="item.id">
                    <div
                        @mouseenter="activeIndex = idx"
                        :class="[
                            idx === activeIndex ? 'bg-white shadow-lg blur-0 opacity-100 scale-100' : 'bg-white/80 shadow-md blur-[1px] opacity-80 scale-95',
                            'relative flex items-center w-full max-w-md rounded-xl transition-all duration-500 min-h-[110px] px-4 py-3',
                            idx === activeIndex ? 'ring-2 ring-yellow-400' : ''
                        ]"
                        style="min-height:110px"
                        class="overflow-hidden cursor-pointer"
                    >
                        <div x-show="idx === activeIndex" class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-yellow-400 to-orange-400 rounded-r-lg"></div>
                        <img :src="item.image" class="w-14 h-14 rounded-full object-cover border-2 border-yellow-400 mr-4 z-10" alt="">
                        <div class="flex-1 flex flex-col justify-center">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-gray-900 text-sm" x-text="item.name"></span>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M7.17 6A5.001 5.001 0 002 11v1a5 5 0 005 5h.17A3.001 3.001 0 0110 14v-1a3 3 0 00-2.83-3zm10 0A5.001 5.001 0 0012 11v1a5 5 0 005 5h.17A3.001 3.001 0 0120 14v-1a3 3 0 00-2.83-3z"/></svg>
                            </div>
                            <div class="flex items-center gap-0.5 mb-1 mt-1">
                                <template x-for="n in 5" :key="n">
                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.175c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.966c.3.922-.755 1.688-1.54 1.118l-3.38-2.454a1 1 0 00-1.175 0l-3.38 2.454c-.784.57-1.838-.196-1.54-1.118l1.287-3.966a1 1 0 00-.364-1.118L2.05 9.394c-.783-.57-.38-1.81.588-1.81h4.175a1 1 0 00.95-.69l1.286-3.967z"/></svg>
                                </template>
                            </div>
                            <div class="text-xs text-gray-500 font-medium mb-1" x-text="item.role"></div>
                            <div class="text-xs text-gray-700 mt-1 text-left" x-text="item.text"></div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
    </div>
</x-layout>
