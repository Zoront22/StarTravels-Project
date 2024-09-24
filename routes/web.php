<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\UnitHotelController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnidadesImagenesController;
use App\Http\Controllers\UnitCruiseController;
use App\Http\Controllers\UnitTourController;
use App\Http\Controllers\UnitFlightController;

Route::prefix('admin')->group(function () {

    //Dashboard
    // Route::view('/index/index', 'admin/index/index');
    Route::view('', 'admin/index/index');

    //Error 404
    Route::view('/404/404', 'admin/404/404');

    //bookings
    Route::view('/bookings/bookings-approved', 'admin/bookings/bookings-approved');
    Route::view('/bookings/bookings-cancelled', 'admin/bookings/bookings-cancelled');
    Route::view('/bookings/bookings-pending', 'admin/bookings/bookings-pending');
    Route::view('/bookings/bookings', 'admin/bookings/bookings');
    Route::view('/bookings/bookmarks', 'admin/bookings/bookmarks');
    //end bookings

    //Forms
    Route::view('/form/form-forgot-password', 'admin/form/form-forgot-password');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');//Pending...
    Route::post('/login', [LoginController::class, 'showLoginForm'])->name('login.auth');//Pending...
    // Route::view('/form/form-login', 'admin/form/form-login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');//Pending...
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');//Pending... Error
    // Route::view('/form/form-registration', 'admin/form/form-registration');
    //end Forms

    //others
    Route::view('/faq/faq', 'admin/faq/faq');
    Route::view('/coming-soon/coming-soon', 'admin/coming-soon/coming-soon');
    Route::view('/invoices/invoices', 'admin/invoices/invoices');

    //Listing

    //Car
    Route::resource('/listing-car', UnitController::class)->parameters([
        'listing-car' => 'unit',
    ]);
    Route::post('/listing-car/status', [UnitController::class, 'updateStatus'])->name('listing-car.updateStatus');


    //Cruise
    Route::resource('/listing-cruise', UnitCruiseController::class)->parameters([
        'listing-cruise' => 'unit',
    ]);
    Route::post('listing-cruise/status',  [UnitCruiseController::class, 'updateStatus'])->name('listing-cruise.updateStatus');

    //Flight
    Route::resource('/listing-flight', UnitFlightController::class)->parameters([
        'listing-flight' => 'unit',
    ]);
    Route::post('listing-flight', [UnitFlightController::class, 'updateStatus'])->name('listing-flight.updateStatus');

    //Hotel
    Route::resource('/listing-hotel', UnitHotelController::class)->parameters([
        'listing-hotel' => 'unit',
    ]);

    //Tour
    Route::resource('/listing-tour', UnitTourController::class)->parameters([
        'listing-tour' => 'unit',
    ]);
    //End listing

    //Messages
    Route::view('/messages/messages-compose', 'admin/messages/messages-compose');
    Route::view('/messages/messages-details', 'admin/messages/messages-details');
    Route::view('/messages/messages-drafts', 'admin/messages/messages-drafts');
    Route::view('/messages/messages-important', 'admin/messages/messages-important');
    Route::view('/messages/message-inbox', 'admin/messages/messages-inbox');
    Route::view('/messages/messages-sent', 'admin/messages/messages-sent');
    Route::view('/messages/messages-starred', 'admin/messages/messages-starred');
    Route::view('/messages/messages-trash', 'admin/messages/messages-trash');
    //End messages

    //Others
    Route::view('/pricing-tables/pricing-tables', 'admin/pricing-tables/pricing-tables');
    Route::view('/privacy-policy/privacy-policy', 'admin/privacy-policy/privacy-policy');
    Route::view('/reviews/reviews', 'admin/reviews/reviews');
    Route::get('/unidades/imagenes', [UnidadesImagenesController::class, 'index']);
    //End others

    //Profile
    Route::view('/profile/profile-change-password', 'admin/profile/profile-change-password');
    Route::view('/profile/profile-edit-profile', 'admin/profile/profile-edit-profile');
    Route::view('/profile/profile-view-profile', 'admin/profile/profile-view-profile');
    //End profile

    //Users
    // Route::view('/users/users-create-user', 'admin/users/users-create-user');
    Route::resource('/users', ListUserController::class);
    //End users
});
