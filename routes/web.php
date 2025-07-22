<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ------------------ HALAMAN UMUM ------------------
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/profil-desa', 'pages.profil')->name('profil');
Route::view('/infografis', 'pages.infografis')->name('infografis');
Route::view('/listing', 'pages.listing')->name('listing');
Route::view('/idm', 'pages.idm')->name('idm');
Route::view('/berita', 'pages.berita')->name('berita');
Route::view('/belanja', 'pages.belanja')->name('belanja');
Route::view('/ppid', 'pages.ppid')->name('ppid');

// ------------------ DASHBOARD ------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); // 🛠 diganti dari 'home' ke 'dashboard'

// ------------------ USER PROFILE ------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ------------------ ADMIN DASHBOARD ------------------
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Auth routes (login, register, etc)
require __DIR__.'/auth.php';
