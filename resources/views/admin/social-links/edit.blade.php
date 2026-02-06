@extends('admin.layout')

@section('title', 'Edit Social Link')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('admin.social-links.index') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to List
        </a>
    </div>

    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-6">Edit Social Link</h2>
        
        <form action="{{ route('admin.social-links.update', $socialLink->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="space-y-2">
                <label for="name" class="text-gray-300 text-sm font-medium">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $socialLink->name) }}" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors">
            </div>

            <div class="space-y-2">
                <label for="url" class="text-gray-300 text-sm font-medium">URL</label>
                <input type="url" name="url" id="url" value="{{ old('url', $socialLink->url) }}" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors">
            </div>

            <div class="space-y-2">
                <label for="icon" class="text-gray-300 text-sm font-medium">Icon (SVG or FontAwesome Class)</label>
                <textarea name="icon" id="icon" rows="4" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors font-mono text-sm placeholder-gray-600" placeholder='<svg ...>...</svg> or <i class="fab fa-github"></i>'>{{ old('icon', $socialLink->icon) }}</textarea>
                <p class="text-xs text-gray-500">Paste raw SVG code here for best results.</p>
            </div>

            <div class="space-y-2">
                <label for="order" class="text-gray-300 text-sm font-medium">Order</label>
                <input type="number" name="order" id="order" value="{{ old('order', $socialLink->order) }}" class="w-full bg-black/40 border border-primary/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary/50 transition-colors">
            </div>

            <div class="pt-4 flex justify-end">
                <button type="submit" class="bg-primary text-dark font-bold py-3 px-8 rounded-full hover:shadow-[0_0_20px_rgba(74,222,128,0.4)] transition-all transform hover:-translate-y-1">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
