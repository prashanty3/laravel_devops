@extends('layouts.email')

@section('content')
    <h2>Booking Confirmation</h2>
    <p>Thank you for booking with Nanditaxi! Here are your booking details:</p>
    
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
    
    <p>We will contact you shortly to confirm your booking. If you have any questions, please call us at {{ $content->footer_phone1 ?? '7007294764' }}.</p>
    
    <p>Thank you for choosing Nanditaxi!</p>
@endsection