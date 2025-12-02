<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserController;

Route::get('/', [FrontendController::class, 'index'])->name('home');

// User routes
Route::middleware(['auth', 'user'])->prefix('user')->as('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [UserController::class, 'destroy'])->name('logout');

});

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
