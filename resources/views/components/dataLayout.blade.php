<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(entrypoints: 'resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
      * {
        font-family: 'Inter', sans-serif;
        
      }
    </style>
    
  </head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="w-64 bg-white text-gray-500 p-5 pt-8 absolute md:relative duration-300 transform -translate-x-full md:translate-x-0 ease-in-out shadow-md z-40" id="sidebar">
            <div class="flex items-stretch ">
            <img src="/images/Polsri.png" alt="Logo" class="h-16 mb-3 self-center bg-white rounded-xl">
            <h1 class="text-gray-500 self-center origin-left font-bold text-2xl tracking-wider ">Data HKI</h1>
        </div>
            <ul class="pt-2">
                <li class="flex rounded-lg p-3 cursor-pointer hover:bg-yellow-100 text-gray-400 items-center gap-x-4 mt-3 transition-all duration-300 ease-in-out transform hover:scale-105">
                    <a href="{{ route('data.pegawai') }}" class="flex items-center gap-x-4 w-full h-full">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                        <span class="text-gray-500 origin-left duration-200 text-lg font-semibold">Pegawai</span>
                    </a>
                </li>
                <li class="flex rounded-lg p-3 cursor-pointer  hover:bg-yellow-100 text-gray-400 items-center gap-x-4 mt-3 transition-all duration-300 ease-in-out transform hover:scale-105">
                    <a href="{{ route('data.program_studi') }}" class="flex items-center gap-x-4 w-full h-full">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9l0 28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5l0-24.6c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/></svg>
                        <span class="text-gray-500 origin-left duration-200 text-lg font-semibold">Prodi</span>
                    </a>
                </li>
                <li class="flex rounded-lg p-3 cursor-pointer hover:bg-yellow-100 text-gray-400 items-center gap-x-4 mt-3 transition-all duration-300 ease-in-out transform hover:scale-105">
                    <a href="{{ route('data.departemen') }}" class="flex items-center gap-x-4 w-full h-full">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160l0 8c0 13.3 10.7 24 24 24l400 0c13.3 0 24-10.7 24-24l0-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224l-64 0 0 196.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512l448 0c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1L448 224l-64 0 0 192-40 0 0-192-64 0 0 192-48 0 0-192-64 0 0 192-40 0 0-192zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                        <span class="text-gray-500 origin-left duration-200 text-lg font-semibold">Departemen</span>
                    </a>
                </li>
                <li class="flex rounded-lg p-3 cursor-pointer hover:bg-yellow-100 text-gray-400 items-center gap-x-4 mt-3 transition-all duration-300 ease-in-out transform hover:scale-105">
                    <a href="{{ route('data.detail') }}" class="flex items-center gap-x-4 w-full h-full">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/></svg>
                        <span class="text-gray-500 origin-left duration-200 text-lg font-semibold">Detail</span>
                    </a>
                </li>
              
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-10 text-gray-500 overflow-y-auto bg-gray-100">
            <div class="container mx-auto px-0 sm:px-6 lg:px-8 py-8">
                {{ $slot }}
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('sidebar');
            const menuBtn = document.createElement('button');
            menuBtn.innerHTML = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>'; 
            menuBtn.classList.add('text-gray-500', 'text-3xl', 'absolute', 'top-4', 'left-4', 'md:hidden', 'z-50', 'p-2', 'rounded-md', 'focus:outline-none', 'focus:ring-2', 'focus:ring-offset-2', 'focus:ring-yellow-500');
            document.body.prepend(menuBtn);

            menuBtn.addEventListener('click', function () {
                sidebar.classList.toggle('-translate-x-full');
            });

            const sidebarLinks = sidebar.querySelectorAll('ul li a');

            sidebarLinks.forEach(link => {
                if (link.href === window.location.href) {
                    link.closest('li').classList.add('bg-yellow-100', 'text-yellow-500'); 
                    link.closest('li').classList.remove('text-gray-500');
                    link.querySelector('svg').style.color = '#FFCC00'; 
                    link.querySelector('span').classList.add('text-yellow-500');
                    link.querySelector('span').classList.remove('text-white');
                } else {
                    link.closest('li').classList.remove('bg-gray-100', 'text-yellow-500');
                    link.closest('li').classList.add('text-gray-500');
                    const iconColorMap = {
                        'Pegawai': '#697A8D', 
                        'Prodi': '#697A8D', 
                        'Departemen': '#697A8D', 
                        'Detail': '#697A8D', 
                    };
                    const spanText = link.querySelector('span').innerText;
                    if (iconColorMap[spanText]) {
                        link.querySelector('svg').style.color = iconColorMap[spanText];
                    }
                    link.querySelector('span').classList.add('text-gray-500');
                    link.querySelector('span').classList.remove('text-white');
                }
            });
        });
    </script>
</body>
</html> 