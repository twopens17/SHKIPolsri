<x-dataLayout>
    <h1 class="text-3xl bg-white shadow-black rounded-lg p-6 font-semibold mb-6 text-gray-500">Data Hak Kekayaan Intelektual Detail</h1>
    <div class="bg-white shadow-black rounded-lg p-6 mb-5">
        @php
            $hakCiptaSummaryData = [
                ['tahun' => '2019', 'jumlah' => 0],
                ['tahun' => '2020', 'jumlah' => 85],
                ['tahun' => '2021', 'jumlah' => 49],
                ['tahun' => '2022', 'jumlah' => 115],
                ['tahun' => '2023', 'jumlah' => 80],
                ['tahun' => '2024', 'jumlah' => 166],
                ['tahun' => '2025', 'jumlah' => 63],
            ];
            @endphp
            <x-summary-table judul="Tabel Total Hak Cipta" :data="$hakCiptaSummaryData"/>
    </div>
    <div class="bg-white shadow-black rounded-lg p-6 mb-5">
            @php
            $patenSummaryData = [
                ['tahun' => '2019', 'jumlah' => 10],
                ['tahun' => '2020', 'jumlah' => 50],
                ['tahun' => '2021', 'jumlah' => 30],
                ['tahun' => '2022', 'jumlah' => 90],
                ['tahun' => '2023', 'jumlah' => 70],
                ['tahun' => '2024', 'jumlah' => 120],
                ['tahun' => '2025', 'jumlah' => 40],
            ];
            @endphp
                    <x-summary-table judul="Tabel Total Paten" :data="$patenSummaryData"/>


    </div>
    <div class="bg-white shadow-black rounded-lg p-6 mb-5">
            @php
            $merekSummaryData = [
                ['tahun' => '2019', 'jumlah' => 5],
                ['tahun' => '2020', 'jumlah' => 20],
                ['tahun' => '2021', 'jumlah' => 15],
                ['tahun' => '2022', 'jumlah' => 40],
                ['tahun' => '2023', 'jumlah' => 25],
                ['tahun' => '2024', 'jumlah' => 60],
                ['tahun' => '2025', 'jumlah' => 10],
            ];
            @endphp
    <x-summary-table judul="Tabel Total Merek" :data="$merekSummaryData"/>

    </div>
    <div class="bg-white shadow-black rounded-lg p-6 mb-5">
            @php
            $desainIndustriSummaryData = [
                ['tahun' => '2019', 'jumlah' => 2],
                ['tahun' => '2020', 'jumlah' => 10],
                ['tahun' => '2021', 'jumlah' => 8],
                ['tahun' => '2022', 'jumlah' => 25],
                ['tahun' => '2023', 'jumlah' => 15],
                ['tahun' => '2024', 'jumlah' => 30],
                ['tahun' => '2025', 'jumlah' => 5],
            ];
            @endphp
    <x-summary-table judul="Tabel Total Desain Industri" :data="$desainIndustriSummaryData"/>

    </div>
    <div class="bg-white shadow-black rounded-lg p-6 mb-5">
            @php
            $dtlstSummaryData = [
                ['tahun' => '2019', 'jumlah' => 1],
                ['tahun' => '2020', 'jumlah' => 5],
                ['tahun' => '2021', 'jumlah' => 3],
                ['tahun' => '2022', 'jumlah' => 10],
                ['tahun' => '2023', 'jumlah' => 7],
                ['tahun' => '2024', 'jumlah' => 12],
                ['tahun' => '2025', 'jumlah' => 2],
            ];
            @endphp
            <x-summary-table judul="Tabel Total DTLST" :data="$dtlstSummaryData"/>

    </div>
      

        
        <div class="bg-white shadow-black rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-500">Grafik Total Hak Kekayaan Intelektual</h2>
            <div id="chart"></div>
        </div>
   
</x-dataLayout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hakCiptaData = @json($hakCiptaSummaryData);
        const patenData = @json($patenSummaryData);
        const merekData = @json($merekSummaryData);
        const desainIndustriData = @json($desainIndustriSummaryData);
        const dtlstData = @json($dtlstSummaryData);

        const years = hakCiptaData.map(item => item.tahun);
        const totalData = years.map(year => {
            let sum = 0;
            sum += hakCiptaData.find(item => item.tahun === year)?.jumlah || 0;
            sum += patenData.find(item => item.tahun === year)?.jumlah || 0;
            sum += merekData.find(item => item.tahun === year)?.jumlah || 0;
            sum += desainIndustriData.find(item => item.tahun === year)?.jumlah || 0;
            sum += dtlstData.find(item => item.tahun === year)?.jumlah || 0;
            return sum;
        });

        var options = {
            series: [
                {
                    name: 'Hak Cipta',
                    data: hakCiptaData.map(item => item.jumlah)
                },
                {
                    name: 'Paten',
                    data: patenData.map(item => item.jumlah)
                },
                {
                    name: 'Merek',
                    data: merekData.map(item => item.jumlah)
                },
                {
                    name: 'Desain Industri',
                    data: desainIndustriData.map(item => item.jumlah)
                },
                {
                    name: 'DTLST',
                    data: dtlstData.map(item => item.jumlah)
                }
            ],
            chart: {
                height: 350,
                type: 'bar',
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '70%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: true, 
                position: 'top',
                horizontalAlign: 'left',
                fontSize: '14px',
                fontFamily: 'Inter, sans-serif',
                fontWeight: 600,
                markers: {
                    width: 12,
                    height: 12,
                    radius: 4,
                },
                itemMargin: {
                    horizontal: 10,
                    vertical: 0
                }
            },
            xaxis: {
                categories: years,
                labels: {
                    style: {
                        colors: '#697A8D',
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: '#697A8D',
                        fontSize: '12px'
                    }
                }
            },
            grid: {
                borderColor: '#e0e0e0',
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                },
                xaxis: {
                    lines: {
                        show: false
                    }
                }
            },
            colors: ['#696CFF', '#03C3EC', '#FFAB00', '#71DD37', '#FF3E1D'], // Distinct colors for each series
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    });
</script> 