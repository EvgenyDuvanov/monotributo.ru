<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\Contacts\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Request\RequestController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Service\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

    // Route::get('/register', [AdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
    // Route::post('/register', [AdminAuthController::class, 'register'])->name('admin.register.submit');

    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

// Группа маршрутов для админки (только для аутентифицированных администраторов)
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});


// Route::get('/', [ContactsController::class, 'indexContacts']);

Route::get('/', [HomeController::class, 'index']);