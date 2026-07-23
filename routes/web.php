<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/coverage', [PageController::class, 'coverage'])->name('coverage');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

