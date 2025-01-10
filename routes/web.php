<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;

// Public routes
Route::view('/', 'dashboard'); 

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Forgot Password routes
    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
});

// Routes that require authentication
Route::middleware('auth')->group(function () {
    // Routes for both users and admins
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/unit-count', [DashboardController::class, 'getUnitCount']);
    Route::get('/dashboard/user-count', [DashboardController::class, 'getUserCount']);

    // User-specific routes
    Route::middleware('checkrole:user')->group(function () {
        Route::view('/member', 'member.index');
        Route::get('/booking', [BookingController::class, 'index'])->name('travelmin.booking');
        Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    });

    // Admin-specific routes
    Route::middleware('checkrole:admin')->group(function () {
        // CRUD Admin
        Route::resource('travelmin', TravelController::class);

        // User management routes
        Route::resource('users', UserController::class);
    });
});

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');