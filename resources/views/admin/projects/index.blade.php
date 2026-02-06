@extends('admin.layout')

@section('title', 'Manage Projects')

@section('content')
<div class="mb-6 flex justify-end">
    <a href="{{ route('admin.projects.create') }}" class="bg-primary hover:bg-primary-dark text-dark font-bold py-2 px-4 rounded-lg transition-all">
        + Add New Project
    </a>
</div>

<div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-black/40 border-b border-primary/10 text-gray-400 text-sm">
                <th class="px-6 py-4 font-medium uppercase">Image</th>
                <th class="px-6 py-4 font-medium uppercase">Title</th>
                <th class="px-6 py-4 font-medium uppercase">Technologies</th>
                <th class="px-6 py-4 font-medium uppercase">Order</th>
                <th class="px-6 py-4 font-medium uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-primary/5">
            @foreach($projects as $project)
            <tr class="hover:bg-primary/5 transition-colors">
                <td class="px-6 py-4 text-white">
                    <img src="{{ Str::startsWith($project->image, 'http') ? $project->image : asset($project->image) }}" class="w-20 h-12 object-cover rounded-lg bg-black/50 border border-primary/10">
                </td>
                <td class="px-6 py-4 font-medium text-white">{{ $project->title }}</td>
                <td class="px-6 py-4">
                    <div class="flex flex-wrap gap-1">
                        @foreach($project->technologies as $tech)
                        <span class="text-[10px] bg-primary/10 text-primary border border-primary/20 px-2 py-0.5 rounded">{{ $tech }}</span>
                        @endforeach
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-400 font-mono">{{ $project->order }}</td>
                <td class="px-6 py-4">
                    <div class="flex space-x-3">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-400 hover:text-blue-300">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?')">
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
