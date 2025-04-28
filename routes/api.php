<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Homecontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// M-Pesa callback routes
// These routes don't require CSRF protection as they're called by M-Pesa
Route::prefix('v1')->group(function () {
    
    Route::post('c2b-stk-callback', [TestController::class, 'handleStkCallback']);
    // Route::post('c2b-confirmation', [TestController::class, 'handleConfirmation']);
    // Route::post('c2b-validation', [TestController::class, 'handleValidation']);

    Route::get('/register-mpesa-callback', [TestController::class, 'registerCallbackUrl']);

    Route::post('c2b-confirmation', [Homecontroller::class, 'handleConfirmation']);
    Route::post('c2b-validation', [Homecontroller::class, 'handleValidation']);
});
