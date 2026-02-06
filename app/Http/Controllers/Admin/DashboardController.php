<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'experiences' => Experience::count(),
            'skills' => Skill::where('type', 'skill')->count(),
            'tools' => Skill::where('type', 'tool')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
