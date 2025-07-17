<div class="bg-white shadow-black rounded-lg mb-8">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <div class="py-3 px-4 border-b border-gray-200 bg-white flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <h2 class=" text-left text-xl font-semibold text-gray-500 uppercase tracking-wider mb-2 sm:mb-0">{{ $judul }}</h2>
            <div class="inline justify-end">
                <button class="px-3 py-1 bg-white text-yellow-600 text-sm font-semibold rounded-md shadow-lg 
                border-2 hover:bg-white focus:outline-yellow-500 focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all duration-200 ease-in-out transform hover:scale-105">
                    <svg class="inline-block w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Download Semua Sertifikat
                </button>
            </div>
        </div>
           
            <thead>
                <tr>
                    <th class="py-3 px-4 border-b border-gray-200 bg-white text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">{{ $headers[0] ?? 'No' }}</th>
                    <th class="py-3 px-4 border-b border-gray-200 bg-white text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">{{ $headers[1] ?? 'Sertifikat' }}</th>
                    <th class="py-3 px-4 border-b border-gray-200 bg-white text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">{{ $headers[2] ?? 'Judul' }}</th>
                    <th class="py-3 px-4 border-b border-gray-200 bg-white text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">{{ $headers[3] ?? 'Nama' }}</th>
                    <th class="py-3 px-4 border-b border-gray-200 bg-white text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">{{ $headers[4] ?? 'Tahun' }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr class="hover:bg-gray-100 transition-colors duration-200">
                    <td class="py-2 px-4 border-b border-white text-gray-500">{{ $row[0] }}</td>
                    <td class="py-2 px-4 border-b border-white">
                        <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded text-xs transition-colors duration-200">Unduh</button>
                    </td>
                    <td class="py-2 px-4 border-b border-white text-gray-500">{{ $row[2] }}</td>
                    <td class="py-2 px-4 border-b border-white text-gray-500">{{ $row[3] }}</td>
                    <td class="py-2 px-4 border-b border-white text-gray-500">{{ $row[4] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> 