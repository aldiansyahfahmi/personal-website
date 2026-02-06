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
                'url' => 'https://play.google.com/store/apps/details?id=androidmakassar.medanatomylearning',
                'order' => 1
            ],
            [
                'title' => 'E-Logbook Profesi FKUH',
                'description' => 'Platform logbook digital untuk dokter muda (KOAS) untuk merekam kegiatan harian dan aktivitas klinis.',
                'image' => 'e-logbook-profesi-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/apps/details?id=com.smartinovasi.e_logbook_profesi',
                'order' => 2
            ],
            [
                'title' => 'E-Logbook Profesi UNIPA',
                'description' => 'Aplikasi logbook khusus untuk profesional medis di UNIPA untuk memantau kemajuan klinis.',
                'image' => 'e-logbook-profesi-unipa.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/apps/details?id=com.smartinovasi.e_logbook_profesi_unipa',
                'order' => 3
            ],
            [
                'title' => 'E-Book Anatomy Nursing',
                'description' => 'Aplikasi pembaca e-book online yang dirancang khusus untuk buku-buku anatomi keperawatan.',
                'image' => 'nursing-anatomy-ebook.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/apps/details?id=smartinovasi.nursingdigitallearning',
                'order' => 4
            ],
            [
                'title' => 'Wallpaper App',
                'description' => 'Aplikasi utilitas untuk mengganti dan mengatur wallpaper layar utama dan layar kunci.',
                'image' => 'wallpaper-app.png',
                'technologies' => ['Flutter'],
                'url' => 'https://github.com/aldiansyahfahmi/wallpaper-app',
                'order' => 5
            ],
            [
                'title' => 'PAN Sales',
                'description' => 'Alat manajemen penjualan untuk pelacakan lapangan, penjadwalan kunjungan toko, dan input data toko baru.',
                'image' => 'pan-sales.png',
                'technologies' => ['Flutter'],
                'url' => '',
                'order' => 6
            ],
            [
                'title' => 'Presensita',
                'description' => 'Aplikasi presensi digital untuk memudahkan pencatatan kehadiran karyawan secara real-time.',
                'image' => 'presensita.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/apps/details?id=com.smartinovasi.presensita',
                'order' => 7
            ],
            [
                'title' => 'E-Logbook Prodi S1 FKUH',
                'description' => 'Platform logbook digital untuk mahasiswa S1 Fakultas Kedokteran untuk mencatat aktivitas akademik dan penelitian.',
                'image' => 'e-logbook-prodi-s1-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/apps/details?id=com.smartinovasi.e_logbook_prodi_s1',
                'order' => 8
            ],
            [
                'title' => 'E-Logbook PPDS-THT FKUH',
                'description' => 'Aplikasi logbook khusus untuk Program Pendidikan Dokter Spesialis THT di FKUH.',
                'image' => 'e-logbook-ppds-tht-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/apps/details?id=com.smartinovasi.e_logbook_ppds_tht',
                'order' => 9
            ],
            [
                'title' => 'E-Logbook PPDS-Urologi FKUH',
                'description' => 'Platform logbook untuk Program Pendidikan Dokter Spesialis Urologi di FKUH.',
                'image' => 'e-logbook-ppds-urologi-fkuh.png',
                'technologies' => ['Flutter'],
                'url' => 'https://play.google.com/store/apps/details?id=com.smartinovasi.e_logbook_ppds_urology',
                'order' => 10
            ],
        ];
        foreach ($projects as $project) \App\Models\Project::create($project);

        // Hero Content
        \App\Models\HeroContent::create([
            'greeting' => 'Hello There!',
            'name' => 'ALDIANSYAH FAHMI',
            'typewriter_texts' => ['Flutter Developer', 'UI/UX Designer', 'Tech Enthusiast']
        ]);

        // About Content
        \App\Models\AboutContent::create([
            'title' => 'Let Me Introduce Myself',
            'paragraphs' => [
                'I am <b class="text-primary">Aldiansyah Fahmi</b>, a Flutter Developer with over 4 years of experience based in Maros, South Sulawesi.',
                'With a background in <b class="text-primary">Informatics Engineering</b>, I specialize in building efficient and innovative mobile applications using <b class="text-primary">Flutter</b>.',
                'I am committed to continuous learning and growth, always seeking ways to improve my skills and deliver high-quality solutions.',
                'Beyond coding, I am passionate about <b class="text-primary">UI/UX Design</b>, ensuring that every application not only functions flawlessly but also offers an intuitive and delightful user experience.'
            ]
        ]);

        // Social Links
        $socialLinks = [
            [
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/aldiansyah99/',
                'icon' => '<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>',
                'order' => 1
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://www.instagram.com/aldiansyahf99/?hl=id',
                'icon' => '<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>',
                'order' => 2
            ],
            [
                'name' => 'GitHub',
                'url' => 'https://github.com/aldiansyahfahmi',
                'icon' => '<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>',
                'order' => 3
            ]
        ];
        foreach ($socialLinks as $link) \App\Models\SocialLink::create($link);

        // Settings
        \App\Models\Setting::set('profile_image', 'profile.jpg');
    }
}
