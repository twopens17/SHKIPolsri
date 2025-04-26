<x-layout>
    <!-- Hero Section -->
    <div class="relative min-h-[95vh] bg-gradient-to-br from-gray-50 via-white to-yellow-50 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute top-0 right-1/4 w-96 h-96 bg-yellow-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-1/3 w-96 h-96 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 container mx-auto px-4 pt-32">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-24">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-gray-100 px-3 py-1.5 rounded-full text-sm text-gray-600 animate-fade-in">
                        <span class="flex h-2 w-2 rounded-full bg-yellow-400"></span>
                        University For Everyone
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight animate-slide-up">
                        Sentra Hak Kekayaan Intelektual
                        <span class="text-yellow-500">Politeknik Negeri Sriwijaya</span>
                    </h1>
                    <p class="text-lg text-gray-600 animate-fade-in-delay max-w-xl">
                        Saatnya Hak Cipta, Paten, Merek, Desain Industri, DTLST Anda Terlindungi
                    </p>
                    <div class="flex items-center justify-center lg:justify-start gap-4 pt-4 animate-fade-in-delay-2">
                        <a href="/kontak" class="inline-flex items-center px-6 py-3 bg-yellow-500 text-white text-base font-semibold rounded-full transition-all duration-300 transform hover:scale-105 hover:bg-yellow-600 shadow-lg hover:shadow-yellow-500/30">
                            Kontak Sekarang
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 text-base font-semibold rounded-full hover:bg-gray-200 transition-all duration-300">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 pt-8 animate-fade-in-delay-3">
                        <div>
                            <h4 class="text-2xl lg:text-3xl font-bold text-gray-900">250+</h4>
                            <p class="text-sm text-gray-600">Pengguna Aktif</p>
                        </div>
                        <div>
                            <h4 class="text-2xl lg:text-3xl font-bold text-gray-900">95%</h4>
                            <p class="text-sm text-gray-600">Tingkat Kepuasan</p>
                        </div>
                        <div>
                            <h4 class="text-2xl lg:text-3xl font-bold text-gray-900">24/7</h4>
                            <p class="text-sm text-gray-600">Dukungan</p>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Banner Image -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative">
                        <div class="relative w-[250px] h-[250px] sm:w-[350px] sm:h-[350px] lg:w-[450px] lg:h-[450px] mx-auto overflow-hidden rounded-full shadow-2xl animate-float">
                            <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/20 to-transparent"></div>
                            <img src="/images/banner.jpg" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
                        </div>

                        <div class="absolute -top-4 -right-4 w-16 h-16 sm:w-20 sm:h-20 lg:w-24 lg:h-24 bg-yellow-400/20 rounded-full blur-2xl animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 bg-yellow-500/20 rounded-full blur-2xl animate-pulse delay-300"></div>
                        
                        <div class="absolute top-1/4 -left-8 bg-white rounded-xl p-4 shadow-lg animate-float-delay-1">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Inovasi Teknologi</p>
                                    <p class="text-xs text-gray-500">Terdepan & Modern</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-1/4 -right-1 bg-white rounded-xl p-4 shadow-lg animate-float-delay-2">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Perlindungan HKI</p>
                                    <p class="text-xs text-gray-500">Aman & Terpercaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-auto" viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 40C840 33 960 27 1080 30C1200 33 1320 47 1380 53.3L1440 60V100H1380C1320 100 1200 100 1080 100C960 100 840 100 720 100C600 100 480 100 360 100C240 100 120 100 60 100H0V0Z" fill="#F3F4F6"/>
            </svg>
        </div>
    </div>
    
    <div class="bg-gray-100">
    
                        <!-- Pengumuman section -->
        <div class="flex flex-col justify-center items-center w-full py-12 md:py-20 px-4">
            <h1 class="text-yellow-400 text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-center mb-8">Dashboard Grafik</h1>
            <div class="card-body w-full md:w-4/5 lg:w-3/4 bg-white rounded-lg shadow-sm p-4">
                <div id="chart"></div>
            </div>
        </div>

        <div class="flex flex-col items-center w-full py-12 md:py-16 px-4">
            <h1 class="text-yellow-400 text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-center">Pengumuman</h1>
            <h2 class="text-black text-lg md:text-xl lg:text-2xl font-semibold uppercase mt-2">Sentra HKI</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10 w-full max-w-7xl">
                <x-cardPengumuman 
                title="Jumat, 28-03-2025"
                link="#"
                image="/images/banner.jpg"
                description="Website SHKI Polsri diresmikan diluncurkan pada hari sabtu oleh 2 mahasiswa jurusan manajemen informatika"
                />
                <x-cardPengumuman 
                    title="Jumat, 28-03-2025"
                    link="#"
                    image="/images/banner.jpg"
                    description="Website SHKI Polsri diresmikan diluncurkan pada hari sabtu oleh 2 mahasiswa jurusan manajemen informatika"
                    />
                <x-cardPengumuman 
                    title="Jumat, 28-03-2025"
                    link="#"
                    image="/images/banner.jpg"
                    description="Website SHKI Polsri diresmikan diluncurkan pada hari sabtu oleh 2 mahasiswa jurusan manajemen informatika"
                    />
            </div>
        </div>

        <!-- Layanan Section -->
        <div class="flex flex-col items-center w-full py-12 md:py-16 px-4">
            <h1 class="text-yellow-400 text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-center">Layanan Pendaftaran</h1>
            <h2 class="text-black text-lg md:text-xl lg:text-2xl font-semibold uppercase mt-2">Kekayaan Intelektual (SIKI)</h2>
            <div class="w-full max-w-7xl bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-lg p-4 sm:p-6 flex flex-col md:flex-row items-center justify-between gap-6 mt-10 transform hover:scale-[1.02] transition-all duration-300">
                <img src="/images/polsri.png" alt="" class="h-20 sm:h-24 md:h-32 lg:h-40">
                <div class="text-center md:text-left space-y-3">
                    <h2 class="text-white text-xl sm:text-2xl md:text-3xl font-semibold uppercase">Melalui SHKI Polsri</h2>
                    <p class="text-white text-sm sm:text-base md:text-lg">Daftarkan sekarang Kekayaan Intelektual Anda dan nikmati kemudahannya.</p>
                    <a href="/kontak" class="inline-block px-6 py-2 bg-white text-yellow-600 text-base sm:text-lg font-semibold rounded-full hover:bg-gray-100 transition-colors duration-300">Daftar</a>
                </div>
                <img src="/images/Logo HMJMI.png" alt="" class="h-20 sm:h-24 md:h-32 lg:h-35">
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes pulse {
            0% { opacity: 0.4; }
            50% { opacity: 0.6; }
            100% { opacity: 0.4; }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delay-1 {
            animation: float 6s ease-in-out infinite;
            animation-delay: 1s;
        }

        .animate-float-delay-2 {
            animation: float 6s ease-in-out infinite;
            animation-delay: 2s;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .animate-fade-in-delay {
            animation: fadeIn 1s ease-out forwards;
            animation-delay: 0.3s;
        }

        .animate-fade-in-delay-2 {
            animation: fadeIn 1s ease-out forwards;
            animation-delay: 0.6s;
        }

        .animate-fade-in-delay-3 {
            animation: fadeIn 1s ease-out forwards;
            animation-delay: 0.9s;
        }

        .animate-slide-up {
            animation: slideUp 1s ease-out forwards;
        }

        .animate-pulse {
            animation: pulse 3s ease-in-out infinite;
        }

        @media (max-width: 640px) {
            .animate-float {
                animation: none;
            }
            .animate-float-delay-1,
            .animate-float-delay-2 {
                animation: none;
            }
        }

        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>

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