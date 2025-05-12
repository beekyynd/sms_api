<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryServiceController;

Route::get('/country-services', [CountryServiceController::class, 'index']);
