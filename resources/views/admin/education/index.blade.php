@extends('admin.layout')

@section('title', 'Manage Education')

@section('content')
<div class="mb-6 flex justify-end">
    <a href="{{ route('admin.education.create') }}" class="bg-primary hover:bg-primary-dark text-dark font-bold py-2 px-4 rounded-lg transition-all">
        + Add New Item
    </a>
</div>

<div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl overflow-hidden text-sm">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-black/40 border-b border-primary/10 text-gray-400">
                <th class="px-6 py-4 font-medium uppercase">Institution</th>
                <th class="px-6 py-4 font-medium uppercase">Degree</th>
                <th class="px-6 py-4 font-medium uppercase">Duration</th>
                <th class="px-6 py-4 font-medium uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-primary/5 text-white">
            @foreach($education as $edu)
            <tr class="hover:bg-primary/5 transition-colors">
                <td class="px-6 py-4 font-bold">{{ $edu->institution }}</td>
                <td class="px-6 py-4 text-primary">{{ $edu->degree }}</td>
                <td class="px-6 py-4 text-gray-400 font-mono">{{ $edu->duration }}</td>
                <td class="px-6 py-4">
                    <div class="flex space-x-3">
                        <a href="{{ route('admin.education.edit', $edu) }}" class="text-blue-400 hover:text-blue-300">Edit</a>
                        <form action="{{ route('admin.education.destroy', $edu) }}" method="POST" onsubmit="return confirm('Delete this education info?')">
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
