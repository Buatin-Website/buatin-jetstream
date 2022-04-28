<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('API')->group(function () {
    Route::prefix('auth')
        ->namespace('Auth')
        ->group(function () {
            Route::post('login', 'LoginController');
            Route::post('register', 'RegisterController');
        });
});

Route::middleware(['auth:sanctum', 'role:admin'])->get('/user', function (Request $request) {
    return $request->user();
});
