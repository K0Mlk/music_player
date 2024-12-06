<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

Route::get('/', [TrackController::class, 'index'])->name('index');
Route::post('/tracks/upload', [TrackController::class, 'upload'])->name('tracks.upload');
