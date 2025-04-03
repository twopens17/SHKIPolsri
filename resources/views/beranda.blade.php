<x-layout>

  <div id="indicators-carousel" class="relative w-full pt-20 px-4" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 md:h-96 lg:h-[650px] overflow-hidden rounded-lg z-10">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="/images/banner.jpg" class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/banner.jpg" class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/banner.jpg" class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent z-20"></div>
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>

    <!-- Teks pada Carousel -->
    <div class="absolute bottom-8 left-6 md:left-12 z-30 text-white max-w-xl">
        <h2 class="text-yellow-400 text-sm md:text-lg lg:text-4xl font-semibold uppercase">University For Everyone</h2>
        <h1 class="text-lg md:text-xl lg:text-5xl font-bold leading-tight mt-2">
            Sentra Hak Kekayaan Intelektual Politeknik Negeri Sriwijaya
        </h1>
        <p class="mt-3 text-sm md:text-lg text-gray-300">
            Saatnya Hak Cipta, Paten, Merek, Desain Industri, DTLST Anda Terlindungi
        </p>
        <a href="/kontak" class="mt-4 inline-block px-5 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm md:text-lg font-semibold rounded-lg shadow-md transition">
            Kontak
        </a>
    </div>
</div>

   <!-- ini bagian dashboard -->
   <div class="flex flex-col justify-center items-center w-full h-150 mt-20 px-4">
    <h1 class="text-yellow-400 text-3xl md:text-4xl font-semibold uppercase text-center">Dashboard Grafik</h1>
      <div class="card-body w-full md:w-3/4 lg:w-6/7">
        <div id="chart"></div>
    </div>
  </div>
   <!-- ini akhir bagian dashboard -->

   <div class="flex flex-col items-center w-full h-150 mt-16 px-4">
    <h1 class="text-yellow-400 text-3xl md:text-4xl font-semibold uppercase">Pengumuman</h1>
    <h1 class="text-black text-xl md:text-2xl font-semibold uppercase">Sentra HKI</h1>
    <div class="flex flex-wrap justify-center gap-6 mt-10">

<div class="max-w-3xs max-h-100 bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
    <a href="#">
        <img class="w-full h-48 object-cover" src="/images/banner.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-lg md:text-xl font-bold text-gray-900">Sabtu, 29-03-2025</h5>
        </a>
        <p class="text-gray-700 text-sm md:text-base"> Website SHKI Polsri diresmikan diluncurkan pada hari sabtu oleh 2 mahasiswa jurusan manajemen informatika</p>
        
    </div>
</div>
<div class="max-w-3xs max-h-100 bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
  <a href="#">
      <img class="w-full h-48 object-cover" src="/images/banner.jpg" alt="" />
  </a>
  <div class="p-5">
      <a href="#">
          <h5 class="mb-2 text-lg md:text-xl font-bold text-gray-900">Sabtu, 29-03-2025</h5>
      </a>
      <p class="text-gray-700 text-sm md:text-base"> Website SHKI Polsri diresmikan diluncurkan pada hari sabtu oleh 2 mahasiswa jurusan manajemen informatika</p>
      
  </div>
</div>
<div class="max-w-3xs max-h-100 bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
  <a href="#">
      <img class="w-full h-48 object-cover" src="/images/banner.jpg" alt="" />
  </a>
  <div class="p-5">
      <a href="#">
          <h5 class="mb-2 text-lg md:text-xl font-bold text-gray-900">Sabtu, 29-03-2025</h5>
      </a>
      <p class="text-gray-700 text-sm md:text-base"> Website SHKI Polsri diresmikan diluncurkan pada hari sabtu oleh 2 mahasiswa jurusan manajemen informatika</p>
      
  </div>
</div>
<div class="max-w-3xs max-h-100 bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
  <a href="#">
      <img class="w-full h-48 object-cover" src="/images/banner.jpg" alt="" />
  </a>
  <div class="p-5">
      <a href="#">
          <h5 class="mb-2 text-lg md:text-xl font-bold text-gray-900">Sabtu, 29-03-2025</h5>
      </a>
      <p class="text-gray-700 text-sm md:text-base"> Website SHKI Polsri diresmikan diluncurkan pada hari sabtu oleh 2 mahasiswa jurusan manajemen informatika</p>
      
  </div>
</div>
    </div>
   </div>

   <div class="flex flex-col items-center w-full h-150 mt-16 px-4">
    <h1 class="text-yellow-400 text-3xl md:text-4xl font-semibold uppercase">Layanan Pendaftaran</h1>
    <h1 class="text-black text-xl md:text-2xl font-semibold uppercase">Kekayaan Intelektual (SIKI)</h1>
    <div class="w-full max-w-7xl bg-yellow-500 rounded-lg p-6 flex flex-col md:flex-row items-center justify-between gap-4 mt-10">
      <img src="/images/polsri.png" alt="" class="h-24 md:h-40">
      <div class="text-center md:text-left">
        <h1 class="text-white text-xl md:text-2xl font-semibold uppercase">Melalui SHKI Polsri</h1>
        <p class="text-white text-sm md:text-base">Daftarkan sekarang Kekayaan Intelektual Anda dan nikmati kemudahannya.</p>
        <a href="/kontak" class="text-white text-lg font-semibold">Daftar</a>
      </div>
      <img src="/images/Logo HMJMI.png" alt="" class="h-24 md:h-35">
    </div>
  </div>



















<script>
    var options = {
            series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 42, 109, 100]
          }, {
            name: 'series2',
            data: [11, 32, 45, 32, 34, 52, 41]
          }],
            chart: {
            height: 350,
            type: 'area'
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            curve: 'smooth'
          },
          xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
          },
          tooltip: {
            x: {
              format: 'dd/MM/yy HH:mm'
            },
          },
          };
  
          var chart = new ApexCharts(document.querySelector("#chart"), options);
          chart.render();
        
  </script>
</x-layout>