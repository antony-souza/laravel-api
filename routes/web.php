<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     $initMessage = 'Welcome to the Laravel application!'; ;
    return response() -> json(['message' => $initMessage]);
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'findMany']);
});