<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/favourite', [PageController::class, 'favourite'])->name('favourite');

Route::get('/account', [PageController::class, 'account'])->name('account');

Route::get('/explore', [PageController::class, 'explore'])->name('explore');

Route::get('/details/{id}', [PageController::class, 'details'])->name('details');
