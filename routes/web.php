<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\TripController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ReservationController;

use Illuminate\Support\Facades\Auth;

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

// Mar3i
Route::get('/', [TripController::class, 'showAllProductsWelcome']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

// Route::get('/profile', function () {
//     return view('profile');
// });
Route::get('/profile', [UserController::class, 'userProfile']);
Route::put('updateUser/{id}', [UserController::class, 'updateProfileUser']);








Route::get('/destinations', [TripController::class, 'showAllProducts']);
Route::get('/book/{id}', [ReservationController::class, 'index']);
Route::get('/book-add/{id}', [ReservationController::class, 'insert']);
Route::get('destinations/{id}', [TripController::class, 'showFilteredProducts']);
Route::get('/destinations-h2l', [TripController::class, 'showHighestProducts']);
Route::get('/destinations-l2h', [TripController::class, 'showLowestProducts']);
Route::get('/show-trip/{id}', [TripController::class, 'show']);



// Sanad
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function() {
    Route::get('dashboard', [FrontendController::class, 'index']);

    // Categories /////////////////////

    Route::get('/countries', [CountryController::class, 'index']);
    Route::get('add-country', [CountryController::class, 'add']);
    Route::get('edit-country/{id}', [CountryController::class, 'edit']);
    Route::post('insert-country', [CountryController::class, 'insert']);
    Route::put('update-country/{id}', [CountryController::class, 'update']);
    Route::get('delete-country/{id}', [CountryController::class, 'destroy']);

    // Trips /////////////////////

    Route::get('trips', [TripController::class, 'index']);
    Route::get('add-trip', [TripController::class, 'add']);
    Route::get('edit-trip/{id}', [TripController::class, 'edit']);
    Route::put('update-trip/{id}', [TripController::class, 'update']);
    Route::post('insert-trip', [TripController::class, 'insert']);
    Route::get('delete-trip/{id}', [TripController::class, 'destroy']);

    // Users /////////////////////

    Route::get('users', [UserController::class, 'index']);
    Route::get('add-user', [UserController::class, 'add']);
    Route::get('edit-user/{id}', [UserController::class, 'edit']);
    Route::put('update-user/{id}', [UserController::class, 'update']);
    Route::post('insert-user', [UserController::class, 'insert']);
    Route::get('delete-user/{id}', [UserController::class, 'destroy']);

    // Reservations ////////////////////////////
    Route::get('reservations', [ReservationController::class, 'adminIndex']);
    Route::get('accepted-reservations', [ReservationController::class, 'acceptedIndex']);
    Route::put('accept-reser/{id}', [ReservationController::class, 'acceptStatus']);
    Route::get('reject-reser/{id}', [ReservationController::class, 'destroy']);


});
