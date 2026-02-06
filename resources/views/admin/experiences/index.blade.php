@extends('admin.layout')

@section('title', 'Manage Experience')

@section('content')
<div class="mb-6 flex justify-end">
    <a href="{{ route('admin.experiences.create') }}" class="bg-primary hover:bg-primary-dark text-dark font-bold py-2 px-4 rounded-lg transition-all">
        + Add New Experience
    </a>
</div>

<div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-black/40 border-b border-primary/10 text-gray-400 text-sm">
                <th class="px-6 py-4 font-medium uppercase">Role & Company</th>
                <th class="px-6 py-4 font-medium uppercase">Duration</th>
                <th class="px-6 py-4 font-medium uppercase">Order</th>
                <th class="px-6 py-4 font-medium uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-primary/5">
            @foreach($experiences as $exp)
            <tr class="hover:bg-primary/5 transition-colors">
                <td class="px-6 py-4">
                    <div class="text-white font-bold">{{ $exp->title }}</div>
                    <div class="text-primary text-sm">{{ $exp->company }}</div>
                </td>
                <td class="px-6 py-4 text-gray-400 text-sm">{{ $exp->duration }}</td>
                <td class="px-6 py-4 text-gray-400 font-mono text-sm">{{ $exp->order }}</td>
                <td class="px-6 py-4">
                    <div class="flex space-x-3">
                        <a href="{{ route('admin.experiences.edit', $exp) }}" class="text-blue-400 hover:text-blue-300">Edit</a>
                        <form action="{{ route('admin.experiences.destroy', $exp) }}" method="POST" onsubmit="return confirm('Delete this experience?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
