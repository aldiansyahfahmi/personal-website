@extends('admin.layout')

@section('title', 'Social Links')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold text-white">Social Links</h2>
    <a href="{{ route('admin.social-links.create') }}" class="bg-primary text-dark font-bold py-2 px-6 rounded-lg hover:shadow-[0_0_15px_rgba(74,222,128,0.3)] transition-all">
        + Add New
    </a>
</div>

<div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-black/40 text-primary uppercase text-xs font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">Order</th>
                    <th class="px-6 py-4">Icon</th>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">URL</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-primary/5">
                @foreach($links as $link)
                <tr class="hover:bg-primary/5 transition-colors">
                    <td class="px-6 py-4 text-gray-300">{{ $link->order }}</td>
                    <td class="px-6 py-4 text-white">
                        <div class="w-8 h-8 text-primary">
                            {!! $link->icon !!}
                        </div>
                    </td>
                    <td class="px-6 py-4 text-white font-medium">{{ $link->name }}</td>
                    <td class="px-6 py-4 text-gray-400 text-sm truncate max-w-xs">{{ $link->url }}</td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <a href="{{ route('admin.social-links.edit', $link->id) }}" class="text-blue-400 hover:text-blue-300 transition-colors">Edit</a>
                        <form action="{{ route('admin.social-links.destroy', $link->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-300 transition-colors">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
