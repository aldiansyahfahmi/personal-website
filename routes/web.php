<?php

use Illuminate\Support\Facades\Route;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;
use App\Models\HeroContent;
use App\Models\AboutContent;
use App\Models\SocialLink;
use App\Models\Setting;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\HeroContentController;
use App\Http\Controllers\Admin\AboutContentController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\SettingController;

Route::get('/', function () {
    $skills = Skill::where('type', 'skill')->orderBy('order')->get();
    $tools = Skill::where('type', 'tool')->orderBy('order')->get();
    $experiences = Experience::orderBy('order')->get();
    $education = Education::orderBy('order')->get();
    $projects = Project::orderBy('order')->get();

    // Dynamic contents
    $hero = HeroContent::firstOrCreate([], [
        'greeting' => 'Hello There!',
        'name' => 'ALDIANSYAH FAHMI',
        'typewriter_texts' => ['Flutter Developer', 'UI/UX Designer', 'Tech Enthusiast']
    ]);
    
    $about = AboutContent::firstOrCreate([], [
        'title' => 'Let Me Introduce Myself',
        'paragraphs' => [
            'I am <b class="text-primary">Aldiansyah Fahmi</b>, a Flutter Developer with over 4 years of experience based in Maros, South Sulawesi.'
        ]
    ]);

    $socialLinks = SocialLink::orderBy('order')->get();
    $profileImage = Setting::get('profile_image', 'profile.jpg');

    return view('home', compact('skills', 'tools', 'experiences', 'education', 'projects', 'hero', 'about', 'socialLinks', 'profileImage'));
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
    
    // Dynamic Content Management
    Route::get('hero', [HeroContentController::class, 'edit'])->name('hero.edit');
    Route::put('hero', [HeroContentController::class, 'update'])->name('hero.update');
    
    Route::get('about', [AboutContentController::class, 'edit'])->name('about.edit');
    Route::put('about', [AboutContentController::class, 'update'])->name('about.update');
    
    Route::resource('social-links', SocialLinkController::class);
    
    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
});
