<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});


Route::post('/logout', function () {
    // Logika logout
    return redirect('/');
})->name('logout');

Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::get('/dashboard-user', [DashboardController::class, 'user'])->name('user.dashboard');
});

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('/operator/dashboard', [OperatorController::class, 'index'])->name('operator.dashboard')->middleware('auth');

Route::prefix('')->namespace('App\Http\Controllers')->group(function () {
    Route::get('/', fn () => view('landing.home'))->name('landing.home');
    Route::get('/profil', fn () => view('landing.profil'))->name('landing.profil');
    Route::get('/kontak', fn () => view('landing.kontak'))->name('landing.kontak');
});

use App\Http\Controllers\RAController;

Route::get('/data-ra', [RAController::class, 'index'])->name('data-ra.index');
Route::get('/data-ra/create', [RAController::class, 'create'])->name('data-ra.create');
Route::post('/data-ra', [RAController::class, 'store'])->name('data-ra.store');
Route::get('data-ra/{id_santri}/edit', [RAController::class, 'edit'])->name('data-ra.edit');
Route::put('/data-ra/{id_santri}', [RAController::class, 'update'])->name('data-ra.update');
Route::delete('/data-ra/{id_santri}', [RAController::class, 'destroy'])->name('data-ra.destroy');







