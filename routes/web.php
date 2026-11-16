<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::resource('tasks', TaskController::class)->only(['index', 'show']);

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class)->except(['index', 'show']);
});

require __DIR__.'/auth.php';
