@extends('admin.layout')

@section('title', 'Edit Education Item')

@section('content')
<div class="max-w-2xl">
    <div class="glow-card bg-dark-surface border border-primary/20 rounded-2xl p-8">
        <form action="{{ route('admin.education.update', $education) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-gray-300 mb-2 font-medium">Institution</label>
                <input type="text" name="institution" required value="{{ old('institution', $education->institution) }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div>
                <label class="block text-gray-300 mb-2 font-medium">Degree / Field of Study</label>
                <input type="text" name="degree" required value="{{ old('degree', $education->degree) }}"
                    class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Duration</label>
                    <input type="text" name="duration" required value="{{ old('duration', $education->duration) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
                <div>
                    <label class="block text-gray-300 mb-2 font-medium">Order</label>
                    <input type="number" name="order" value="{{ old('order', $education->order) }}"
                        class="w-full bg-black/50 border border-primary/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
            </div>

            <div class="flex space-x-4 pt-4">
                <button type="submit" class="flex-grow bg-primary hover:bg-primary-dark text-dark font-bold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-primary/20">
                    Update Education
                </button>
                <a href="{{ route('admin.education.index') }}" class="px-6 py-3 border border-primary/20 text-primary hover:bg-primary/10 rounded-xl transition-all font-bold">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
