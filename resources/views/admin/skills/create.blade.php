@extends('admin.layout')

@section('title', 'Add New Skill/Tool')

@section('content')
<div class="max-w-2xl">
    <div class="glow-card bg-dark-surface border border-primary/20 rounded-2xl p-8">
        <form action="{{ route('admin.skills.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-gray-300 mb-2 font-medium">Name</label>
                <input type="text" name="name" required value="{{ old('name') }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Type</label>
                <select name="type" required class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                    <option value="skill">Skill</option>
                    <option value="tool">Tool</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Icon (Devicon class or SVG)</label>
                <textarea name="icon" rows="3" required
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white font-mono text-sm focus:outline-none focus:border-primary transition-all"
                    placeholder="devicon-flutter-plain OR <svg..."></textarea>
                <p class="text-xs text-gray-500 mt-2">Use Devicon classes from Devicon.net or paste raw SVG code.</p>
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Order</label>
                <input type="number" name="order" value="{{ old('order', 0) }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div class="flex space-x-4 pt-4">
                <button type="submit" class="flex-grow bg-primary hover:bg-primary-dark text-dark font-bold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-primary/20">
                    Save Item
                </button>
                <a href="{{ route('admin.skills.index') }}" class="px-6 py-3 border border-primary/20 text-primary hover:bg-primary/10 rounded-xl transition-all font-bold">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
