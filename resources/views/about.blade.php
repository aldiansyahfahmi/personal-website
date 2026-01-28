@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-16">
    
    <!-- Know Who I Am -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-24">
        <div class="order-2 md:order-1">
            <h1 class="text-4xl font-bold text-white mb-8 text-center md:text-left">
                Know Who <span class="text-primary">I'M</span>
            </h1>
            <div class="text-gray-300 text-lg leading-relaxed space-y-4 text-justify">
                <p>
                    Hi Everyone, I am <span class="text-primary">Aldiansyah Fahmi</span> from <span class="text-primary">Maros, South Sulawesi</span>.
                    I am currently working as a Flutter Developer.
                </p>
                <p>
                    I have over 5 years of experience and specialize in building efficient, user-friendly mobile applications.
                </p>
            </div>
        </div>
        
        <!-- Illustration -->
        <div class="order-1 md:order-2 flex justify-center">
             <div class="relative w-72 h-72 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-primary/50 shadow-[0_0_30px_rgba(74,222,128,0.3)] animate-[float_6s_ease-in-out_infinite]">
                 <img src="{{ asset('profile.jpg') }}" alt="Aldiansyah Fahmi" class="w-full h-full object-cover">
             </div>
        </div>
    </div>

    <!-- Professional Skillset -->
    <div class="mb-24">
        <h1 class="text-4xl font-bold text-white mb-12 text-center">
            Professional <span class="text-primary">Skillset</span>
        </h1>
        
        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 justify-center">
            
            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-dart-plain text-5xl text-blue-500 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Dart</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-flutter-plain text-5xl text-blue-400 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Flutter</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-firebase-plain text-5xl text-yellow-500 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Firebase</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <!-- Using a generic design icon for UI/UX since no direct devicon exists -->
                 <svg class="h-12 w-12 text-pink-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
                <span class="text-lg font-medium text-gray-300">UI/UX</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-git-plain text-5xl text-red-500 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Git</span>
            </div>

        </div>
    </div>

    <!-- Tools -->
    <div class="mb-24">
        <h1 class="text-4xl font-bold text-white mb-12 text-center">
            <span class="text-primary">Tools</span> I use
        </h1>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 justify-center">
            
            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-vscode-plain text-5xl text-blue-500 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">VS Code</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-androidstudio-plain text-5xl text-green-400 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Android Studio</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-xcode-plain text-5xl text-blue-500 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Xcode</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-postman-plain text-5xl text-orange-500 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Postman</span>
            </div>

            <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                <i class="devicon-figma-plain text-5xl text-pink-500 mb-2"></i>
                <span class="text-lg font-medium text-gray-300">Figma</span>
            </div>

        </div>
    </div>



</div>
    <!-- Experience -->
    <div class="mb-24">
        <h1 class="text-4xl font-bold text-white mb-12 text-center">
            My <span class="text-primary">Experience</span>
        </h1>
        
        <div class="flex justify-center">
            <div class="w-full max-w-4xl relative">
                <!-- Timeline Line -->
                <div class="absolute left-0 md:left-1/2 min-h-full w-1 bg-primary/20 transform -translate-x-1/2"></div>
                
                <!-- Experience Item 2 (New, Top) -->
                <div class="relative mb-12">
                     <div class="flex flex-col md:flex-row items-center w-full">
                        <div class="w-full md:w-1/2 p-6 md:pr-12 order-2 md:order-1"></div>
                        
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-black border-4 border-primary rounded-full z-10 order-1 md:order-2 mb-4 md:mb-0"></div>
                        
                        <div class="w-full md:w-1/2 p-6 md:pl-12 text-center md:text-left order-3">
                            <h3 class="text-2xl font-bold text-white">IT Staff</h3>
                            <h4 class="text-primary text-xl font-medium mb-2">PT. Barakah Niaga Semen</h4>
                             <p class="text-gray-400 mb-4 font-mono text-sm">2024 - Present</p>
                             <ul class="text-gray-300 space-y-2 text-base list-none">
                                <li>Designed UI/UX using Figma</li>
                                <li>Built applications from scratch using Flutter</li>
                                <li>Fixed bugs and maintained applications</li>
                                <li>Deployed apps to Play Store and App Store</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Experience Item 1 -->
                <div class="relative mb-12">
                    <div class="flex flex-col md:flex-row items-center w-full">
                        <div class="w-full md:w-1/2 p-6 md:pr-12 text-center md:text-right order-2 md:order-1">
                            <h3 class="text-2xl font-bold text-white">Flutter Developer</h3>
                            <h4 class="text-primary text-xl font-medium mb-2">Smart Inovasi</h4>
                             <p class="text-gray-400 mb-4 font-mono text-sm">2020 - Present</p>
                             <ul class="text-gray-300 space-y-2 text-base list-none">
                                <li>Designed UI/UX using Figma</li>
                                <li>Created app prototypes in Figma</li>
                                <li>Built applications from scratch using Flutter</li>
                                <li>Fixed bugs and maintained applications</li>
                                <li>Deployed apps to Play Store and App Store</li>
                            </ul>
                        </div>
                        
                        <!-- Timeline Dot -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-black border-4 border-primary rounded-full z-10 order-1 md:order-2 mb-4 md:mb-0"></div>
                        
                        <div class="w-full md:w-1/2 p-6 md:pl-12 order-3"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Education -->
    <div class="mb-10">
        <h1 class="text-4xl font-bold text-white mb-12 text-center">
            My <span class="text-primary">Education</span>
        </h1>
        
         <div class="flex justify-center">
            <div class="w-full max-w-4xl grid grid-cols-1 gap-8">
                
                <div class="glow-card bg-black/40 border border-t-[1px] border-primary/30 rounded-xl p-8 flex flex-col md:flex-row items-center justify-between hover:bg-black/60 transition-all">
                    <div class="mb-4 md:mb-0 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-white mb-1">Universitas Teknologi Akba Makassar (UNITAMA)</h3>
                        <p class="text-lg text-primary">Informatics Engineering</p>
                    </div>
                    <div class="text-center md:text-right">
                         <span class="inline-block bg-primary/10 text-primary border border-primary/20 px-4 py-2 rounded-full font-mono text-sm font-bold">
                            2018 - 2021
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>
@endsection
