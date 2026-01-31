@extends('admin.layout')

@section('title', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Projects Stat -->
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="p-3 bg-primary/10 rounded-xl text-primary text-2xl">💻</div>
            <div class="text-sm text-gray-400 font-medium">Projects</div>
        </div>
        <div class="text-3xl font-bold text-white">{{ $stats['projects'] }}</div>
        <div class="text-xs text-gray-500 mt-1">Total works published</div>
    </div>

    <!-- Experiences Stat -->
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="p-3 bg-blue-500/10 rounded-xl text-blue-400 text-2xl">💼</div>
            <div class="text-sm text-gray-400 font-medium">Experience</div>
        </div>
        <div class="text-3xl font-bold text-white">{{ $stats['experiences'] }}</div>
        <div class="text-xs text-gray-500 mt-1">Companies worked with</div>
    </div>

    <!-- Skills Stat -->
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="p-3 bg-yellow-500/10 rounded-xl text-yellow-500 text-2xl">🛠️</div>
            <div class="text-sm text-gray-400 font-medium">Skills</div>
        </div>
        <div class="text-3xl font-bold text-white">{{ $stats['skills'] }}</div>
        <div class="text-xs text-gray-500 mt-1">Technical expertises</div>
    </div>

    <!-- Tools Stat -->
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="p-3 bg-pink-500/10 rounded-xl text-pink-400 text-2xl">⚙️</div>
            <div class="text-sm text-gray-400 font-medium">Tools</div>
        </div>
        <div class="text-3xl font-bold text-white">{{ $stats['tools'] }}</div>
        <div class="text-xs text-gray-500 mt-1">Development tools</div>
    </div>
</div>

<div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-8">
        <h3 class="text-xl font-bold text-white mb-6">Quick Actions</h3>
        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('admin.projects.create') }}" class="p-4 bg-black/40 border border-primary/10 rounded-xl hover:border-primary/50 transition-all text-center group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">➕</div>
                <div class="text-sm text-gray-300">Add Project</div>
            </a>
            <a href="{{ route('admin.experiences.create') }}" class="p-4 bg-black/40 border border-primary/10 rounded-xl hover:border-primary/50 transition-all text-center group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📝</div>
                <div class="text-sm text-gray-300">Add Experience</div>
            </a>
        </div>
    </div>
    
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-8">
        <h3 class="text-xl font-bold text-white mb-6">System Status</h3>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-black/20 rounded-lg">
                <span class="text-gray-400">Environment</span>
                <span class="text-primary font-mono">{{ app()->environment() }}</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-black/20 rounded-lg">
                <span class="text-gray-400">Laravel Version</span>
                <span class="text-primary font-mono">{{ app()->version() }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
