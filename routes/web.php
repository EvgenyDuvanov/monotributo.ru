<?php

use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\Contacts\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Request\RequestController;
use App\Http\Controllers\Service\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');


// Route::get('/', [ContactsController::class, 'indexContacts']);

Route::get('/', [HomeController::class, 'index']);