@extends('webpage.dashboard')
@section('title', 'Taxi Service in Kanpur | 24x7 Cab Booking | Nanditaxi')
@section('hero_content')
<!-- Hero Content -->
    <div class="hero-content container text-center">
        <p class="subheading">{{$content->subheading ?? 'Premium Cab Services'}}</p>
        <h1 class="heading">{{ $content->hero_heading ?? 'Best Taxi Service in Kanpur' }}</h1>

        <div class="booking-form container mt-4 text-center display-flex justify-content-center">
            <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">
                @csrf
                <div class="row g-3">
                    <!-- Pickup Location -->
                    <div class="col-md-6 col-lg-2">
                        <input type="text" class="form-control" name="pickup_location" placeholder="Start Destination" required>
                        @error('pickup_location')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Dropoff Location -->
                    <div class="col-md-6 col-lg-2">
                        <input type="text" class="form-control" name="dropoff_location" placeholder="End Destination" required>
                        @error('dropoff_location')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Date & Time -->
                    <div class="col-md-6 col-lg-2">
                        <input type="datetime-local" class="form-control" name="pickup_time" required>
                        @error('pickup_time')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Car Type -->
                    <div class="col-md-6 col-lg-2">
                        <select class="form-select form-control" name="car_type" required>
                            <option value="" selected disabled>Car Class</option>
                            <option value="standard">Standard</option>
                            <option value="luxury">Luxury</option>
                        </select>
                        @error('car_type')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Booking Occasion -->
                    <div class="col-md-6 col-lg-2">
                        <select class="form-select form-control" name="occasion">
                            <option value="" selected disabled>Booking Occasion</option>
                            <option value="marriage">Marriage</option>
                            <option value="tour">Tour</option>
                            <option value="airport">Airport Transfer</option>
                            <option value="business">Business</option>
                        </select>
                    </div>
                    
                    <!-- Phone Number -->
                    <div class="col-md-6 col-lg-2">
                        <input type="tel" class="form-control" name="phone" placeholder="Your Phone" required>
                        @error('phone')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Email (Optional) -->
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-6 col-lg-3 mx-auto">
                            <input type="email" class="form-control" name="email" placeholder="Your Email (optional)">
                            @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Terms Agreement -->
                    <div class="form-check mt-3 col-md-12 col-lg-12 text-center display-flex justify-content-center">
                        <input class="form-check-input me-3" type="checkbox" id="terms_agreement" name="terms_agreement" required>
                        <label class="form-check-label" for="terms_agreement">
                            I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms and Conditions</a>
                        </label>
                        @error('terms_agreement')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="col-md-12 col-lg-12">
                        <button type="submit" class="btn btn-warning fw-bold">
                            <span id="submitText">Book Now!</span>
                            <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('content')
    <!-- Welcome Section -->
    <section class="welcome-section py-5 text-center">
        <div class="container">
            <p class="section-subtitle text-warning fw-semibold">WHAT WE OFFER</p>
            <h2 class="section-title fw-bold">{{ $content->welcome_title ?? 'Reliable Taxi Services in Kanpur' }}</h2>
            <p class="section-description text-muted mx-auto mb-5" style="max-width: 700px;">
                {{ $content->welcome_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.' }}
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-map-location-dot fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">{{ $content->service1_title ?? 'City Rides' }}</h5>
                        <p class="text-muted">{{ $content->service1_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.' }}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-plane-departure fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">{{ $content->service2_title ?? 'Airport Transfers' }}</h5>
                        <p class="text-muted">{{ $content->service2_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.' }}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-route fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">{{ $content->service3_title ?? 'Outstation Trips' }}</h5>
                        <p class="text-muted">{{ $content->service3_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.' }}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-taxi fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">{{ $content->service4_title ?? '24/7 Availability' }}</h5>
                        <p class="text-muted service-description">{{ $content->service4_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Download Section -->
    <section class="download-app-section">
        <div class="container-fluid px-0 h-100">
            <div class="row g-0 align-items-center h-100">
                <div class="col-md-6 text-white text-center text-md-start p-5 overlay-section d-flex flex-column justify-content-center">
                    <p class="text-warning fw-semibold small mb-2">DOWNLOAD FOR FREE</p>
                    <h2 class="fw-bold display-5 mb-3">{{ $content->app_title ?? 'Get Our Mobile App' }}</h2>
                    <p class="text-light mb-4" style="max-width: 500px;">
                        {{ $content->app_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.' }}
                    </p>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a href="{{ $content->google_play_link ?? '#' }}" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                alt="Google Play" style="height: 50px;">
                        </a>
                        <a href="{{ $content->app_store_link ?? '#' }}" target="_blank">
                            <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                                alt="App Store" style="height: 50px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefit section -->
    <section class="benefits-section text-center py-5">
        <div class="container">
            <p class="text-warning fw-semibold mb-2">MAIN FEATURES</p>
            <h2 class="fw-bold display-5 mb-5">{{ $content->benefits_title ?? 'Why Choose Our Taxi Service' }}</h2>

            <div class="row">
                <!-- Left Side (Fixed Price + No Fee) -->
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <div class="mb-5 text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fa-solid fa-tag benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">{{ $content->benefit1_title ?? 'Fixed Prices' }}</h5>
                        <p class="text-muted">{{ $content->benefit1_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' }}</p>
                    </div>
                    <div class="text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fas fa-money-bill-wave benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">{{ $content->benefit2_title ?? 'No Hidden Fees' }}</h5>
                        <p class="text-muted">{{ $content->benefit2_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' }}</p>
                    </div>
                </div>

                <!-- Center Taxi Image -->
                <div class="col-md-4 d-flex align-items-center justify-content-center mb-4 mb-md-0">
                    <img src="{{asset('web_assets/car.jpg')}}" alt="Taxi Car" class="img-fluid" style="max-height: 300px;" />
                </div>

                <!-- Right Side (100% Pleasure + Nationwide) -->
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <div class="mb-5 text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fa-solid fa-thumbs-up benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">{{ $content->benefit3_title ?? '100% Satisfaction' }}</h5>
                        <p class="text-muted">{{ $content->benefit3_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' }}</p>
                    </div>
                    <div class="text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fa-solid fa-earth-asia benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">{{ $content->benefit4_title ?? 'Wide Coverage' }}</h5>
                        <p class="text-muted">{{ $content->benefit4_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reward Section -->
    <section class="rewards-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Image -->
                <div class="col-md-6 p-0">
                    <img src="{{asset('web_assets/woman.jpg')}}" alt="Rewards" class="img-fluid w-100 h-100 object-fit-cover">
                </div>

                <!-- Right Content -->
                <div class="col-md-6 p-5">
                    <p class="text-uppercase text-warning fw-semibold mb-2">Rewards As You Travel</p>
                    <h2 class="fw-bold display-5 mb-4">{{ $content->rewards_title ?? 'Loyalty Rewards Program' }}</h2>
                    <p class="text-muted mb-4">
                        {{ $content->rewards_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.' }}
                    </p>
                    <a href="#" class="btn btn-warning text-white px-4 py-2 rounded-pill">{{ $content->rewards_button_text ?? 'Join Now' }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial-section">
        <div class="testimonial-overlay">
            <p class="text-warning text-uppercase fw-semibold mb-2">Clients About Us</p>
            <h2 class="fw-bold display-4 mb-4">{{ $content->testimonials_title ?? 'What Our Customers Say' }}</h2>

            <div class="testimonial-scroll-wrapper" id="testimonialSlider">
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">
                        {{$content->testimonial1_text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'}}
                    </p>
                    <h6 class="fw-bold text-warning mt-3">{{$content->testimonial1_author ?? 'John Doe'}}</h6>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">
                        {{$content->testimonial2_text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'}}
                    </p>
                    <h6 class="fw-bold text-warning mt-3">{{$content->testimonial2_author ?? 'Jane Smith'}}</h6>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">
                        {{$content->testimonial3_text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.'}}
                    </p>
                    <h6 class="fw-bold text-warning mt-3">{{$content->testimonial3_author ?? 'Robert Johnson'}}</h6>
                </div>
            </div>

            <div class="testimonial-dots" id="testimonialDots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
@endsection