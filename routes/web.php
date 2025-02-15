<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HallController;

Route::get('/halls', [HallController::class, 'getHallsWithFacilities']);