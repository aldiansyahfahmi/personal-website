<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Personal Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-white font-sans overflow-x-hidden">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-dark-surface border-r border-primary/10 flex flex-col">
            <div class="p-6">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-primary">Aldev();</a>
            </div>
            
            <nav class="flex-grow px-4 space-y-2 mt-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-primary/10 transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-primary/20 text-primary' : 'text-gray-400' }}">
                    <span class="mr-3">📊</span> Dashboard
                </a>
                <a href="{{ route('admin.projects.index') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-primary/10 transition-all {{ request()->routeIs('admin.projects.*') ? 'bg-primary/20 text-primary' : 'text-gray-400' }}">
                    <span class="mr-3">💻</span> Projects
                </a>
                <a href="{{ route('admin.experiences.index') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-primary/10 transition-all {{ request()->routeIs('admin.experiences.*') ? 'bg-primary/20 text-primary' : 'text-gray-400' }}">
                    <span class="mr-3">💼</span> Experience
                </a>
                <a href="{{ route('admin.skills.index') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-primary/10 transition-all {{ request()->routeIs('admin.skills.*') ? 'bg-primary/20 text-primary' : 'text-gray-400' }}">
                    <span class="mr-3">🛠️</span> Skills & Tools
                </a>
                <a href="{{ route('admin.education.index') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-primary/10 transition-all {{ request()->routeIs('admin.education.*') ? 'bg-primary/20 text-primary' : 'text-gray-400' }}">
                    <span class="mr-3">🎓</span> Education
                </a>
            </nav>

            <div class="p-4 border-t border-primary/10">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-lg transition-all">
                        <span class="mr-3">🚪</span> Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-white">@yield('title', 'Dashboard')</h1>
                <div class="text-sm text-gray-400">
                    Welcome back, <span class="text-primary font-medium">{{ Auth::user()->name }}</span>
                </div>
            </header>

            @if(session('success'))
            <div class="mb-6 p-4 bg-green-500/10 border border-green-500/30 text-green-400 rounded-lg">
                {{ session('success') }}
            </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
