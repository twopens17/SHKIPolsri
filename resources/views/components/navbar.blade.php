<nav x-data="{ scrolled: false, mobileMenu: false, open: false, dropdownOpen: {} }" 
    x-init="$watch('mobileMenu', value => document.body.style.overflow = value ? 'hidden' : '')"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 
        'bg-white/90 shadow-lg': scrolled, 'bg-transparent': !scrolled 
    }" 
    class="fixed top-0 w-full z-50 transition-all duration-500">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-10 py-7">
        <a href="/" class="flex items-center space-x-4 rtl:space-x-reverse group">
            <img src="/images/Polsri.png" class="h-12 transition-all duration-500 group-hover:scale-110" alt="SHKI Logo" />
            <span class="self-center text-2xl font-bold whitespace-nowrap text-gray-800 transition-all duration-500 group-hover:text-yellow-500">SHKI Polsri</span>
        </a>
        <button @click="mobileMenu = true" type="button" 
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 transition-all duration-300" 
            aria-controls="navbar-multi-level" 
            aria-expanded="false"
            x-show="!mobileMenu"
            x-cloak>
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5 transition-transform duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div x-show="mobileMenu" x-cloak x-transition.opacity class="fixed inset-0 bg-black/20 md:hidden" @click="mobileMenu = false"></div>
        <div id="navbar-mobile-menu" x-show="mobileMenu" x-cloak x-transition class="fixed inset-0 bg-white/95 p-4 md:hidden flex flex-col">
            <button @click="mobileMenu = false" class="absolute top-4 right-4 text-3xl text-gray-700 hover:text-yellow-500 focus:outline-none">&times;</button>
            <ul class="flex flex-col font-medium space-y-2 pt-20">
                <li>
                    <a href="/" class="block py-2 px-3 {{ Request::is('/') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" 
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-700 hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto relative group transition-all duration-500">
                        Kekayaan Intelektual 
                        <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-500" 
                            :class="{ 'rotate-180': open }"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </button>
                    <div x-show="open" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-xl shadow-lg w-44 absolute mt-2 md:mt-0 md:ml-2">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="/hakcipta" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Hak Cipta</a>
                            </li>
                            <li>
                                <a href="/paten" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Paten</a>
                            </li>
                            <li>
                                <a href="/merek" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Merek</a>
                            </li>
                            <li>
                                <a href="/desainIndustri" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Desain Industri</a>
                            </li>
                            <li>
                                <a href="/DTLST" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">DTLST</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/dataki" class="block py-2 px-3 {{ Request::is('dataki') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        DATA KI
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="komersial" class="block py-2 px-3 {{ Request::is('komersialisasi') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        Komersialiasi
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="/jasa" class="block py-2 px-3 {{ Request::is('jasa') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        Jasa
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" 
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-700 hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto relative group transition-all duration-500">
                        Tentang SHKI 
                        <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-500" 
                            :class="{ 'rotate-180': open }"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </button>
                    <div x-show="open" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-xl shadow-lg w-44 absolute mt-2 md:mt-0 md:ml-2">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="/sejarah" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Sejarah SHKI Polsri</a>
                            </li>
                            <li>
                                <a href="/visimisi" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Visi Misi SHKI Polsri</a>
                            </li>
                            <li>
                                <a href="/prestasi" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Prestasi SHKI Polsri</a>
                            </li>
                            <li>
                                <a href="/struktur" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Struktur Organisasi</a>
                            </li>
                            <li>
                                <a href="/profile" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Profil Pengelola</a>
                            </li>
                            <li>
                                <a href="/panduan" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Panduan</a>
                            </li>
                            <li>
                                <a href="/testimoni" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Testimoni</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/kontak" class="block py-2 px-6 text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition-all duration-500 transform hover:scale-105 shadow-md hover:shadow-yellow-500/30">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
        <div class="hidden md:block md:w-auto" id="navbar-multi-level-desktop">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                <li>
                    <a href="/" class="block py-2 px-3 {{ Request::is('/') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" 
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-700 hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto relative group transition-all duration-500">
                        Kekayaan Intelektual 
                        <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-500" 
                            :class="{ 'rotate-180': open }"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </button>
                    <div x-show="open" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-xl shadow-lg w-44 absolute mt-2 md:mt-0 md:ml-2">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="/hakcipta" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Hak Cipta</a>
                            </li>
                            <li>
                                <a href="/paten" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Paten</a>
                            </li>
                            <li>
                                <a href="/merek" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Merek</a>
                            </li>
                            <li>
                                <a href="/desainIndustri" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Desain Industri</a>
                            </li>
                            <li>
                                <a href="/DTLST" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">DTLST</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/dataki" class="block py-2 px-3 {{ Request::is('dataki') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        DATA KI
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="komersial" class="block py-2 px-3 {{ Request::is('komersialisasi') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        Komersialiasi
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="/jasa" class="block py-2 px-3 {{ Request::is('jasa') ? 'text-yellow-500' : 'text-gray-700' }} rounded-lg hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 relative group transition-all duration-500">
                        Jasa
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </a>
                </li>
                <li x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" 
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-700 hover:bg-gray-100/50 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto relative group transition-all duration-500">
                        Tentang SHKI 
                        <svg class="w-2.5 h-2.5 ms-2.5 transition-transform duration-500" 
                            :class="{ 'rotate-180': open }"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-500 group-hover:w-full"></span>
                    </button>
                    <div x-show="open" 
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-xl shadow-lg w-44 absolute mt-2 md:mt-0 md:ml-2">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="/sejarah" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Sejarah SHKI Polsri</a>
                            </li>
                            <li>
                                <a href="/visimisi" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Visi Misi SHKI Polsri</a>
                            </li>
                            <li>
                                <a href="/prestasi" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Prestasi SHKI Polsri</a>
                            </li>
                            <li>
                                <a href="/struktur" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Struktur Organisasi</a>
                            </li>
                            <li>
                                <a href="/profile" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Profil Pengelola</a>
                            </li>
                            <li>
                                <a href="/panduan" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Panduan</a>
                            </li>
                            <li>
                                <a href="/testimoni" class="block px-4 py-2 hover:bg-gray-100/50 transition-all duration-300 hover:text-yellow-500 hover:pl-6">Testimoni</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/kontak" class="block py-2 px-6 text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition-all duration-500 transform hover:scale-105 shadow-md hover:shadow-yellow-500/30">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 0.5s ease-out;
}
</style>
