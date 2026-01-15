<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CompleteCountController;
use App\Http\Controllers\Backend\SocialLinkController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SectionHeroController;
use App\Http\Controllers\Backend\SectionAboutController;
use App\Http\Controllers\Backend\HeaderController;

Route::get('/', function () {
    return view('frontend.pages.show');
});

Route::group(['prefix' => 'cihuy'], function () {

    // Authentication Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
});

// Backend Routes (Protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::prefix('bagoosh')->name('backend.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Brand Routes
        Route::resource('brands', BrandController::class);
        
        // Complete Count Routes
        Route::resource('complete-count', CompleteCountController::class);
        
        // Social Links Routes
        Route::resource('social-links', SocialLinkController::class);
        
        // Footer Routes
        Route::resource('footer', FooterController::class);
        
        // User Routes
        Route::resource('users', UserController::class);
        
        // Section Hero Routes
        Route::resource('section-hero', SectionHeroController::class);
        
        // Section About Routes
        Route::resource('section-about', SectionAboutController::class);
        
        // Header/Navbar Routes
        Route::resource('header', HeaderController::class);
    });
});
