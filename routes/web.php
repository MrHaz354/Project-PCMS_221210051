<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FootersController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FileController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact')
;
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/homes', function () {
        return view('homes');
    })->name('homes');

    Route::get('/contactus', function () {
        return view('contactus');
    })->name('contactus');

    Route::get('/profiles', [App\Http\Controllers\FileController::class, 'index'])
    ->name('files.index');

    Route::get('/files/create', [App\Http\Controllers\FileController::class, 'create'])
    ->name('files.create');

    Route::post('/files/store', [App\Http\Controllers\FileController::class, 'store'])
    ->name('files.store');


    Route::get('/files/{file}/download', [App\Http\Controllers\FileController::class, 'download'])
    ->name('profile.download');


    Route::get('/profiles', [ProfilesController::class, 'index'])->name('profiles.index');
    Route::get('/profiles/create', [ProfilesController::class, 'create'])->name('profiles.create');
    Route::post('/profiles', [ProfilesController::class, 'store'])->name('profiles.store');
    Route::get('/profiles/{profile}/edit', [ProfilesController::class, 'edit'])->name('profiles.edit');
    Route::put('/profiles/{profile}', [ProfilesController::class, 'update'])->name('profiles.update');
    Route::delete('/profiles/{profile}', [ProfilesController::class, 'destroy'])->name('profiles.destroy');


    Route::get('/homes', [HomesController::class, 'index'])->name('homes.index');
    Route::get('/homes/create', [HomesController::class, 'create'])->name('homes.create');
    Route::post('/homes', [HomesController::class, 'store'])->name('homes.store');
    Route::get('/homes/{home}/edit', [HomesController::class, 'edit'])->name('homes.edit');
    Route::put('/homes/{home}', [HomesController::class, 'update'])->name('homes.update');
    Route::delete('/homes/{home}', [HomesController::class, 'destroy'])->name('homes.destroy');

    Route::get('/footers', [FootersController::class, 'index'])->name('footers.index');
    Route::get('/footers/create', [FootersController::class, 'create'])->name('footers.create');
    Route::post('/footers', [FootersController::class, 'store'])->name('footers.store');
    Route::get('/footers/{id}/edit', [FootersController::class, 'edit'])->name('footers.edit');
    Route::put('/footers/{id}', [FootersController::class, 'update'])->name('footers.update');
    Route::delete('/footers/{id}', [FootersController::class, 'destroy'])->name('footers.destroy');


});