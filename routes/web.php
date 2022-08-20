<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MendantestController;

Route::get('/', [MendantestController::class, 'index']);
Route::post('/', [MendantestController::class, 'post']);


