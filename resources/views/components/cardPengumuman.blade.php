@props(['title', 'description', 'image', 'link'])

<div class="relative bg-white rounded-2xl shadow-xl overflow-hidden group border border-gray-200">
    <div class="relative w-full h-52 overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/5 to-transparent"></div>
        <div class="absolute top-3 left-3 bg-white/90 text-gray-800 text-xs font-semibold px-2 py-1 rounded shadow">
            News
        </div>

        <div class="absolute bottom-2 right-2 bg-white p-1 rounded-full shadow hover:scale-105 transition-transform">
            ❤️
        </div>
    </div>

    <div class="p-5 space-y-2">
        <h3 class="text-lg font-extrabold text-gray-800">{{ $title }}</h3>
        <p class="text-sm text-gray-600 leading-relaxed">
            {{ $description }}
        </p>
        <div class="flex justify-center">
        <a href="{{ $link }}" class="block py-2 px-6 mt-4 text-white bg-yellow-500 hover:bg-yellow-600 rounded-md transition-all duration-500 transform hover:scale-105 shadow-md hover:shadow-yellow-500/30">
            See the project
        </a>
    </div>
    </div>
</div>
