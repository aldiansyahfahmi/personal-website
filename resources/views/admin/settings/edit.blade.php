@extends('admin.layout')

@section('title', 'Site Settings')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="glow-card bg-dark-surface border border-primary/10 rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-white mb-6">Site Settings</h2>
        
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="space-y-4">
                <label class="text-gray-300 text-sm font-medium">Profile Image</label>
                
                <div class="flex items-center gap-6">
                    <div class="relative w-24 h-24 rounded-full overflow-hidden border-2 border-primary/50">
                        @php
                            $profileImage = \App\Models\Setting::get('profile_image', 'profile.jpg');
                            $imageSrc = Str::startsWith($profileImage, 'http') ? $profileImage : asset('storage/public/' . $profileImage);
                        @endphp
                        <img src="{{ $imageSrc }}" alt="Current Profile" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="flex-1">
                        <input type="file" name="profile_image" id="profile_image" accept="image/*" class="w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer">
                        <p class="text-xs text-gray-500 mt-2">Recommended: Square image, max 2MB.</p>
                    </div>
                </div>
            </div>

            <!-- Add more settings here in the future -->

            <div class="pt-4 flex justify-end">
                <button type="submit" class="bg-primary text-dark font-bold py-3 px-8 rounded-full hover:shadow-[0_0_20px_rgba(74,222,128,0.4)] transition-all transform hover:-translate-y-1">
                    Save Settings
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
