<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\BookingController;

Route::get('/', [ContentController::class, 'showHomepage'])->name('homepage');
Route::get('about', [ContentController::class, 'showAbout'])->name('about');
Route::get('reviews', [ContentController::class, 'showReviews'])->name('reviews');
Route::get('contact', [ContentController::class, 'showContact'])->name('contact');
Route::post('/book-now', [BookingController::class, 'handleBooking'])
        ->name('booking.store');
    
    // Newsletter Subscription
    Route::post('/subscribe', [BookingController::class, 'handleSubscription'])
        ->name('subscribe');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    // User routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin routes
    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('admin.dashboard');

        Route::get('/content/edit', [ContentController::class, 'edit'])->name('content.edit');
        Route::put('/content/update', [ContentController::class, 'update'])->name('content.update');
        Route::get('/bookings', [BookingController::class, 'viewAllBookings'])->name('admin.bookings');
        Route::delete('/bookings/{id}', [BookingController::class, 'destroy'])->name('admin.bookings.destroy');
    });
});
