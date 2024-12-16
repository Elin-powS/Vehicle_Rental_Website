<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\QuickReservationController;
use App\Http\Controllers\ReservationController;
use App\Models\Quick_reservation;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('About');
})->name('About');

Route::get('/vehicle', function () {
    return view('vehicle');
})->name('vehicle');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/sign_up', [AuthManager::class, 'signup'])->name('signup');
Route::post('/sign_up', [AuthManager::class, 'signup_post'])->name('signup_post');
Route::get('/sign_in', [AuthManager::class, 'signin'])->name('signin');
Route::post('/sign_in', [AuthManager::class, 'signin_post'])->name('signin_post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [QuickReservationController::class, 'home'])->name('home');
    Route::post('/home', [QuickReservationController::class, 'home_post'])->name('home_post');

    Route::get('/home', function () {
        return view('home');
    })->name('home');
    
   
    Route::get('/reservation', [ReservationController::class, 'reservation'])->name('reservation');
    Route::post('/reservation', [ReservationController::class, 'reservation_post'])->name('reservation_post');
    Route::get('/reservation', function () {
        return view('reservation');
    })->name('reservation');


    
    Route::get('/reservation_info', [ReservationController::class, 'reservation_info'])->name('reservation_info');

    Route::get('/lhome', [ReservationController::class, 'lhome'])->name('lhome');

});
