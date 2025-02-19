<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckUserRole;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware([\App\Http\Middleware\CheckIfAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return Inertia::render('AdminDashboard');
    })->name('admin.dashboard');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'auth' => [
            'user' => Auth::user(),
        ],
    ]);    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/expenses', function () {
    return Inertia::render('Expenses');
})->middleware(['auth']);

Route::get('/budget', function () {
    return Inertia::render('Budget');
})->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

