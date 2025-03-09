<?php

use Inertia\Inertia;

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return Inertia::render('Welcome');
})->middleware('guest')->name('home');

// Panel
Route::group(['middleware' => ['auth', 'verified']], function () {
    // Dashboard
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Role Group
    Route::group(['prefix' => 'roles', 'name' => 'roles.'], function () {
        // Index
        Route::get('/', function () {
            return Inertia::render('role/Index');
        })->name('index');
    });

    // User Group
    Route::group(['prefix' => 'users', 'name' => 'users.'], function () {
        // Index
        Route::get('/', function () {
            return Inertia::render('user/Index');
        })->name('index');
    });

    // Category Group
    Route::group(['prefix' => 'categories', 'name' => 'categories.'], function () {
        // Index
        Route::get('/', function () {
            return Inertia::render('category/Index');
        })->name('index');
    });

    // Tag Group
    Route::group(['prefix' => 'tags', 'name' => 'tags.'], function () {
        // Index
        Route::get('/', function () {
            return Inertia::render('tag/Index');
        })->name('index');
    });

    // Post Group
    Route::group(['prefix' => 'posts', 'name' => 'posts.'], function () {
        // Index
        Route::get('/', function () {
            return Inertia::render('post/Index');
        })->name('index');
    });

    // Comment Group
    Route::group(['prefix' => 'comments', 'name' => 'comments.'], function () {
        // Index
        Route::get('/', function () {
            return Inertia::render('comment/Index');
        })->name('index');
    });
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
