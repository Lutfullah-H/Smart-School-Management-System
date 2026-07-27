<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class,'about'])->name('about');

Route::get('/features',[PageController::class,'features'])->name('features');

Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');

Route::get('/contact', [PageController::class,'contact'])->name('contact');