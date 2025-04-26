@php
$pegawai = ["Semua", "Pegawai 1", "Pegawai 2"];
$prodi = ["Semua", "Teknik Informatika", "Teknik Mesin"];
$departemen = ["Semua", "Departemen 1", "Departemen 2"];
$jenis_ki = ["Semua", "Paten", "Merek", "Hak Cipta"];
$dummyData = [
  [
    'judul' => 'Alat Penyangga Kamera Untuk Menghasilkan Video Tiga Dimesi',
    'jenis' => 'Paten',
    'deskripsi' => 'Invensi ini berkaitan dengan alat penyangga kamera untuk menghasilkan video tiga dimensi yang terdiri dari penyangga dua kamera aksi (action-cam), pengatur jarak antara dua kamera, tombol yang bisa menekan dua kamera secara bersamaan dan kendali untuk mengatur sudut. Dengan menggunakan alat penyangga kamera untuk menghasilkan video tiga dimensi menurut invensi ini, dapat menyelesaikan permasalahan pembuatan video 3 dimensi yang saat ini masih mahal dan tidak mudah dilakukan oleh masyarakat.'
  ],
  [
    'judul' => 'Aplikasi Manajemen Inventaris Berbasis Web',
    'jenis' => 'Hak Cipta',
    'deskripsi' => 'Aplikasi ini membantu pengelolaan inventaris barang di institusi pendidikan secara efisien dan terintegrasi.'
  ]
];
@endphp
<x-layout>
  <div class="flex flex-col items-center max-w-5xl mx-auto mt-20 px-6">
    <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full mb-4"></div>
    <h1 class="text-yellow-400 text-3xl md:text-2xl font-semibold uppercase">Komersialisasi</h1>
    <h1 class="text-black text-4xl md:text-5xl font-semibold uppercase">Kekayaan Intelektual</h1>
    <p class="text-gray-500 mt-2 mb-4 text-center max-w-lg">Temukan kekayaan intelektual yang siap dikomersialisasikan oleh Sentra HKI Polsri.</p>
    <span class="inline-block bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">{{ count($dummyData) }} Data KI</span>
  
    <div class="bg-[#262a46] rounded-xl p-8 mb-6 w-full">
      <form x-data="{
        showResult: false,
        pegawai: 'Semua',
        prodi: 'Semua',
        departemen: 'Semua',
        jenis_ki: 'Semua',
        get filteredData() {
          if (this.jenis_ki === 'Semua') return [];
          return [
            {judul: 'Alat Penyangga Kamera Untuk Menghasilkan Video Tiga Dimesi', jenis: 'Paten', deskripsi: 'Invensi ini berkaitan dengan alat penyangga kamera untuk menghasilkan video tiga dimensi yang terdiri dari penyangga dua kamera aksi (action-cam), pengatur jarak antara dua kamera, tombol yang bisa menekan dua kamera secara bersamaan dan kendali untuk mengatur sudut. Dengan menggunakan alat penyangga kamera untuk menghasilkan video tiga dimensi menurut invensi ini, dapat menyelesaikan permasalahan pembuatan video 3 dimensi yang saat ini masih mahal dan tidak mudah dilakukan oleh masyarakat.'},
            {judul: 'Aplikasi Manajemen Inventaris Berbasis Web', jenis: 'Hak Cipta', deskripsi: 'Aplikasi ini membantu pengelolaan inventaris barang di institusi pendidikan secara efisien dan terintegrasi.'}
          ].filter(item => item.jenis === this.jenis_ki);
        }
      }" @submit.prevent="showResult = true" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-4">
          <div>
            <label class="block text-white mb-2">Pegawai</label>
            <select class="w-full rounded-lg px-4 py-3 text-white bg-[#262a46]" x-model="pegawai">
              <template x-for="item in ['Semua','Pegawai 1','Pegawai 2']" :key="item">
                <option :value="item" x-text="item" style="color:white;background:#262a46;"></option>
              </template>
            </select>
          </div>
          <div>
            <label class="block text-white mb-2">Program Studi</label>
            <select class="w-full rounded-lg px-4 py-3 text-white bg-[#262a46]" x-model="prodi">
              <template x-for="item in ['Semua','Teknik Informatika','Teknik Mesin']" :key="item">
                <option :value="item" x-text="item" style="color:white;background:#262a46;"></option>
              </template>
            </select>
          </div>
          <div>
            <label class="block text-white mb-2">Departemen</label>
            <select class="w-full rounded-lg px-4 py-3 text-white bg-[#262a46]" x-model="departemen">
              <template x-for="item in ['Semua','Departemen 1','Departemen 2']" :key="item">
                <option :value="item" x-text="item" style="color:white;background:#262a46;"></option>
              </template>
            </select>
          </div>
          <div>
            <label class="block text-white mb-2">Jenis KI</label>
            <select class="w-full rounded-lg px-4 py-3 text-white bg-[#262a46]" x-model="jenis_ki">
              <template x-for="item in ['Semua','Paten','Merek','Hak Cipta']" :key="item">
                <option :value="item" x-text="item" style="color:white;background:#262a46;"></option>
              </template>
            </select>
          </div>
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-yellow-400 to-orange-400 hover:from-yellow-500 hover:to-orange-500 text-black font-semibold py-3 rounded-lg flex items-center justify-center gap-2 text-lg transition">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 5a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V9zm1 5a1 1 0 000 2h12a1 1 0 100-2H4z"/></svg>
          Lihat
        </button>
        <template x-if="showResult">
          <div class="mt-6 w-full">
            <template x-if="jenis_ki === 'Semua' || filteredData.length === 0">
              <div class="bg-[#262a46] rounded-xl p-8 text-center text-2xl font-bold text-white">Belum ditemukan data</div>
            </template>
            <template x-for="item in filteredData" :key="item.judul">
              <div class="bg-[#262a46] rounded-xl p-8 flex flex-col md:flex-row gap-6 items-center mb-4 border border-yellow-400/30">
                <div class="text-6xl text-yellow-400">
                  <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor' class='w-16 h-16'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 13l4 4L19 7' /></svg>
                </div>
                <div class="flex-1">
                  <h3 class="text-2xl font-bold text-white mb-1" x-text="item.judul"></h3>
                  <div class="text-gray-400 mb-2" x-text="item.jenis"></div>
                  <p class="text-white mb-4" x-text="item.deskripsi"></p>
                  <div class="flex flex-wrap gap-2">
                    <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded flex items-center gap-2">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm2 0v10h12V5H4zm2 2h8v2H6V7zm0 4h8v2H6v-2z"/></svg> Selengkapnya
                    </a>
                    <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded flex items-center gap-2">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9 12l2-2-2-2m0 0l2-2-2-2m2 2H7m6 0h-2m2 0a2 2 0 11-4 0 2 2 0 014 0z"/></svg> Cek DGIP
                    </a>
                    <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded flex items-center gap-2">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V7h2v2z"/></svg> Cek Sertifikat
                    </a>
                    <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded flex items-center gap-2">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M3 8a1 1 0 011-1h12a1 1 0 011 1v8a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm1 0v8h12V8H4zm2 2h8v2H6v-2zm0 4h8v2H6v-2z"/></svg> Tertarik
                    </a>
                    <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-2 rounded flex items-center gap-2">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016.2 4H3.8a2 2 0 00-1.797 1.884z"/></svg> Kontak Kami
                    </a>
                  </div>
                </div>
              </div>
            </template>
          </div>
        </template>
      </form>
    </div>
  </div>
</x-layout> 