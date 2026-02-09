<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function edit()
    {
        // Ensure settings exist
        if (!Setting::get('profile_image')) {
            Setting::set('profile_image', 'profile.jpg');
        }

        return view('admin.settings.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            // Delete old image if it exists
            $oldImage = Setting::get('profile_image');
            if ($oldImage && $oldImage !== 'profile.jpg' && !Str::startsWith($oldImage, 'http')) {
                Storage::disk('public')->delete($oldImage);
            }

            $path = $request->file('profile_image')->store('images', 'public');
            Setting::set('profile_image', $path, 'image');
        }

        return redirect()->route('admin.settings.edit')->with('success', 'Settings updated successfully!');
    }
}
