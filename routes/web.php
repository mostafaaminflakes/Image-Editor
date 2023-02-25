<?php

use App\Http\Controllers\EditorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show']);
Route::get('/editor/{image}', [EditorController::class, 'editor'])->name('editor');
