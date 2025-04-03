 <x-layout>
        <div x-data="{ activeTab: 'ketua' }" class="flex flex-col md:flex-row mt-30">
            <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                <li>
                    <a href="#" @click.prevent="activeTab = 'ketua'"
                     :class="{'bg-yellow-700 text-white': activeTab === 'ketua'}" 
                     class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                        Ketua Sentra HKI
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activeTab = 'percepatan'"
                     :class="{'bg-yellow-700 text-white': activeTab === 'percepatan'}" 
                     class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                        Divisi Percepatan HKI
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activeTab = 'teknologi'"
                     :class="{'bg-yellow-700 text-white': activeTab === 'teknologi'}" 
                     class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                        Divisi Ahli Teknologi
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activeTab = 'komersial'"
                     :class="{'bg-yellow-700 text-white': activeTab === 'komersial'}" 
                     class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                        Divisi Komersialisasi HKI
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activeTab = 'investigasi'"
                     :class="{'bg-yellow-700 text-white': activeTab === 'investigasi'}" 
                     class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                        Divisi Investigasi Produk
                    </a>
                </li>
            </ul>
            <div class="p-6 bg-gray-50 text-medium text-gray-900 dark:text-gray-400 dark:bg-gray-50 rounded-lg w-full">
                <div x-show="activeTab === 'ketua'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <div class="group relative w-64 cursor-pointer rounded-2xl transition-all duration-300 hover:-translate-y-2">
                            <!-- Image Section -->
                            <div class="relative overflow-hidden rounded-2xl">
                                <img 
                                    src="/images/banner.jpg" 
                                    alt="Profile"
                                    class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                
                                <!-- Email Overlay -->
                                <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2 text-center">
                                    <span class="text-sm">mahasiswa@sentrahki.com</span>
                                </div>
                            </div>
                    
                            <!-- Text Content -->
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-bold text-gray-800">Mahasiswa</h3>
                                <p class="text-sm text-gray-600 mt-1">Ketua Sentra HKI</p>
                            </div>
                    
                            <!-- Hover Background Effect -->
                            <div class="absolute inset-0 rounded-2xl shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'percepatan'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <div class="group relative w-64 cursor-pointer rounded-2xl transition-all duration-300 hover:-translate-y-2">
                            <!-- Image Section -->
                            <div class="relative overflow-hidden rounded-2xl">
                                <img 
                                    src="/images/banner.jpg" 
                                    alt="Profile"
                                    class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                
                                <!-- Email Overlay -->
                                <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2 text-center">
                                    <span class="text-sm">mahasiswa@sentrahki.com</span>
                                </div>
                            </div>
                    
                            <!-- Text Content -->
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-bold text-gray-800">Mahasiswa</h3>
                                <p class="text-sm text-gray-600 mt-1">Divisi Percepatan HKI</p>
                            </div>
                    
                            <!-- Hover Background Effect -->
                            <div class="absolute inset-0 rounded-2xl shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'teknologi'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <div class="group relative w-64 cursor-pointer rounded-2xl transition-all duration-300 hover:-translate-y-2">
                            <!-- Image Section -->
                            <div class="relative overflow-hidden rounded-2xl">
                                <img 
                                    src="/images/banner.jpg" 
                                    alt="Profile"
                                    class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                
                                <!-- Email Overlay -->
                                <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2 text-center">
                                    <span class="text-sm">mahasiswa@sentrahki.com</span>
                                </div>
                            </div>
                    
                            <!-- Text Content -->
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-bold text-gray-800">Mahasiswa</h3>
                                <p class="text-sm text-gray-600 mt-1">Divisi Ahli Teknologi</p>
                            </div>
                    
                            <!-- Hover Background Effect -->
                            <div class="absolute inset-0 rounded-2xl shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'komersial'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <div class="group relative w-64 cursor-pointer rounded-2xl transition-all duration-300 hover:-translate-y-2">
                            <!-- Image Section -->
                            <div class="relative overflow-hidden rounded-2xl">
                                <img 
                                    src="/images/banner.jpg" 
                                    alt="Profile"
                                    class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                
                                <!-- Email Overlay -->
                                <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2 text-center">
                                    <span class="text-sm">mahasiswa@sentrahki.com</span>
                                </div>
                            </div>
                    
                            <!-- Text Content -->
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-bold text-gray-800">Mahasiswa</h3>
                                <p class="text-sm text-gray-600 mt-1">Divisi Komersialisasi HKI</p>
                            </div>
                    
                            <!-- Hover Background Effect -->
                            <div class="absolute inset-0 rounded-2xl shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'investigasi'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <div class="group relative w-64 cursor-pointer rounded-2xl transition-all duration-300 hover:-translate-y-2">
                            <!-- Image Section -->
                            <div class="relative overflow-hidden rounded-2xl">
                                <img 
                                    src="/images/banner.jpg" 
                                    alt="Profile"
                                    class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                >
                                
                                <!-- Email Overlay -->
                                <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2 text-center">
                                    <span class="text-sm">mahasiswa@sentrahki.com</span>
                                </div>
                            </div>
                    
                            <!-- Text Content -->
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-bold text-gray-800">Mahasiswa</h3>
                                <p class="text-sm text-gray-600 mt-1">Divisi Investigasi HKI</p>
                            </div>
                    
                            <!-- Hover Background Effect -->
                            <div class="absolute inset-0 rounded-2xl shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
    