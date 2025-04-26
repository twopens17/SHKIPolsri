@props([
    'name',
    'role',
    'photo',
    'linkedin' => null,
    'instagram' => null,
    'email' => null
])
<div class="relative flex flex-col items-center bg-gradient-to-br from-yellow-400 to-orange-400 rounded-2xl shadow-xl p-1 pt-4 w-full max-w-[200px] mx-auto transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl group">
    <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-36 h-36 rounded-2xl overflow-hidden shadow-lg border-4 border-white bg-white" style="min-width: 9rem; min-height: 9rem;">
        <img src="{{ $photo }}" alt="{{ $name }}" class="object-cover w-full h-full" />
    </div>

    <div class="mt-8 text-center">
        <h3 class="text-base font-bold text-gray-900">{{ $name }}</h3>
        <p class="text-xs text-gray-800 mt-1">{{ $role }}</p>
    </div>
    
    <div class="flex justify-center gap-3 mt-1 mb-0">
        @if($email)
            <a href="mailto:{{ $email }}" class="text-gray-900 hover:text-white bg-white/30 hover:bg-orange-500 rounded-full p-1.5 transition-colors duration-300" title="Email">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0V8a4 4 0 00-8 0v4m8 0v4a4 4 0 01-8 0v-4"/></svg>
            </a>
        @endif
        @if($instagram)
            <a href="{{ $instagram }}" target="_blank" class="text-gray-900 hover:text-white bg-white/30 hover:bg-orange-500 rounded-full p-1.5 transition-colors duration-300" title="Instagram">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><circle cx="17.5" cy="6.5" r="1.5"/></svg>
            </a>
        @endif
        @if($linkedin)
            <a href="{{ $linkedin }}" target="_blank" class="text-gray-900 hover:text-white bg-white/30 hover:bg-orange-500 rounded-full p-1.5 transition-colors duration-300" title="LinkedIn">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v6h-4v-6a2 2 0 00-4 0v6h-4v-6a6 6 0 016-6z"/><rect width="4" height="12" x="2" y="9" rx="2"/></svg>
            </a>
        @endif
    </div>
</div> 