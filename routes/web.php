<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/',  [PortfolioController::class, 'index']);
Route::get('/profiles', [PortfolioController::class, 'profiles']);
Route::get('/skills', [PortfolioController::class, 'profiles']);
Route::get('/contacts', [PortfolioController::class, 'profiles']);
Route::get('/projects', [PortfolioController::class, 'profiles']);
Route::get('/experiences', [PortfolioController::class, 'profiles']);

