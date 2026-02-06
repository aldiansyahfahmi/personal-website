@extends('admin.layout')

@section('title', 'Manage Hero Section')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-6">Edit Hero Content</h2>
        
        <form action="{{ route('admin.hero.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="space-y-2">
                <label for="greeting" class="text-gray-300 text-sm font-medium">Greeting</label>
                <input type="text" name="greeting" id="greeting" value="{{ old('greeting', $hero->greeting) }}" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors">
            </div>

            <div class="space-y-2">
                <label for="name" class="text-gray-300 text-sm font-medium">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $hero->name) }}" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors">
            </div>

            <div class="space-y-4">
                <label class="text-gray-300 text-sm font-medium">Typewriter Texts</label>
                <div id="typewriter-container" class="space-y-3">
                    @foreach(old('typewriter_texts', $hero->typewriter_texts ?? []) as $index => $text)
                    <div class="flex gap-2 items-center group">
                        <input type="text" name="typewriter_texts[]" value="{{ $text }}" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors">
                        <button type="button" class="text-red-400 hover:text-red-300 p-2 opacity-50 group-hover:opacity-100 transition-opacity" onclick="this.parentElement.remove()">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                    @endforeach
                </div>
                <button type="button" onclick="addTypewriterParams()" class="text-primary text-sm font-medium hover:underline">+ Add Text</button>
            </div>

            <div class="pt-4 flex justify-end">
                <button type="submit" class="bg-primary text-dark font-bold py-3 px-8 rounded-full hover:shadow-[0_0_20px_rgba(74,222,128,0.4)] transition-all transform hover:-translate-y-1">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function addTypewriterParams() {
    const container = document.getElementById('typewriter-container');
    const div = document.createElement('div');
    div.className = 'flex gap-2 items-center group';
    div.innerHTML = `
        <input type="text" name="typewriter_texts[]" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors" placeholder="New text...">
        <button type="button" class="text-red-400 hover:text-red-300 p-2 opacity-100 transition-opacity" onclick="this.parentElement.remove()">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
        </button>
    `;
    container.appendChild(div);
}
</script>
@endsection
