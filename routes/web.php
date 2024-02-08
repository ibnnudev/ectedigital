<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'index'])->name('guest.home');
Route::get('about', [GuestController::class, 'about'])->name('guest.about');
Route::get('service', [GuestController::class, 'service'])->name('guest.service');
Route::get('portfolio', [GuestController::class, 'portfolio'])->name('guest.portfolio');
Route::get('portfolio/{id}', [GuestController::class, 'portfolioDetail'])->name('guest.portfolio.detail');
Route::get('contact', [GuestController::class, 'contact'])->name('guest.contact');

require __DIR__ . '/auth.php';
