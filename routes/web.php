<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route to main page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// route to checkout page
Route::get('checkhout', function () {
    return view('checkout');
})->name('checkout');

// route to success checkout page
Route::get('success', function () {
    return view('success');
})->name('success');

// route to dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// route to socialite
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

require __DIR__ . '/auth.php';
