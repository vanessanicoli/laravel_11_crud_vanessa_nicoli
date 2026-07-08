<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// ArticleController
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
    // Create
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    // Read
Route::get('/articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');
    // Update
Route::get('/articles/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/update/{article}', [ArticleController::class, 'update'])->name('articles.update');
    // Delete
Route::delete('/articles/delete/{article}', [ArticleController::class, 'destroy'])->name('articles.delete');