<?php

use App\Http\Controllers\CitiesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/cities/{country_id}', [CitiesController::class, 'getCities'])->name('cities.get');
