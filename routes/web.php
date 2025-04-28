<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\TestController;


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/buy/ticket/{event}/{amount}', [Homecontroller::class, 'Index'])->name('ticket');
Route::get('/home/contact', [Homecontroller::class, 'Contact'])->name('contact');

Route::post('/buy-ticket', [Homecontroller::class, 'Ticket'])->name('buy-ticket');
Route::get('/events', [Homecontroller::class, 'CreateEvent'])->name('create-event');
Route::post('/events', [Homecontroller::class, 'Store'])->name('events.store');

// M-Pesa Callbacks and Testing Routes
Route::get('/test-stk-push', [TestController::class, 'testStkPush']);
Route::get('/register-mpesa-callback', [TestController::class, 'registerCallbackUrl']);

// M-Pesa Callback Routes
// Note: These routes need to be accessible by M-Pesa's servers without CSRF protection
// In a production environment, make sure these are properly exempted from CSRF verification
// Route::post('/api/v1/c2b-stk-callback', [TestController::class, 'handleStkCallback']);
//
// Route::post('/api/v1/c2b-confirmation', [Homecontroller::class, 'handleConfirmation']);
// Route::post('/api/v1/c2b-validation', [Homecontroller::class, 'handleValidation']);
