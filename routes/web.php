<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserSettingController;
use App\Http\Controllers\YandexReviewsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Auth/Login');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/{user}/settings/edit', [UserSettingController::class, 'edit'])->name('user.settings.edit');
    Route::put('/user/{user}/settings', [UserSettingController::class, 'update'])->name('user.settings.update');
    Route::get('/yandex/reviews/', [YandexReviewsController::class, 'index'])->name('yandex.reviews.index');
});

require __DIR__.'/auth.php';
