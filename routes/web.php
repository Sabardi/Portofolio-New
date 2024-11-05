<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/tutorials/category/{slug}', [FrontController::class, 'showTutorialsByCategory'])->name('tutorials.category');
Route::get('/tutorials/{slug}', [FrontController::class, 'showTutorial'])->name('tutorials.show');
