<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        \App\Models\User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
            ]
        );

        // Skills
        $skills = [
            ['name' => 'Dart', 'icon' => 'devicon-dart-plain text-blue-500', 'type' => 'skill', 'order' => 1],
            ['name' => 'Flutter', 'icon' => 'devicon-flutter-plain text-blue-400', 'type' => 'skill', 'order' => 2],
            ['name' => 'Firebase', 'icon' => 'devicon-firebase-plain text-yellow-500', 'type' => 'skill', 'order' => 3],
            ['name' => 'UI/UX', 'icon' => '<svg class="h-12 w-12 text-pink-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>', 'type' => 'skill', 'order' => 4],
            ['name' => 'Git', 'icon' => 'devicon-git-plain text-red-500', 'type' => 'skill', 'order' => 5],
        ];
        foreach ($skills as $skill) \App\Models\Skill::create($skill);

        // Tools
        $tools = [
            ['name' => 'VS Code', 'icon' => 'devicon-vscode-plain text-blue-500', 'type' => 'tool', 'order' => 1],
            ['name' => 'Android Studio', 'icon' => 'devicon-androidstudio-plain text-green-400', 'type' => 'tool', 'order' => 2],
            ['name' => 'Xcode', 'icon' => 'devicon-xcode-plain text-blue-500', 'type' => 'tool', 'order' => 3],
            ['name' => 'Postman', 'icon' => 'devicon-postman-plain text-orange-500', 'type' => 'tool', 'order' => 4],
            ['name' => 'Figma', 'icon' => 'devicon-figma-plain text-pink-500', 'type' => 'tool', 'order' => 5],
        ];
        foreach ($tools as $tool) \App\Models\Skill::create($tool);

        // Experiences
        $experiences = [
            [
                'title' => 'IT Staff',
                'company' => 'PT. Barakah Niaga Semen',
                'duration' => '2024 - Present',
                'description' => [
                    ['item' => 'Designed UI/UX using Figma'],
                    ['item' => 'Built applications from scratch using Flutter'],
                    ['item' => 'Fixed bugs and maintained applications'],
                    ['item' => 'Deployed apps to Play Store and App Store'],
                ],
                'order' => 1
            ],
            [
                'title' => 'Flutter Developer',
                'company' => 'Smart Inovasi',
                'duration' => '2020 - Present',
                'description' => [
                    ['item' => 'Designed UI/UX using Figma'],
                    ['item' => 'Created app prototypes in Figma'],
                    ['item' => 'Built applications from scratch using Flutter'],
                    ['item' => 'Fixed bugs and maintained applications'],
                    ['item' => 'Deployed apps to Play Store and App Store'],
                ],
                'order' => 2
            ],
        ];
        foreach ($experiences as $exp) \App\Models\Experience::create($exp);

        // Education
        \App\Models\Education::create([
            'institution' => 'Universitas Teknologi Akba Makassar (UNITAMA)',
            'degree' => 'Informatics Engineering',
            'duration' => '2018 - 2021',
            'order' => 1
        ]);

        // Projects
        $projects = [
            [
                'title' => 'Med Anatomy Learning FKUH',
                'description' => 'Aplikasi pembelajaran anatomi untuk mahasiswa kedokteran dengan fitur lembar kerja, kuis, video, dan materi PDF.',
                'image' => 'med-anatomy-learning.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/search?q=Med+Anatomy+Learning+FKUH&c=apps',
                'order' => 1
            ],
            [
                'title' => 'E-Logbook Profesi FKUH',
                'description' => 'Platform logbook digital untuk dokter muda (KOAS) untuk merekam kegiatan harian dan aktivitas klinis.',
                'image' => 'e-logbook-profesi-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/search?q=E-Logbook+Profesi+FKUH&c=apps',
                'order' => 2
            ],
            [
                'title' => 'E-Logbook Profesi UNIPA',
                'description' => 'Aplikasi logbook khusus untuk profesional medis di UNIPA untuk memantau kemajuan klinis.',
                'image' => 'e-logbook-profesi-unipa.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/search?q=E-Logbook+Profesi+UNIPA&c=apps',
                'order' => 3
            ],
            [
                'title' => 'E-Book Anatomy Nursing',
                'description' => 'Aplikasi pembaca e-book online yang dirancang khusus untuk buku-buku anatomi keperawatan.',
                'image' => 'nursing-anatomy-ebook.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/search?q=E-Book+Anatomy+Nursing&c=apps',
                'order' => 4
            ],
            [
                'title' => 'Wallpaper App',
                'description' => 'Aplikasi utilitas untuk mengganti dan mengatur wallpaper layar utama dan layar kunci.',
                'image' => 'wallpaper-app.png',
                'technologies' => ['Flutter'],
                'url' => 'https://github.com/aldiansyahfahmi',
                'order' => 5
            ],
            [
                'title' => 'PAN Sales',
                'description' => 'Alat manajemen penjualan untuk pelacakan lapangan, penjadwalan kunjungan toko, dan input data toko baru.',
                'image' => 'pan-sales.png',
                'technologies' => ['Flutter'],
                'url' => 'https://github.com/aldiansyahfahmi',
                'order' => 6
            ],
            [
                'title' => 'Presensita',
                'description' => 'Aplikasi presensi digital untuk memudahkan pencatatan kehadiran karyawan secara real-time.',
                'image' => 'presensita.png',
                'technologies' => ['Flutter'],
                'url' => 'https://github.com/aldiansyahfahmi',
                'order' => 7
            ],
            [
                'title' => 'E-Logbook Prodi S1 FKUH',
                'description' => 'Platform logbook digital untuk mahasiswa S1 Fakultas Kedokteran untuk mencatat aktivitas akademik dan penelitian.',
                'image' => 'e-logbook-prodi-s1-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://github.com/aldiansyahfahmi',
                'order' => 8
            ],
            [
                'title' => 'E-Logbook PPDS-THT FKUH',
                'description' => 'Aplikasi logbook khusus untuk Program Pendidikan Dokter Spesialis THT di FKUH.',
                'image' => 'e-logbook-ppds-tht-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://github.com/aldiansyahfahmi',
                'order' => 9
            ],
            [
                'title' => 'E-Logbook PPDS-Urologi FKUH',
                'description' => 'Platform logbook untuk Program Pendidikan Dokter Spesialis Urologi di FKUH.',
                'image' => 'e-logbook-ppds-urologi-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://github.com/aldiansyahfahmi',
                'order' => 10
            ],
        ];
        foreach ($projects as $project) \App\Models\Project::create($project);
    }
}
