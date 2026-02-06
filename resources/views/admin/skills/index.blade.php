@extends('admin.layout')

@section('title', 'Manage Skills & Tools')

@section('content')
<div class="mb-6 flex justify-end">
    <a href="{{ route('admin.skills.create') }}" class="bg-primary hover:bg-primary-dark text-dark font-bold py-2 px-4 rounded-lg transition-all">
        + Add New Item
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Skills -->
    <div class="space-y-4">
        <h3 class="text-xl font-bold text-white">Skills</h3>
        <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl overflow-hidden">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-black/40 border-b border-primary/10 text-gray-400">
                        <th class="px-6 py-4 font-medium uppercase">Icon</th>
                        <th class="px-6 py-4 font-medium uppercase">Name</th>
                        <th class="px-6 py-4 font-medium uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-primary/5">
                    @foreach($skills as $skill)
                    <tr class="hover:bg-primary/5 transition-colors">
                        <td class="px-6 py-4">
                            @if(str_contains($skill->icon, '<svg'))
                                <div class="w-8 h-8 opacity-50">{!! $skill->icon !!}</div>
                            @else
                                <i class="{{ $skill->icon }} text-xl text-primary"></i>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-white uppercase">{{ $skill->name }}</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-3">
                                <a href="{{ route('admin.skills.edit', $skill) }}" class="text-blue-400 hover:text-blue-300">Edit</a>
                                <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Delete this skill?')">
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
    </div>

    <!-- Tools -->
    <div class="space-y-4">
        <h3 class="text-xl font-bold text-white">Tools</h3>
        <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl overflow-hidden">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-black/40 border-b border-primary/10 text-gray-400">
                        <th class="px-6 py-4 font-medium uppercase">Icon</th>
                        <th class="px-6 py-4 font-medium uppercase">Name</th>
                        <th class="px-6 py-4 font-medium uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-primary/5">
                    @foreach($tools as $tool)
                    <tr class="hover:bg-primary/5 transition-colors">
                        <td class="px-6 py-4">
                            @if(str_contains($tool->icon, '<svg'))
                                <div class="w-8 h-8 opacity-50">{!! $tool->icon !!}</div>
                            @else
                                <i class="{{ $tool->icon }} text-xl text-primary"></i>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-white uppercase">{{ $tool->name }}</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-3">
                                <a href="{{ route('admin.skills.edit', $tool) }}" class="text-blue-400 hover:text-blue-300">Edit</a>
                                <form action="{{ route('admin.skills.destroy', $tool) }}" method="POST" onsubmit="return confirm('Delete this tool?')">
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
    </div>
</div>
@endsection
