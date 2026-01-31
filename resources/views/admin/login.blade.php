<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aldev Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-white font-sans flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full px-6">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-primary mb-2">Aldev();</h1>
            <p class="text-gray-400">Admin Authentication</p>
        </div>

        <div class="glow-card bg-dark-surface border border-primary/20 rounded-2xl p-8 shadow-2xl">
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-300 mb-2 font-medium" for="email">Email Address</label>
                    <input type="email" name="email" id="email" required 
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all"
                        placeholder="admin@example.com">
                    @error('email')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-300 mb-2 font-medium" for="password">Password</label>
                    <input type="password" name="password" id="password" required 
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="w-4 h-4 rounded border-primary/20 bg-black/50 text-primary focus:ring-primary/20">
                    <label for="remember" class="ml-2 text-sm text-gray-400">Remember me</label>
                </div>

                <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-dark font-bold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-primary/20">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</body>
</html>
