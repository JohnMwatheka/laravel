<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/buy/ticket/{event}/{amount}', [Homecontroller::class, 'Index'])->name('ticket');
Route::get('/home/contact', [Homecontroller::class, 'Contact'])->name('contact');

Route::post('/buy-ticket', [Homecontroller::class, 'Ticket'])->name('buy-ticket');
Route::get('/events', [Homecontroller::class, 'CreateEvent'])->name('create-event');
Route::post('/events', [Homecontroller::class, 'Store'])->name('events.store');
