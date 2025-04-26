@props(['title', 'icon', 'link'])

<div class="max-w-xs w-xs h-50 p-6 mt-16 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-yellow-100 dark:border-yellow-100 flex flex-col items-center">
    <a href="{{ $link }}">
        <div class="relative w-15 h-15 overflow-hidden bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full items-center flex justify-center mb-3">
            {!! $icon !!}
        </div>
    </a>
    <a href="{{ $link }}">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $title }}</h5>
    </a>
    <div class="group">
        <a href="{{ $link }}" class="block py-2 px-6 text-white bg-yellow-500 hover:bg-yellow-600 rounded-full transition-all duration-500 transform hover:scale-105 shadow-md hover:shadow-yellow-500/30">
            Tampilkan
        </a>
    </div>
</div> 