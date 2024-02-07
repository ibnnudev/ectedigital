<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'index'])->name('guest.home');
Route::get('about', [GuestController::class, 'about'])->name('guest.about');
Route::get('service', [GuestController::class, 'service'])->name('guest.service');
Route::get('portfolio', [GuestController::class, 'portfolio'])->name('guest.portfolio');
Route::get('contact', [GuestController::class, 'contact'])->name('guest.contact');

require __DIR__ . '/auth.php';
