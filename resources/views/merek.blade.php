<x-layout>
    
    <div x-data="{ activeTab: 'pengenalan' }" class="flex flex-col md:flex-row mt-30">
        
        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <li>
                <a href="#" @click.prevent="activeTab = 'pengenalan'"
                 :class="{'bg-yellow-700 text-white': activeTab === 'pengenalan'}" 
                 class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                    <svg class="w-5 h-5 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    Pengenalan
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="activeTab = 'syarat'"
                 :class="{'bg-yellow-700 text-white': activeTab === 'syarat'}" 
                 class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                    <svg class="w-5 h-5 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18"><path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Z"/></svg>
                    Syarat dan Prosedur
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="activeTab = 'pembayaran'"
                 :class="{'bg-yellow-700 text-white': activeTab === 'pembayaran'}" 
                 class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                    </svg>
                    Pembayaran
                </a>
            </li>
            <li>
                <a href="#" @click.prevent="activeTab = 'kontak'"
                 :class="{'bg-yellow-700 text-white': activeTab === 'kontak'}" 
                 class="flex items-center px-4 py-3 rounded-lg w-full transition-all duration-300 hover:bg-yellow-500 hover:text-white">
                    <svg class="w-5 h-5 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z"/>
                        <path d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z"/>
                    </svg>
                    Kontak
                </a>
            </li>
        </ul>
        <div class="p-6 bg-gray-50 text-medium text-gray-900 dark:text-gray-400 dark:bg-gray-50 rounded-lg w-full">
            <div x-show="activeTab === 'pengenalan'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-900 mb-2">Pengenalan</h3>
                <p>Ini adalah tab pengenalan yang berisi deskripsi singkat.</p>
            </div>
            <div x-show="activeTab === 'syarat'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-900 mb-2">Syarat dan Prosedur</h3>
                <p>Berikut adalah syarat dan prosedur yang harus dipenuhi.</p>
            </div>
            <div x-show="activeTab === 'pembayaran'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-900 mb-2">Pembayaran</h3>
                <p>Informasi pembayaran akan dijelaskan di sini.</p>
            </div>
            <div x-show="activeTab === 'kontak'">
                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-900 mb-2">Kontak</h3>
                <p>Hubungi kami melalui informasi kontak berikut.</p>
            </div>
        </div>
    </div>
</x-layout>
