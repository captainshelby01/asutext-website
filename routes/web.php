<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/cleaning', [PageController::class, 'cleaning'])->name('services.cleaning');
Route::get('/services/fashion', [PageController::class, 'fashion'])->name('services.fashion');
Route::get('/services/fast-food', [PageController::class, 'fastFood'])->name('services.fastfood');
Route::get('/services/electronics', [PageController::class, 'electronics'])->name('services.electronics');
Route::get('/services/transport', [PageController::class, 'transport'])->name('services.transport');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/coverage', [PageController::class, 'coverage'])->name('coverage');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

