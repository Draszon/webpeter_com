<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::put('/editintroduction/{id}', [AdminHomeController::class, 'editIntroduction'])->name('introduction.edit');
    Route::put('/editaboutme/{id}', [AdminHomeController::class, 'editAboutme'])->name('aboutme.edit');
    Route::delete('/deletetechnology/{id}', [AdminHomeController::class, 'deleteTechnology'])->name('technology.delete');
    Route::put('/edittechnology/{id}', [AdminHomeController::class, 'editTechnology'])->name('technology.edit');
    Route::post('/storetechnology', [AdminHomeController::class, 'storeTechnology'])->name('technology.store');
    Route::delete('/deleteproject/{id}', [AdminHomeController::class, 'deleteProject'])->name('project.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
