@extends('admin.layout')

@section('title', 'Edit Project')

@section('content')
<div class="max-w-3xl">
    <div class="glow-card bg-dark-surface border border-primary/20 rounded-2xl p-8">
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Project Title</label>
                    <input type="text" name="title" required value="{{ old('title', $project->title) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
                
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Order</label>
                    <input type="number" name="order" value="{{ old('order', $project->order) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Description</label>
                <textarea name="description" rows="4"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">{{ old('description', $project->description) }}</textarea>
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">URL</label>
                <input type="url" name="url" value="{{ old('url', $project->url) }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Technologies (comma separated)</label>
                <input type="text" name="technologies" value="{{ old('technologies', implode(', ', $project->technologies)) }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Project Image</label>
                @if($project->image)
                <div class="mb-4">
                    <img src="{{ Str::startsWith($project->image, 'http') ? $project->image : asset('storage/' . $project->image) }}" class="w-40 h-24 object-cover rounded-lg border border-primary/20">
                    <p class="text-xs text-gray-500 mt-1">Current Image</p>
                </div>
                @endif
                <input type="file" name="image_file" 
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div class="flex space-x-4 pt-4">
                <button type="submit" class="flex-grow bg-primary hover:bg-primary-dark text-dark font-bold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-primary/20">
                    Update Project
                </button>
                <a href="{{ route('admin.projects.index') }}" class="px-6 py-3 border border-primary/20 text-primary hover:bg-primary/10 rounded-xl transition-all font-bold">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
