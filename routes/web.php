<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

Route::get('/', [TrackController::class, 'index'])->name('index');

Route::get('/tracks', [TrackController::class, 'getTracks'])->name('getTracks');
Route::post('/tracks/upload', [TrackController::class, 'upload'])->name('tracks.upload');
