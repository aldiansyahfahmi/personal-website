<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroContent;
use Illuminate\Http\Request;

class HeroContentController extends Controller
{
    public function edit()
    {
        $hero = HeroContent::firstOrCreate([], [
            'greeting' => 'Hello There!',
            'name' => 'ALDIANSYAH FAHMI',
            'typewriter_texts' => ['Flutter Developer', 'UI/UX Designer', 'Tech Enthusiast']
        ]);
        
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'greeting' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'typewriter_texts' => 'required|array',
            'typewriter_texts.*' => 'required|string|max:255',
        ]);

        $hero = HeroContent::first();
        $hero->update($request->only('greeting', 'name', 'typewriter_texts'));

        return redirect()->route('admin.hero.edit')->with('success', 'Hero content updated successfully!');
    }
}
