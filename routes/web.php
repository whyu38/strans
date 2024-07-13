<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TravelController;

use App\Http\Controllers\MemberController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/member', function () {
    return view('member.index');
});


// CRUD Admin

Route::get('/travelmin', [TravelController::class, 'index']);

// Create
Route::get('/travelmin/create', [TravelController::class, 'create'])->name('travelmin.create');

Route::post('/travelmin', [TravelController::class, 'store'])->name('travelmin.store');

// Edit
Route::get('/travelmin/{id}/edit', [TravelController::class, 'edit'])->name('travelmin.edit');

Route::put('/travelmin/{id}', [TravelController::class, 'update'])->name('travelmin.update');

// Delete
Route::delete('/travelmin/{id}', [TravelController::class, 'destroy'])->name('travelmin.destroy');

// Detail
Route::get('/travelmin/{id}', [TravelController::class, 'show'])->name('travelmin.show');

// Authorization
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Login
// Route untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


//Dash
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/unit-count', [DashboardController::class, 'getUnitCount']);
Route::get('/dashboard/user-count', [DashboardController::class, 'getUserCount']);


use App\Http\Controllers\BookingController;

Route::get('/booking', [BookingController::class, 'index'])->name('travelmin.booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');


use App\Http\Controllers\UserController;

// Route untuk menampilkan daftar pengguna

Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Route untuk menampilkan form tambah pengguna
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Route untuk menampilkan form edit pengguna
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Route untuk menghapus pengguna
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

