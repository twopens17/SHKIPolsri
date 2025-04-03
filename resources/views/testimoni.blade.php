<x-layout>
    <div class="flex flex-col items-center max-w-5xl mx-auto mt-20 px-6">
        <h1 class="text-yellow-500 text-3xl ">Testimoni</h1>
        <h1 class="text-black text-4xl md:text-5xl ">Para Pengguna</h1>

    
    <div x-data="{
        activeIndex: 1,
        transitioning: false,
        testimonials: [
            { id: 1, name: 'Pengguna 1', text: 'Sangat terbantu oleh Sentra HKI PENS', image: 'https://via.placeholder.com/80', bg: 'from-blue-500 to-purple-500' },
            { id: 2, name: 'Pengguna 2', text: 'Tidak ribet lagi mengurus paten', image: 'https://via.placeholder.com/80', bg: 'from-green-500 to-blue-500' },
            { id: 3, name: 'Pengguna 3', text: 'Pelayanan sangat cepat dan mudah', image: 'https://via.placeholder.com/80', bg: 'from-pink-500 to-red-500' },
            { id: 4, name: 'Pengguna 4', text: 'Terimakasih Sentra HKI PENS', image: 'https://via.placeholder.com/80', bg: 'from-yellow-500 to-orange-500' }
        ],
        changeSlide(direction) {
            if (this.transitioning) return;
            this.transitioning = true;
            setTimeout(() => {
                this.activeIndex = (this.activeIndex + direction + this.testimonials.length) % this.testimonials.length;
                this.transitioning = false;
            }, 500);
        }
    }" class="relative w-full max-w-4xl mx-auto mt-8">
        
        <div class="flex justify-center items-center space-x-4">
            <template x-for="(item, index) in testimonials" :key="item.id">
                <div x-show="index === activeIndex"
                     x-transition:enter="transition transform duration-500 ease-in-out"
                     x-transition:enter-start="opacity-0 translate-x-10"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition transform duration-500 ease-in-out"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-10"
                     class="w-1/2 p-6 text-center bg-gradient-to-r rounded-lg shadow-lg text-white"
                     :class="item.bg">
                    <img :src="item.image" class="w-20 h-20 mx-auto rounded-full border-4 border-white">
                    <h3 class="text-xl font-semibold mt-2" x-text="item.name"></h3>
                    <p class="text-sm">Dosen</p>
                    <div class="flex justify-center mt-2 text-yellow-400 text-lg">★★★★★</div>
                    <p class="mt-4" x-text="item.text"></p>
                </div>
            </template>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-center mt-4 space-x-4">
            <button @click="changeSlide(-1)"
                    class="w-10 h-10 flex items-center justify-center bg-gradient-to-r from-yellow-500 to-orange-500 text-white rounded-full shadow-lg hover:scale-105 transition">
                ❮
            </button>
            <button @click="changeSlide(1)"
                    class="w-10 h-10 flex items-center justify-center bg-gradient-to-r from-yellow-500 to-orange-500 text-white rounded-full shadow-lg hover:scale-105 transition">
                ❯
            </button>
        </div>
    </div>
    </div>
</x-layout>
