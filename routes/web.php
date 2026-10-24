<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('players', PlayerController::class);

Route::get('/stats', [StatsController::class, 'pages'])->name('stats.pages');
Route::get('/stats/detail', [StatsController::class, 'detail'])->name('stats.detail');
Route::get('/stats/popular', [StatsController::class, 'popular'])->name('stats.popular');
