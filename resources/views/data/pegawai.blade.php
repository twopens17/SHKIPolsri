<x-dataLayout>
    <h1 class="text-3xl bg-white shadow-black rounded-lg p-6 font-semibold mb-6 text-gray-500">Data Pegawai</h1>
    <div class="bg-white shadow-yellow-500 rounded-lg p-6">
        <div class="mb-4">
            <label for="pegawai_select" class="block text-sm font-medium text-gray-500">PEGAWAI</label>
            <div class="mt-1 flex flex-col sm:flex-row items-center sm:space-x-4 space-y-3 sm:space-y-0">
                <select id="pegawai_select" name="pegawai" class="block w-full sm:w-auto flex-grow px-3 py-2 text-base border-gray-300 focus:outline-none focus:ring-yellow-200 focus:border-yellow-500 sm:text-sm rounded-md shadow-sm transition-all duration-200 ease-in-out">
                    <option value=""> - </option>
                    <option value="M Irfan Apriansyah">M Irfan Apriansyah</option>
                    <option value="Lenno Nardo">Lenno Nardo</option>
                    <option value="Sri Rahayu">Sri Rahayu</option>
                    
                </select>
                <button id="lihat_button" class="w-full sm:w-auto px-4 py-2 bg-yellow-600 text-white font-semibold rounded-md 
                shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 
                focus:ring-yellow-500">
                    Lihat
                </button>
            </div>
        </div>
    </div>
    <div id="data_content" class="hidden">
        <div class="my-6 flex justify-end">
            <button class="px-6 py-2 bg-yellow-600 text-white font-semibold rounded-md shadow-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all duration-200 ease-in-out transform hover:scale-105">
                <svg class="inline-block w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Download Semua Sertifikat
            </button>
        </div>

        @php
            $judulHakCipta = "Tabel Hak Cipta Pegawai";
            $hakCiptaHeaders = ['No', 'Sertifikat', 'Judul', 'Nama Pegawai', 'Tahun'];
            $hakCiptaData = [
                ['1', 'HC-001', 'Judul Hak Cipta 1', 'Nama Pegawai 1', '2020'],
                ['2', 'HC-002', 'Judul Hak Cipta 2', 'Nama Pegawai 2', '2021'],
            ];
        @endphp
        <x-data-table :judul="$judulHakCipta" :headers="$hakCiptaHeaders" :data="$hakCiptaData" class="shadow-sneat-card"/>

        @php
        $judulPaten="Tabel paten Pegawai";
            $patenHeaders = ['No', 'Sertifikat', 'Judul', 'Nama Pegawai', 'Tahun'];
            $patenData = [
                ['1', 'P-001', 'Judul Paten 1', 'Nama Pegawai 3', '2019'],
                ['2', 'P-002', 'Judul Paten 2', 'Nama Pegawai 4', '2022'],
            ];
        @endphp
        <x-data-table :judul="$judulPaten" :headers="$patenHeaders" :data="$patenData" class="shadow-sneat-card"/>

        @php
        $judulMerek="Tabel Merek Pegawai";
            $merekHeaders = ['No', 'Sertifikat', 'Judul', 'Nama Pegawai', 'Tahun'];
            $merekData = [
                ['1', 'M-001', 'Judul Merek 1', 'Nama Pegawai 5', '2018'],
                ['2', 'M-002', 'Judul Merek 2', 'Nama Pegawai 6', '2023'],
            ];
        @endphp
        <x-data-table :judul="$judulMerek" :headers="$merekHeaders" :data="$merekData" class="shadow-sneat-card"/>

        @php
        $judulDesainIndustri="Tabel Desain Industri Pegawai";
            $desainIndustriHeaders = ['No', 'Sertifikat', 'Judul', 'Nama Pegawai', 'Tahun'];
            $desainIndustriData = [
                ['1', 'DI-001', 'Judul Desain Industri 1', 'Nama Pegawai 7', '2017'],
                ['2', 'DI-002', 'Judul Desain Industri 2', 'Nama Pegawai 8', '2024'],
            ];
        @endphp
        <x-data-table :judul="$judulDesainIndustri" :headers="$desainIndustriHeaders" :data="$desainIndustriData" class="shadow-sneat-card"/>

        @php
        $judulDTLST="Tabel DTLST Pegawai";
            $dtlstHeaders = ['No', 'Sertifikat', 'Judul', 'Nama Pegawai', 'Tahun'];
            $dtlstData = [
                ['1', 'DTLST-001', 'Judul DTLST 1', 'Nama Pegawai 9', '2016'],
                ['2', 'DTLST-002', 'Judul DTLST 2', 'Nama Pegawai 10', '2020'],
            ];
        @endphp
        <x-data-table :judul="$judulDTLST" :headers="$dtlstHeaders" :data="$dtlstData" class="shadow-sneat-card"/>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const lihatButton = document.getElementById('lihat_button');
            const pegawaiSelect = document.getElementById('pegawai_select');
            const dataContent = document.getElementById('data_content');

            lihatButton.addEventListener('click', function () {
                if (pegawaiSelect.value !== '') {
                    dataContent.classList.remove('hidden');
                } else {
                    dataContent.classList.add('hidden');
                }
            });
        });
    </script>
</x-dataLayout> 