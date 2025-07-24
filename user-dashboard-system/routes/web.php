<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return redirect('/login'); 
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
        if ($user->isSuperAdmin()) {
            return redirect()->route('super.dashboard');
        } elseif ($user->isHR()) {
            return redirect()->route('hr.dashboard');
        } else {
            abort(403);
        }
    })->name('dashboard');

    Route::middleware(['role:super_admin'])->group(function () {
        Route::get('/super/dashboard', function () {
            return view('dashboard.super');
        })->name('super.dashboard');
    });

    Route::middleware(['role:hr,super_admin'])->group(function () {
        Route::get('/hr/dashboard', function () {
            return view('dashboard.hr');
        })->name('hr.dashboard');
    });

    Route::middleware(['role:super_admin,hr'])->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
    });

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Staff management routes (for HR/Admin)
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
});

require __DIR__.'/auth.php';

