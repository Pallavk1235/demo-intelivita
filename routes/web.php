<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderboardController;

Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');
Route::get('/search', [LeaderboardController::class, 'search'])->name('leaderboard.search');
Route::post('/recalculate', [LeaderboardController::class, 'recalculate'])->name('leaderboard.recalculate');