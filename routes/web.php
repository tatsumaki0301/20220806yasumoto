<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MendantestController;

Route::get('/building', function($building = "建物です"){
    return "建物です";
});

Route::get('/building/{room?}', [MendantestController::class, 'index']);