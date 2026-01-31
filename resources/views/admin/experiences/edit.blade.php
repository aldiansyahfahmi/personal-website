@extends('admin.layout')

@section('title', 'Edit Experience')

@section('content')
<div class="max-w-3xl">
    <div class="glow-card bg-dark-surface border border-primary/20 rounded-2xl p-8">
        <form action="{{ route('admin.experiences.update', $experience) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Job Title</label>
                    <input type="text" name="title" required value="{{ old('title', $experience->title) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
                
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Company Name</label>
                    <input type="text" name="company" required value="{{ old('company', $experience->company) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Duration</label>
                    <input type="text" name="duration" required value="{{ old('duration', $experience->duration) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
                
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Order</label>
                    <input type="number" name="order" value="{{ old('order', $experience->order) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
            </div>

            <div id="items-container" class="space-y-3">
                <label class="block text-gray-300 font-medium">Responsibilities / Achievements</label>
                @foreach($experience->description ?? [] as $item)
                <div class="flex space-x-2">
                    <input type="text" name="items[]" value="{{ $item['item'] }}" class="flex-grow bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                    <button type="button" onclick="removeItem(this)" class="px-4 py-2 text-red-400 hover:bg-red-500/10 rounded-xl transition-all">✕</button>
                </div>
                @endforeach
                @if(empty($experience->description))
                <div class="flex space-x-2">
                    <input type="text" name="items[]" class="flex-grow bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                    <button type="button" onclick="removeItem(this)" class="px-4 py-2 text-red-400 hover:bg-red-500/10 rounded-xl transition-all">✕</button>
                </div>
                @endif
            </div>
            
            <button type="button" onclick="addItem()" class="text-primary text-sm font-medium hover:underline">+ Add Bullet Point</button>

            <div class="flex space-x-4 pt-4">
                <button type="submit" class="flex-grow bg-primary hover:bg-primary-dark text-dark font-bold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-primary/20">
                    Update Experience
                </button>
                <a href="{{ route('admin.experiences.index') }}" class="px-6 py-3 border border-primary/20 text-primary hover:bg-primary/10 rounded-xl transition-all font-bold">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    function addItem() {
        const container = document.getElementById('items-container');
        const div = document.createElement('div');
        div.className = 'flex space-x-2';
        div.innerHTML = `
            <input type="text" name="items[]" class="flex-grow bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            <button type="button" onclick="removeItem(this)" class="px-4 py-2 text-red-400 hover:bg-red-500/10 rounded-xl transition-all">✕</button>
        `;
        container.appendChild(div);
    }

    function removeItem(btn) {
        if (document.querySelectorAll('#items-container > div').length > 1) {
            btn.parentElement.remove();
        }
    }
</script>
@endsection
