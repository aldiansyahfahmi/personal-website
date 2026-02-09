<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_file' => 'nullable|image|max:2048',
            'technologies' => 'nullable|string',
            'url' => 'nullable|url',
            'order' => 'integer',
        ]);

        if ($request->hasFile('image_file')) {
            $image = $request->file('image_file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $targetDir = public_path('storage/projects');
            
            if (!File::exists($targetDir)) {
                File::makeDirectory($targetDir, 0755, true);
            }
            
            $image->move($targetDir, $imageName);
            $validated['image'] = 'storage/projects/' . $imageName;
        }

        if ($request->technologies) {
            $validated['technologies'] = array_map('trim', explode(',', $request->technologies));
        } else {
            $validated['technologies'] = [];
        }

        unset($validated['image_file']);

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_file' => 'nullable|image|max:2048',
            'technologies' => 'nullable|string',
            'url' => 'nullable|url',
            'order' => 'integer',
        ]);

        if ($request->hasFile('image_file')) {
            if ($project->image && File::exists(public_path($project->image))) {
                File::delete(public_path($project->image));
            }
            $image = $request->file('image_file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $targetDir = public_path('storage/projects');
            
            if (!File::exists($targetDir)) {
                File::makeDirectory($targetDir, 0755, true);
            }
            
            $image->move($targetDir, $imageName);
            $validated['image'] = 'storage/projects/' . $imageName;
        }

        if ($request->technologies) {
            $validated['technologies'] = array_map('trim', explode(',', $request->technologies));
        } else {
            $validated['technologies'] = [];
        }

        unset($validated['image_file']);

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image && File::exists(public_path($project->image))) {
            File::delete(public_path($project->image));
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
