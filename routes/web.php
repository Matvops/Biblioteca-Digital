<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/filter', [MainController::class, 'homeFilter'])->name('filter');
Route::get('/create', [MainController::class, 'create'])->name('create');
Route::post('/create', [MainController::class, 'createSubmit'])->name('createSubmit');
