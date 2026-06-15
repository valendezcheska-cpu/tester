<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page / Landing page
Route::get('/', [LandingController::class, 'index'])->name('home');

// Contact form submission
Route::post('/contact', [LandingController::class, 'contact'])->name('contact.submit');
