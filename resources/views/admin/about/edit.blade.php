@extends('admin.layout')

@section('title', 'Manage About Section')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-6">Edit About Content</h2>
        
        <form action="{{ route('admin.about.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="space-y-2">
                <label for="title" class="text-gray-300 text-sm font-medium">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $about->title) }}" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors">
                <p class="text-xs text-gray-500">Use 'Keep 'Introduction' word for automated styling if applicable.</p>
            </div>

            <div class="space-y-4">
                <label class="text-gray-300 text-sm font-medium">Paragraphs</label>
                <div id="paragraphs-container" class="space-y-6">
                    @foreach(old('paragraphs', $about->paragraphs ?? []) as $index => $paragraph)
                    <div class="relative group">
                        <textarea name="paragraphs[]" rows="3" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors font-mono text-sm">{{ $paragraph }}</textarea>
                        <button type="button" class="absolute top-2 right-2 text-red-400 hover:text-red-300 p-1 opacity-50 group-hover:opacity-100 transition-opacity" onclick="this.parentElement.remove()">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                    @endforeach
                </div>
                <button type="button" onclick="addParagraph()" class="text-primary text-sm font-medium hover:underline">+ Add Paragraph</button>
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
function addParagraph() {
    const container = document.getElementById('paragraphs-container');
    const div = document.createElement('div');
    div.className = 'relative group';
    div.innerHTML = `
        <textarea name="paragraphs[]" rows="3" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors font-mono text-sm" placeholder="Write new paragraph... HTML tags allowed (e.g., <b></b>)"></textarea>
        <button type="button" class="absolute top-2 right-2 text-red-400 hover:text-red-300 p-1 opacity-100 transition-opacity" onclick="this.parentElement.remove()">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    `;
    container.appendChild(div);
}
</script>
@endsection
