<?php

use App\Domain\Fii\Controllers\CreateFiiController;
use App\Domain\Fii\Controllers\FiiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use WilliamMoura\PriceFii\PriceFii;
use WilliamMoura\PriceFii\Providers\FiisProvider;

Route::get('fii', [FiiController::class, 'index']);
Route::post('fii', CreateFiiController::class);
Route::get('test', function () {
   $fii = new PriceFii(
    new FiisProvider()
   );
   return $fii->getFiiPrice('BCFF11');
});
