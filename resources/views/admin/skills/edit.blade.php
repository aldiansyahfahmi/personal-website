@extends('admin.layout')

@section('title', 'Edit Skill/Tool')

@section('content')
<div class="max-w-2xl">
    <div class="glow-card bg-dark-surface border border-primary/20 rounded-2xl p-8">
        <form action="{{ route('admin.skills.update', $skill) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-gray-300 mb-2 font-medium">Name</label>
                <input type="text" name="name" required value="{{ old('name', $skill->name) }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Type</label>
                <select name="type" required class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                    <option value="skill" {{ $skill->type == 'skill' ? 'selected' : '' }}>Skill</option>
                    <option value="tool" {{ $skill->type == 'tool' ? 'selected' : '' }}>Tool</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Icon (Devicon class or SVG)</label>
                <textarea name="icon" rows="3" required
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white font-mono text-sm focus:outline-none focus:border-primary transition-all">{{ old('icon', $skill->icon) }}</textarea>
                <div class="mt-4 p-4 bg-black/40 rounded-lg flex items-center space-x-4">
                    <span class="text-xs text-gray-500">Preview:</span>
                    @if(str_contains($skill->icon, '<svg'))
                        <div class="w-8 h-8 text-primary">{!! $skill->icon !!}</div>
                    @else
                        <i class="{{ $skill->icon }} text-2xl text-primary"></i>
                    @endif
                </div>
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Order</label>
                <input type="number" name="order" value="{{ old('order', $skill->order) }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div class="flex space-x-4 pt-4">
                <button type="submit" class="flex-grow bg-primary hover:bg-primary-dark text-dark font-bold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-primary/20">
                    Update Item
                </button>
                <a href="{{ route('admin.skills.index') }}" class="px-6 py-3 border border-primary/20 text-primary hover:bg-primary/10 rounded-xl transition-all font-bold">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
