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
                        <x-ProfileCard
                            name="Mahasiswa"
                            role="Ketua Sentra HKI"
                            photo="/images/banner.jpg"
                            email="mahasiswa@sentrahki.com"
                            linkedin="#"
                            instagram="#"
                        />
                    </div>
                </div>
                <div x-show="activeTab === 'percepatan'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <x-ProfileCard
                            name="Mahasiswa"
                            role="Divisi Percepatan HKI"
                            photo="/images/banner.jpg"
                            email="mahasiswa@sentrahki.com"
                            linkedin="#"
                            instagram="#"
                        />
                    </div>
                </div>
                <div x-show="activeTab === 'teknologi'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <x-ProfileCard
                            name="Mahasiswa"
                            role="Divisi Ahli Teknologi"
                            photo="/images/banner.jpg"
                            email="mahasiswa@sentrahki.com"
                            linkedin="#"
                            instagram="#"
                        />
                    </div>
                </div>
                <div x-show="activeTab === 'komersial'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <x-ProfileCard
                            name="Mahasiswa"
                            role="Divisi Komersialisasi HKI"
                            photo="/images/banner.jpg"
                            email="mahasiswa@sentrahki.com"
                            linkedin="#"
                            instagram="#"
                        />
                    </div>
                </div>
                <div x-show="activeTab === 'investigasi'">
                    <div class="flex flex-wrap items-center justify-center gap-5 p-16 ">
                        <x-ProfileCard
                            name="Mahasiswa"
                            role="Divisi Investigasi HKI"
                            photo="/images/banner.jpg"
                            email="mahasiswa@sentrahki.com"
                            linkedin="#"
                            instagram="#"
                        />
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
    