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

Route::get('admin/skill', [SkillController::class, 'index']);

Route::get('admin/resume', [ResumeController::class, 'index']);

Route::get('admin/portfolio', [PortfolioController::class, 'index']);

Route::get('admin/contact', [ContactController::class, 'index']);


});


