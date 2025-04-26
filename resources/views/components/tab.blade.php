@props(['activeTab' => 'pengenalan'])

<div x-data="{ activeTab: '{{ $activeTab }}' }" class="max-w-7xl mx-auto mt-30">
    <!-- Tab Navigation -->
    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-col sm:flex-row justify-between text-sm font-medium text-center" role="tablist">
            <li class="flex-1 mb-2 sm:mb-0" role="presentation">
                <button @click="activeTab = 'pengenalan'"
                    :class="{'text-yellow-600 border-yellow-600 dark:text-yellow-500 dark:border-yellow-500': activeTab === 'pengenalan', 'text-gray-500 hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300': activeTab !== 'pengenalan'}"
                    class="inline-block p-3 sm:p-4 border-b-2 sm:border-b-2 rounded-t-lg transition-all duration-300 ease-in-out w-full"
                    role="tab">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                        <span class="text-xs sm:text-sm">Pengenalan</span>
                    </div>
                </button>
            </li>
            <li class="flex-1 mb-2 sm:mb-0" role="presentation">
                <button @click="activeTab = 'syarat'"
                    :class="{'text-yellow-600 border-yellow-600 dark:text-yellow-500 dark:border-yellow-500': activeTab === 'syarat', 'text-gray-500 hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300': activeTab !== 'syarat'}"
                    class="inline-block p-3 sm:p-4 border-b-2 sm:border-b-2 rounded-t-lg transition-all duration-300 ease-in-out w-full"
                    role="tab">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l1.483-1.482a.961.961 0 0 0 .263-.49l.679-3.4A.961.961 0 0 0 15.98 8.96 8.956 8.956 0 0 0 8.961 16Z"/>
                        </svg>
                        <span class="text-xs sm:text-sm">Syarat dan Prosedur</span>
                    </div>
                </button>
            </li>
            <li class="flex-1 mb-2 sm:mb-0" role="presentation">
                <button @click="activeTab = 'pembayaran'"
                    :class="{'text-yellow-600 border-yellow-600 dark:text-yellow-500 dark:border-yellow-500': activeTab === 'pembayaran', 'text-gray-500 hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300': activeTab !== 'pembayaran'}"
                    class="inline-block p-3 sm:p-4 border-b-2 sm:border-b-2 rounded-t-lg transition-all duration-300 ease-in-out w-full"
                    role="tab">
                    <div class="flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 sm:w-5 sm:h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"/>
                        </svg>
                        <span class="text-xs sm:text-sm">Pembayaran</span>
                    </div>
                </button>
            </li>
            <li class="flex-1 mb-2 sm:mb-0" role="presentation">
                <button @click="activeTab = 'kontak'"
                    :class="{'text-yellow-600 border-yellow-600 dark:text-yellow-500 dark:border-yellow-500': activeTab === 'kontak', 'text-gray-500 hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300': activeTab !== 'kontak'}"
                    class="inline-block p-3 sm:p-4 border-b-2 sm:border-b-2 rounded-t-lg transition-all duration-300 ease-in-out w-full"
                    role="tab">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z"/>
                            <path d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z"/>
                        </svg>
                        <span class="text-xs sm:text-sm">Kontak</span>
                    </div>
                </button>
            </li>
        </ul>
    </div>

    <!-- Tab Content -->
    <div class="mt-4">
        <div x-show="activeTab === 'pengenalan'" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95"
             class="p-4 sm:p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 sm:mb-4">Pengenalan</h3>
            {{ $pengenalan ?? '' }}
        </div>

        <div x-show="activeTab === 'syarat'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95"
             class="p-4 sm:p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 sm:mb-4">Syarat dan Prosedur</h3>
            {{ $syarat ?? '' }}
        </div>

        <div x-show="activeTab === 'pembayaran'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95"
             class="p-4 sm:p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 sm:mb-4">Pembayaran</h3>
            {{ $pembayaran ?? '' }}
        </div>

        <div x-show="activeTab === 'kontak'"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-95"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-95"
             class="p-4 sm:p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-3 sm:mb-4">Kontak</h3>
            {{ $kontak ?? '' }}
        </div>
    </div>
</div> 