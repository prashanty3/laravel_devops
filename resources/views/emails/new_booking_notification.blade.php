@extends('layouts.email')

@section('content')
    <h2>New Booking Received</h2>
    <p>A new booking has been created through the website:</p>
    
    <ul>
        <li><strong>Pickup Location:</strong> {{ $booking->pickup_location }}</li>
        <li><strong>Dropoff Location:</strong> {{ $booking->dropoff_location }}</li>
        <li><strong>Pickup Time:</strong> {{ $booking->pickup_time->format('F j, Y \a\t g:i A') }}</li>
        <li><strong>Car Type:</strong> {{ ucfirst($booking->car_type) }}</li>
        <li><strong>Contact Phone:</strong> {{ $booking->phone }}</li>
        @if($booking->occasion)
        <li><strong>Occasion:</strong> {{ $booking->occasion }}</li>
        @endif
    </ul>
    
    <a href="{{ route('admin.bookings.show', $booking->id) }}" class="button">View Booking Details</a>
@endsection