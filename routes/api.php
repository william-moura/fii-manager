<?php

use App\Domain\Fii\Controllers\CreateFiiController;
use App\Domain\Fii\Controllers\FiiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('fii', [FiiController::class, 'index']);
Route::post('fii', CreateFiiController::class);
