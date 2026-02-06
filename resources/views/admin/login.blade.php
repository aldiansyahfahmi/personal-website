<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aldev Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-white font-sans flex items-center justify-center min-h-screen relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px]"></div>
    </div>

    <div class="max-w-md w-full px-6 relative z-10">
        <div class="text-center mb-10">
            <h1 class="text-5xl font-bold text-primary mb-2 tracking-tight drop-shadow-lg">Aldev();</h1>
            <p class="text-gray-400 text-lg">Admin Authentication</p>
        </div>

        <div class="glow-card bg-black/60 backdrop-blur-xl border border-primary/20 rounded-2xl p-10 shadow-2xl relative overflow-hidden group">
            <!-- Subtle border glow animation -->
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-primary/5 to-transparent -translate-x-full group-hover:animate-[shimmer_2s_infinite]"></div>

            <form action="{{ route('login') }}" method="POST" class="space-y-6 relative z-10">
                @csrf
                <div>
                    <label class="block text-gray-300 mb-2 font-medium ml-1" for="email">Email Address</label>
                    <div class="relative group/input">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500 group-focus-within/input:text-primary transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <input type="email" name="email" id="email" required autocomplete="username"
                            class="w-full bg-black/40 border border-primary/20 rounded-xl pl-12 pr-4 py-3.5 text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/50 transition-all font-light"
                            placeholder="admin@example.com" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <p class="text-red-400 text-sm mt-2 ml-1 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-300 mb-2 font-medium ml-1" for="password">Password</label>
                    <div class="relative group/input">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500 group-focus-within/input:text-primary transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input type="password" name="password" id="password" required autocomplete="current-password"
                            class="w-full bg-black/40 border border-primary/20 rounded-xl pl-12 pr-4 py-3.5 text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/50 transition-all font-light"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="w-4 h-4 rounded border-primary/30 bg-black/40 text-primary focus:ring-primary/20 focus:ring-offset-0 cursor-pointer">
                        <label for="remember" class="ml-2 text-sm text-gray-400 cursor-pointer select-none hover:text-white transition-colors">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="group w-full bg-gradient-to-r from-primary via-primary to-primary-dark text-black font-bold py-3.5 px-6 rounded-xl transition-all shadow-[0_0_20px_rgba(74,222,128,0.2)] hover:shadow-[0_0_30px_rgba(74,222,128,0.4)] hover:scale-[1.02] active:scale-[0.98]">
                    <span class="flex items-center justify-center">
                        Sign In
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </button>
            </form>
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('home') }}" class="text-gray-500 hover:text-primary transition-colors text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Website
            </a>
        </div>
    </div>
</body>
</html>
