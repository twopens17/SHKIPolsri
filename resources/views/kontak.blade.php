<x-layout>
    <div class="flex flex-col place-self-center items-center max-w-full mt-30 px-4">
        <h1 class="text-yellow-400 text-3xl md:text-2xl font-semibold uppercase">Kontak Kami</h1>
        <h1 class="text-black text-xl md:text-5xl font-semibold uppercase">Sentra HKI Polsri</h1>
    </div>
        <div class="flex flex-wrap items-center justify-center gap-2 p-4 mt-10 md:p-16">
            <x-ContactProfileCard
                name="Dewi Lestari"
                role="Staff Administrasi"
                photo="/images/banner.jpg"
                phone="08123456789"
                email="dewi@sentrahki.com"
            />
            <x-ContactProfileCard
                name="Budi Santoso"
                role="Kepala Layanan"
                photo="/images/banner.jpg"
                phone="082233445566"
                email="budi@sentrahki.com"
            />
            <x-ContactProfileCard
                name="Siti Aminah"
                role="Customer Support"
                photo="/images/banner.jpg"
                phone="085677889900"
                email="siti@sentrahki.com"
            />
        </div>
    
</x-layout>