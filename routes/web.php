<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplicationController as AdminApplicationController;
use App\Http\Controllers\Admin\ComboController;
use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
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

Route::middleware(['auth:admin'])->group(function () {
    // Главная страница админ-панели
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Управление отзывами
    Route::prefix('admin/reviews')->group(function () {
        Route::get('/', [AdminController::class, 'indexReviews'])->name('admin.reviews');
    });

    Route::prefix('admin/combos')->group(function () {
        Route::get('/', [ComboController::class, 'index'])->name('admin.combos');
        Route::get('/edit/{id}', [ComboController::class, 'edit'])->name('admin.combos.edit');
        Route::put('/update/{id}', [ComboController::class, 'update'])->name('admin.combos.update');
        Route::delete('/destroy/{id}', [ComboController::class, 'destroy'])->name('admin.combos.destroy');
    });

    Route::prefix('admin/services')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('admin.services');
        Route::get('/create', [ServiceController::class, 'create'])->name('admin.services.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('admin.services.store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');
        Route::put('/update/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
        Route::delete('/destroy/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');
    });

    // Управление контактами
    Route::prefix('admin/contacts')->group(function () {
        Route::get('/', [AdminController::class, 'indexContacts'])->name('admin.contacts');
    });

    // Управление заявками
    Route::prefix('admin/applications')->group(function () {
        Route::get('/', [AdminApplicationController::class, 'index'])->name('admin.applications');
        Route::get('/edit/{id}', [AdminApplicationController::class, 'edit'])->name('admin.applications.edit');
        Route::put('/update/{id}', [AdminApplicationController::class, 'update'])->name('admin.applications.update');
        Route::delete('/applications/{id}', [AdminApplicationController::class, 'destroy'])->name('admin.applications.destroy');

    });

    // Управление FAQ
    Route::prefix('admin/faqs')->group(function () {
        Route::get('/', [AdminController::class, 'indexFaqs'])->name('admin.faqs');
    });

    // Управление гайдами
    Route::prefix('admin/guides')->group(function () {
        Route::get('/', [AdminController::class, 'indexGuides'])->name('admin.guides');
    });
});

// Группа маршрутов для админки (только для аутентифицированных администраторов)
// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::get('/admin/reviews', [AdminController::class, 'indexReviews'])->name('admin.reviews');
//     Route::get('/admin/combos', [AdminController::class, 'indexCombos'])->name('admin.combos');
//     Route::get('/admin/services', [AdminController::class, 'indexServices'])->name('admin.services');
//     Route::get('/admin/contacts', [AdminController::class, 'indexContacts'])->name('admin.contacts');
//     Route::get('/admin/applications', [AdminController::class, 'indexApplications'])->name('admin.applications');
//     Route::get('/admin/faqs', [AdminController::class, 'indexFaqs'])->name('admin.faqs');
//     Route::get('/admin/guides', [AdminController::class, 'indexGuides'])->name('admin.guides');
// });


// Route::get('/', [ContactsController::class, 'indexContacts']);

Route::get('/', [HomeController::class, 'index']);