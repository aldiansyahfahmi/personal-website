@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-20">
    
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-white mb-4">
            My Recent <span class="text-primary">Works</span>
        </h1>
        <p class="text-gray-400">Here are a few projects I've worked on recently.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Project 1 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('med-anatomy-learning.png') }}" alt="Med Anatomy Learning FKUH" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">Med Anatomy Learning FKUH</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Aplikasi pembelajaran anatomi untuk mahasiswa kedokteran dengan fitur lembar kerja, kuis, video, dan materi PDF.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('e-logbook-profesi-fkuh.png') }}" alt="E-Logbook Profesi FKUH" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">E-Logbook Profesi FKUH</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                     Platform logbook digital untuk dokter muda (KOAS) untuk merekam kegiatan harian dan aktivitas klinis.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

         <!-- Project 3 -->
         <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('e-logbook-profesi-unipa.png') }}" alt="E-Logbook Profesi UNIPA" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">E-Logbook Profesi UNIPA</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Aplikasi logbook khusus untuk profesional medis di UNIPA untuk memantau kemajuan klinis.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

        <!-- Project 4 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('nursing-anatomy-ebook.png') }}" alt="E-Book Anatomy Nursing" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">E-Book Anatomy Nursing</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Aplikasi pembaca e-book online yang dirancang khusus untuk buku-buku anatomi keperawatan.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

        <!-- Project 5 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('wallpaper-app.png') }}" alt="Wallpaper App" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">Wallpaper App</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Aplikasi utilitas untuk mengganti dan mengatur wallpaper layar utama dan layar kunci.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

        <!-- Project 6 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('pan-sales.png') }}" alt="PAN Sales" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">PAN Sales</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Alat manajemen penjualan untuk pelacakan lapangan, penjadwalan kunjungan toko, dan input data toko baru.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>


        <!-- Project 7 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('presensita.png') }}" alt="Presensita" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">Presensita</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Aplikasi presensi digital untuk memudahkan pencatatan kehadiran karyawan secara real-time.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

        <!-- Project 8 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('e-logbook-prodi-s1-fkuh.png') }}" alt="E-Logbook Prodi S1 FKUH" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">E-Logbook Prodi S1 FKUH</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Platform logbook digital untuk mahasiswa S1 Fakultas Kedokteran untuk mencatat aktivitas akademik dan penelitian.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

        <!-- Project 9 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('e-logbook-ppds-tht-fkuh.png') }}" alt="E-Logbook PPDS-THT FKUH" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">E-Logbook PPDS-THT FKUH</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Aplikasi logbook khusus untuk Program Pendidikan Dokter Spesialis THT di FKUH.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

        <!-- Project 10 -->
        <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
            <div class="overflow-hidden bg-white">
                <img src="{{ asset('e-logbook-ppds-urologi-fkuh.png') }}" alt="E-Logbook PPDS-Urologi FKUH" class="w-full h-auto object-contain">
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <h3 class="text-xl font-bold text-white mb-3 text-center">E-Logbook PPDS-Urologi FKUH</h3>
                <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                    Platform logbook untuk Program Pendidikan Dokter Spesialis Urologi di FKUH.
                </p>
                <div class="flex justify-center space-x-4 mt-auto">
                    <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">Flutter</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
