<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::where('type', 'skill')->orderBy('order')->get();
        $tools = Skill::where('type', 'tool')->orderBy('order')->get();
        return view('admin.skills.index', compact('skills', 'tools'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string',
            'type' => 'required|in:skill,tool',
            'order' => 'integer',
        ]);

        Skill::create($validated);

        return redirect()->route('admin.skills.index')->with('success', 'Item created successfully.');
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string',
            'type' => 'required|in:skill,tool',
            'order' => 'integer',
        ]);

        $skill->update($validated);

        return redirect()->route('admin.skills.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('success', 'Item deleted successfully.');
    }
}
