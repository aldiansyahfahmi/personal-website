<?php

use Illuminate\Support\Facades\Route;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\EducationController;

Route::get('/', function () {
    $skills = Skill::where('type', 'skill')->orderBy('order')->get();
    $tools = Skill::where('type', 'tool')->orderBy('order')->get();
    $experiences = Experience::orderBy('order')->get();
    $education = Education::orderBy('order')->get();
    $projects = Project::orderBy('order')->get();

    return view('home', compact('skills', 'tools', 'experiences', 'education', 'projects'));
})->name('home');

// Auth Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('projects', ProjectController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('education', EducationController::class);
});
