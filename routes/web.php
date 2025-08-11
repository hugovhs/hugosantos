<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Dashboard;

Route::get('/', [Home::class, 'index'])->name('home.index');

Route::prefix('dashboard')->group(function () {
    Route::get('/', [Dashboard::class, 'index'])->name('dashboard.index');
    
    // login
    Route::get('/login', [Dashboard::class, 'login'])->name('dashboard.login');
    Route::post('/login', [Dashboard::class, 'loginPost'])->name('dashboard.login.post');
    Route::get('/logout', [Dashboard::class, 'logout'])->name('dashboard.logout');

    // blog and projects posts
    Route::get('/posts', [Dashboard::class, 'posts'])->name('dashboard.posts');
    Route::get('/posts/create', [Dashboard::class, 'createPost'])->name('dashboard.posts.create');
    Route::post('/posts/store', [Dashboard::class, 'storePost'])->name('dashboard.posts.store');
    Route::get('/posts/{id}/edit', [Dashboard::class, 'editPost'])->name('dashboard.posts.edit');
    Route::put('/posts/{id}', [Dashboard::class, 'updatePost'])->name('dashboard.posts.update');
    Route::delete('/posts/{id}', [Dashboard::class, 'deletePost'])->name('dashboard.posts.delete');

    // others
    Route::get('/settings', [Dashboard::class, 'settings'])->name('dashboard.settings');
    Route::get('/profile', [Dashboard::class, 'profile'])->name('dashboard.profile');
    Route::get('/notifications', [Dashboard::class, 'notifications'])->name('dashboard.notifications');
});