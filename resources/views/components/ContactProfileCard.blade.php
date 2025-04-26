@props([
    'name',
    'role',
    'photo',
    'phone' => null,
    'email' => null
])
<div class="relative flex flex-col items-center bg-gradient-to-br from-yellow-400 to-orange-400 rounded-2xl shadow-xl p-4 pt-12  mt-16 w-full max-w-xs mx-auto transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl group">

    <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-24 h-24 rounded-2xl overflow-hidden shadow-lg border-4 border-white bg-white">
        <img src="{{ $photo }}" alt="{{ $name }}" class="object-cover w-full h-full" />
    </div>

    <div class="mt-12 text-center w-full">
        <h3 class="text-base font-bold text-gray-900 leading-tight">{{ $name }}</h3>
        <p class="text-sm text-gray-700 mt-1 font-medium">{{ $role }}</p>
        <div class="w-8 h-1 bg-yellow-400 rounded-full mx-auto mt-2 mb-2"></div>
    </div>

    <div class="flex flex-col items-center gap-2 mt-1 mb-4 w-full">
        @if($phone)
            <span class="flex items-center gap-2 text-sm text-gray-800 font-normal w-full justify-center">
                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm12-12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                {{ $phone }}
            </span>
        @endif
        @if($email)
            <span class="flex items-center gap-2 text-sm text-gray-800 font-normal w-full justify-center">
                <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0V8a4 4 0 00-8 0v4m8 0v4a4 4 0 01-8 0v-4"/></svg>
                {{ $email }}
            </span>
        @endif
    </div>
    
    <div class="flex justify-center mt-2 w-full">
        @if($phone)
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $phone) }}" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-bold px-4 py-2 rounded-full shadow transition-all duration-300 w-full text-center outline-none">
                Hubungi Kami
            </a>
        @elseif($email)
            <a href="mailto:{{ $email }}" class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-bold px-4 py-2 rounded-full shadow transition-all duration-300 w-full text-center outline-none">
                Hubungi Kami
            </a>
        @endif
    </div>
</div> 