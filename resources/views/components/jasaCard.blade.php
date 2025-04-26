@props(['title', 'description', 'icon', 'umkmPrice', 'nonUmkmPrice', 'registerLink'])

<div class="relative bg-yellow-100 shadow-lg rounded-xl p-6 text-center max-w-sm mx-auto mt-16">
    <div class="absolute -top-10 left-1/2 transform -translate-x-1/2">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center shadow-lg">
            {!! $icon !!}
        </div>
    </div>

    <div class="mt-10">
        <h2 class="text-xl font-semibold text-gray-800">{{ $title }}</h2>
        <p class="text-gray-500 mt-2">{{ $description }}</p>
        
        <div class="mt-4 space-y-2">
            <a href="#" 
            class="block py-2 px-6 text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition-all duration-500 transform hover:scale-105 shadow-md hover:shadow-yellow-500/30">
                UMKM : {{ $umkmPrice }}
            </a>
            <a href="#" 
            class="block py-2 px-6 text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition-all duration-500 transform hover:scale-105 shadow-md hover:shadow-yellow-500/30">
                Non UMKM : {{ $nonUmkmPrice }}
            </a>
        </div>

        <a href="{{ $registerLink }}" 
        class="block py-2 px-6 mt-4 text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition-all duration-500 transform hover:scale-105 shadow-md hover:shadow-yellow-500/30">
            Daftar
        </a>
    </div>
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
</div> 