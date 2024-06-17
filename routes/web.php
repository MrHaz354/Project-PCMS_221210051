<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('/layouts.public.home');
})->name('home_public');

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/profiles', function () {
    return view('view.profiles');
});


Route::get('welcome', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get('home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('home.create');
    Route::post('home/create', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
    Route::get('home/{home}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('home.edit');
    Route::put('home/{home}/edit', [App\Http\Controllers\HomeController::class, 'update'])->name('home.update');
    Route::delete('home/{home}/delete', [App\Http\Controllers\HomeController::class, 'destroy'])->name('home.destroy');

    Route::get('/profiles', [App\Http\Controllers\AuthController::class, 'profiles'])->name('profiles');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/project', [ProjectController::class, 'index'])->name('project');

Route::get('/contact', [ContactController::class,'index'])->name('contact');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');