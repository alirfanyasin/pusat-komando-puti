<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/report', function () {
    return view('pages.report');
})->name('report');


// Dashboard
Route::prefix('app')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.app.dashboard');
    })->name('dashboard');


    Route::prefix('ticket')->group(function () {
        Route::get('/new', function () {
            return view('pages.app.ticket-new');
        })->name('ticket-new');
    });

    // Route::resource('ticket', TicketController::class);

    Route::resource('staff', StaffController::class);

    // Route::get('/staff', function () {
    //     return view('pages.app.staff');
    // })->name('staff');

    // Route::get('/staff/create', function () {
    //     return view('pages.app.staff-create');
    // })->name('staff.create');
});
