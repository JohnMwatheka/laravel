<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buy/ticket', [Homecontroller::class, 'Index'])->name('ticket');
Route::get('/home/contact', [Homecontroller::class, 'Contact'])->name('contact');