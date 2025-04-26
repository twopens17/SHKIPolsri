@props(['title', 'description', 'image', 'link'])

<div class="relative bg-white rounded-xl shadow-lg overflow-hidden group h-[400px]">
    
    <div class="relative h-full w-full overflow-hidden">
        <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" 
            src="{{ $image }}" 
            alt="{{ $title }}" />
            
        <div class="absolute top-0 left-0 right-0 p-6 bg-gradient-to-b from-black/60 to-transparent">
            <h3 class="text-xl font-bold text-white drop-shadow-lg">
                {{ $title }}
            </h3>
        </div>
            
        <div class="absolute inset-0 bg-gradient-to-t from-yellow-600/95 via-orange-500/80 to-transparent 
            opacity-0 group-hover:opacity-100 transition-all duration-500 
            flex flex-col justify-end p-6">
            
            
            <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500 space-y-3">
                <p class="text-white/90 text-sm leading-relaxed">
                    {{ $description }}
                </p>
                <a href="{{ $link }}" class="inline-flex items-center text-sm text-white mt-4 hover:text-yellow-200 transition-colors duration-300">
                    <span class="relative inline-block">
                        Baca selengkapnya
                        <span class="absolute left-0 bottom-0 w-full h-0.5 bg-yellow-300 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></span>
                    </span>
                    <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes fadeInScale {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.bg-white {
    animation: fadeInScale 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);
}


@keyframes slideUp {
    from {
        transform: translateY(100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}


@keyframes gradientFlow {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.group:hover .bg-gradient-to-t {
    background-size: 200% 200%;
    animation: gradientFlow 3s ease infinite;
}
</style>