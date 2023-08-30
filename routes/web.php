<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\ResumeController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeAdminController;
use App\Http\Controllers\Backend\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);

// Authenticated Group
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('proseslogin', [AuthController::class, 'proseslogin'])->name('prosesloginlogin');

Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('prosesforgot', [AuthController::class, 'prosesforgot']);

// Admin
Route::group(['middleware' => ['admin']], function () {
    Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout');
    // Dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    // Home
    Route::get('admin/home', [HomeAdminController::class, 'index']);
    Route::get('admin/home/create', [HomeAdminController::class, 'create']);
    Route::post('admin/home/store', [HomeAdminController::class, 'store']);
    Route::get('admin/home/edit/{id}', [HomeAdminController::class, 'edit']);
    Route::put('admin/home/update{id}', [HomeAdminController::class, 'update']);
    Route::delete('admin/home/destroy/{id}', [HomeAdminController::class, 'destroy']);

    // About
    Route::get('admin/about', [AboutController::class, 'index']);
    Route::get('admin/about/create', [AboutController::class, 'create']);
    Route::post('admin/about/store', [AboutController::class, 'store']);
    Route::get('admin/about/edit/{id}', [AboutController::class, 'edit']);
    Route::put('admin/about/update{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('admin/about/destroy/{id}', [AboutController::class, 'destroy']);

    // Skill
    Route::get('admin/skill', [SkillController::class, 'index'])->name('skill.index');
    Route::get('admin/skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('admin/skill/store', [SkillController::class, 'store'])->name('skill.store');
    Route::get('admin/skill/edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::put('admin/skill/update{id}', [SkillController::class, 'update'])->name('skill.update');
    Route::delete('admin/skill/destroy/{id}', [SkillController::class, 'destroy'])->name('skill.delete');

    // Resume
    Route::get('admin/resume', [ResumeController::class, 'index'])->name('resume.index');
    Route::get('admin/resume/create', [ResumeController::class, 'create'])->name('resume.create');
    Route::get('admin/resume/store', [ResumeController::class, 'store'])->name('resume.store');

    // Education
    Route::get('admin/education', [ResumeController::class, 'educationindex'])->name('education.index');
    Route::get('admin/education/create', [ResumeController::class, 'educationcreate'])->name('education.create');
    Route::post('admin/education/store', [ResumeController::class, 'educationstore'])->name('education.store');
    Route::get('admin/education/edit/{id}', [ResumeController::class, 'educationedit'])->name('education.edit');
    Route::put('admin/education/update{id}', [ResumeController::class, 'educationupdate'])->name('education.update');
    Route::delete('admin/education/destroy/{id}', [ResumeController::class, 'educationdestroy'])->name('education.destroy');

    // Experience
    Route::get('admin/experience', [ResumeController::class, 'experienceindex'])->name('experience.index');
    Route::get('admin/experience/create', [ResumeController::class, 'experiencecreate'])->name('experience.create');
    Route::post('admin/experience/store', [ResumeController::class, 'experiencestore'])->name('experience.store');
    Route::get('admin/experience/edit/{id}', [ResumeController::class, 'experienceedit'])->name('experience.edit');
    Route::put('admin/experience/update{id}', [ResumeController::class, 'experienceupdate'])->name('experience.update');
    Route::delete('admin/experience/destroy/{id}', [ResumeController::class, 'experiencedestroy'])->name('experience.destroy');

    // Portfolio
    Route::get('admin/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('admin/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('admin/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('admin/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('admin/portfolio/destroy/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

Route::get('admin/contact', [ContactController::class, 'index']);


});


