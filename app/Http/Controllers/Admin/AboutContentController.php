<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\Request;

class AboutContentController extends Controller
{
    public function edit()
    {
        $about = AboutContent::firstOrCreate([], [
            'title' => 'Let Me Introduce Myself',
            'paragraphs' => []
        ]);
        
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'paragraphs' => 'required|array',
            'paragraphs.*' => 'required|string',
        ]);

        $about = AboutContent::first();
        $about->update($request->only('title', 'paragraphs'));

        return redirect()->route('admin.about.edit')->with('success', 'About content updated successfully!');
    }
}
