<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Public Routes (No Login Required)
|--------------------------------------------------------------------------
*/

// MAIN PAGE
Route::get('/', function () {
    return view('mainpage');   // resources/views/mainpage.blade.php
})->name('mainpage');



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Protected Routes (Login Required)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // PROFILE PAGE
    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile');

    // EDIT PROFILE PAGE
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::get('/feed', [FeedController::class, 'index'])->name('feed');
    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');


});



