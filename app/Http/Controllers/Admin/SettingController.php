<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('public/images');
            // Store relative path for storage link (e.g., images/filename.jpg)
            $filename = str_replace('public/', '', $path);
            Setting::set('profile_image', $filename, 'image');
        }

        // Add other settings here if needed

        return redirect()->route('admin.settings.edit')->with('success', 'Settings updated successfully!');
    }
}
