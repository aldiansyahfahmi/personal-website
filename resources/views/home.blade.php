@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center pt-20 pb-20 overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <!-- Text Content -->
            <div class="space-y-6 z-10">
                <h2 class="text-4xl text-gray-100 font-medium">{{ $hero->greeting }} <span class="animate-pulse">👋🏻</span></h2>
                <h1 class="text-6xl md:text-7xl font-bold text-white tracking-tight">
                    I'M <span class="text-primary">{{ $hero->name }}</span>
                </h1>
                
                <div class="text-3xl md:text-4xl text-primary font-bold min-h-[60px] flex items-center">
                    <span id="typewriter-text" data-phrases="{{ json_encode($hero->typewriter_texts) }}" class="border-r-4 border-primary pr-2 animate-pulse"></span>
                </div>

                <div class="pt-8 flex gap-4">
                     @foreach($socialLinks as $link)
                     <a href="{{ $link->url }}" target="_blank" class="bg-white/10 text-white hover:bg-primary hover:text-white rounded-full p-3 transition-all transform hover:-translate-y-1">
                        <span class="sr-only">{{ $link->name }}</span>
                        <div class="w-6 h-6">
                            {!! $link->icon !!}
                        </div>
                     </a>
                     @endforeach
                </div>
            </div>

            <!-- Illustration -->
            <div class="relative z-10 flex justify-center">
                <div class="relative w-80 h-80 md:w-96 md:h-96">
                    <!-- Glow effect behind -->
                    <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full"></div>
                    
                    <!-- Profile Image -->
                    <div class="relative w-full h-full rounded-full overflow-hidden border-4 border-primary/50 shadow-[0_0_30px_rgba(74,222,128,0.3)] animate-[float_6s_ease-in-out_infinite]">
                        <img src="{{ Str::startsWith($profileImage, 'http') ? $profileImage : asset('storage/' . $profileImage) }}" alt="{{ $hero->name }}" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about" class="py-20 relative">
    <div class="container mx-auto px-4">

            <div class="mb-24 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
            <h2 class="text-4xl font-bold text-white mb-10 text-center uppercase tracking-wider">
                {!! str_replace(['Introduce', 'INTRODUCE'], '<span class="text-primary">Introduce</span>', $about->title) !!}
            </h2>
            
            <div class="space-y-6 text-lg text-gray-300 leading-relaxed">
                @foreach($about->paragraphs as $paragraph)
                <p>{!! $paragraph !!}</p>
                @endforeach
            </div>
            
            <!-- Find Me On -->
            <div class="mt-20 text-center">
                <h3 class="text-2xl font-bold text-white mb-4">FIND ME ON</h3>
                <p class="text-gray-400 mb-6">Feel free to <span class="text-primary">connect</span> with me</p>
                
                <div class="flex justify-center space-x-6">
                    @foreach($socialLinks as $link)
                    <a href="{{ $link->url }}" target="_blank" class="bg-white text-dark rounded-full p-3 hover:bg-primary hover:text-white transition-all transform hover:-translate-y-1">
                        <span class="sr-only">{{ $link->name }}</span>
                        <div class="w-6 h-6">
                            {!! $link->icon !!}
                        </div>
                    </a>
                    @endforeach
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
                @foreach($skills as $skill)
                <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                    @if(str_contains($skill->icon, '<svg'))
                        {!! $skill->icon !!}
                    @else
                        <i class="{{ $skill->icon }} text-5xl mb-2"></i>
                    @endif
                    <span class="text-lg font-medium text-gray-300">{{ $skill->name }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools -->
        <div class="mb-24">
            <h1 class="text-4xl font-bold text-white mb-12 text-center">
                <span class="text-primary">Tools</span> I use
            </h1>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 justify-center">
                @foreach($tools as $tool)
                <div class="glow-card bg-black/40 border border-primary/20 rounded-lg p-4 flex flex-col items-center justify-center hover:border-primary/60 transition-colors h-32">
                    @if(str_contains($tool->icon, '<svg'))
                        {!! $tool->icon !!}
                    @else
                        <i class="{{ $tool->icon }} text-5xl mb-2"></i>
                    @endif
                    <span class="text-lg font-medium text-gray-300">{{ $tool->name }}</span>
                </div>
                @endforeach
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
                    
                    @foreach($experiences as $index => $experience)
                    <div class="relative mb-12">
                         <div class="flex flex-col md:flex-row items-center w-full">
                            
                            <!-- Left Content Space -->
                            <div class="w-full md:w-1/2 p-6 md:pr-12 {{ $index % 2 == 0 ? 'order-2 md:order-1' : 'text-center md:text-right order-2 md:order-1' }}">
                                @if($index % 2 != 0)
                                    <h3 class="text-2xl font-bold text-white">{{ $experience->title }}</h3>
                                    <h4 class="text-primary text-xl font-medium mb-2">{{ $experience->company }}</h4>
                                    <p class="text-gray-400 mb-4 font-mono text-sm">{{ $experience->duration }}</p>
                                    <ul class="text-gray-300 space-y-2 text-base list-none">
                                        @foreach($experience->description ?? [] as $item)
                                        <li>{{ $item['item'] }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            
                            <!-- Timeline Dot -->
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-8 h-8 bg-black border-4 border-primary rounded-full z-10 order-1 md:order-2 mb-4 md:mb-0"></div>
                            
                            <!-- Right Content Space -->
                            <div class="w-full md:w-1/2 p-6 md:pl-12 {{ $index % 2 == 0 ? 'text-center md:text-left order-3' : 'order-3' }}">
                                @if($index % 2 == 0)
                                    <h3 class="text-2xl font-bold text-white">{{ $experience->title }}</h3>
                                    <h4 class="text-primary text-xl font-medium mb-2">{{ $experience->company }}</h4>
                                    <p class="text-gray-400 mb-4 font-mono text-sm">{{ $experience->duration }}</p>
                                    <ul class="text-gray-300 space-y-2 text-base list-none">
                                        @foreach($experience->description ?? [] as $item)
                                        <li>{{ $item['item'] }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach($education as $edu)
                    <div class="glow-card bg-black/40 border border-t-[1px] border-primary/30 rounded-xl p-8 flex flex-col md:flex-row items-center justify-between hover:bg-black/60 transition-all">
                        <div class="mb-4 md:mb-0 text-center md:text-left">
                            <h3 class="text-2xl font-bold text-white mb-1">{{ $edu->institution }}</h3>
                            <p class="text-lg text-primary">{{ $edu->degree }}</p>
                        </div>
                        <div class="text-center md:text-right">
                             <span class="inline-block bg-primary/10 text-primary border border-primary/20 px-4 py-2 rounded-full font-mono text-sm font-bold">
                                {{ $edu->duration }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 relative">
    <div class="container mx-auto px-4">
        
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white mb-4">
                My Recent <span class="text-primary">Works</span>
            </h1>
            <p class="text-gray-400">Here are a few projects I've worked on recently.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($projects as $project)
             <div class="glow-card bg-black/40 border border-primary/20 rounded-xl overflow-hidden shadow-lg flex flex-col h-full">
                <div class="overflow-hidden bg-white">
                    <img src="{{ Str::startsWith($project->image, 'http') ? $project->image : asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                        @if($project->url && $project->url !== '')
                            <a href="{{ $project->url }}" target="_blank" class="group/title block">
                                <h3 class="text-xl font-bold text-white mb-3 text-center group-hover/title:text-primary transition-colors flex items-center justify-center gap-2">
                                    {{ $project->title }}
                                    <svg class="w-4 h-4 opacity-70 group-hover/title:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </h3>
                            </a>
                        @else
                            <h3 class="text-xl font-bold text-white mb-3 text-center group-hover:text-primary transition-colors">{{ $project->title }}</h3>
                        @endif

                        <p class="text-gray-400 text-sm mb-6 text-center flex-grow">
                            {{ $project->description }}
                        </p>
                        <div class="flex flex-col gap-4 mt-auto">
                            <div class="flex flex-wrap justify-center gap-2">
                                @foreach($project->technologies ?? [] as $tech)
                                <span class="text-primary text-xs border border-primary/50 px-2 py-1 rounded">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
