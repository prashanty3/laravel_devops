<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;
use App\Mail\NewBookingNotification;
use App\Notifications\NewBooking;
use App\Models\User;

class BookingController extends Controller
{
    //
    public function viewAllBookings()
    {
        $bookings = Booking::with('user')->latest()->paginate(10);
        return view('admin.allbookings', compact('bookings'));
    }
    public function handleBooking(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to make a booking.');
        }
        // 1. Validate the booking request
        $validated = $request->validate([
            'pickup_location' => 'required|string|max:255',
            'dropoff_location' => 'required|string|max:255',
            'pickup_time' => 'required|date',
            'car_type' => 'required|in:standard,luxury',
            'phone' => 'required|string|max:20',
            'occasion' => 'nullable|string'
        ]);

        $booking = Booking::create([
            'pickup_location' => $validated['pickup_location'],
            'dropoff_location' => $validated['dropoff_location'],
            'pickup_time' => $validated['pickup_time'],
            'car_type' => $validated['car_type'],
            'phone' => $validated['phone'],
            'occasion' => $validated['occasion'] ?? null,
            'status' => 'pending',
            'user_id' => auth()->id() ?? null,
        ]);

        // // 2. Send notification to admin
        // $admin = User::where('is_admin', true)->first();
        // if ($admin) {
        //     // Send email notification
        //     Mail::to($admin->email)->send(new NewBookingNotification($booking));
            
        //     // Send database notification
        //     $admin->notify(new NewBooking($booking));
        // }

        // // 3. Send confirmation to customer
        // if ($request->has('email')) {
        //     Mail::to($request->email)->send(new BookingConfirmation($booking));
        // }

        return redirect()->back()->with('success', 'Your booking has been received! We will contact you shortly.');
    }

    // Handle subscription form
    public function handleSubscription(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:subscribers,email'
        ]);

        // Here you would typically:
        // 1. Save to subscribers table
        // 2. Add to mailing list
        // 3. Send welcome email

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
    public function destroy($id)
    {
        dd($request);
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }

}
