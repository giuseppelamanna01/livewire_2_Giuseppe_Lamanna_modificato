<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/create', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');
Route::get('/edit/{article}', [ArticleController::class, 'edit'])->middleware('auth')->name('article.edit');
Route::get('/show/{article}', [ArticleController::class, 'show'])->middleware('auth')->name('article.show');

