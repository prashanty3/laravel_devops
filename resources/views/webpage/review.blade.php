@extends('webpage.dashboard')
@section('title', 'Taxi Service in Kanpur | 24x7 Cab Booking | Nanditaxi')
@section('content')
    <!-- About Hero section -->

     <div class="about" id="about">
        <div class="hero-section">
        <div class="hero-content">
            <div class="breadcrumb">HOME / REVIEWS</div>
            <div class="hero-title">REVIEWS</div>
        </div>
        </div>
    </div>

    <!-- Testimonial -->
    <section class="testimonial-section text-center py-5" style="background-color: rgb(145, 143, 143); background-image: none;">
        <div class="testimonial-overlay" style="background-color: rgb(145, 143, 143);">
            <p class="text-warning text-uppercase fw-semibold mb-2">Clients About Us</p>
            <h2 class="fw-bold display-4 mb-4 text-dark">Testimonials</h2>

            <div class="testimonial-scroll-wrapper" id="testimonialSlider">
                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">
                        We used your taxi service for the first time after seeing good reports online. Very
                        efficient, and smart driver with a very clean vehicle.
                    </p>
                    <h6 class="fw-bold text-warning mt-3">SHELBY BLAKE, NEW YORK</h6>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">
                        Prompt and professional service. I always book your taxi when I travel to the airport. Great
                        team!
                    </p>
                    <h6 class="fw-bold text-warning mt-3">JAMES CARTER, CHICAGO</h6>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">
                        Fast, clean, reliable. Easy to book and excellent pricing. Highly recommended!
                    </p>
                    <h6 class="fw-bold text-warning mt-3">ANNA LEE, TORONTO</h6>
                </div>
            </div>

            <div class="testimonial-dots" id="testimonialDots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

     <!-- Benefit section -->
    <section class="benefits-section text-center py-5">
        <div class="container">
            <p class="text-warning fw-semibold mb-2">MAIN FEATURES</p>
            <h2 class="fw-bold display-5 mb-5">Our Benefits</h2>

            <div class="row">
                <!-- Left Side (Fixed Price + No Fee) -->
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <div class="mb-5 text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fa-solid fa-tag benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">Fixed Price</h5>
                        <p class="">The fixed fare is set in every taximeter as the main tariff.</p>
                    </div>
                    <div class="text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fas fa-money-bill-wave benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">No Fee</h5>
                        <p class="">We guarantee fixed price and you should not pay tips.</p>
                    </div>
                </div>

                <!-- Center Taxi Image -->
                <div class="col-md-4 d-flex align-items-center justify-content-center mb-4 mb-md-0">
                    <img src="assets/car.jpg" alt="Taxi Car" class="img-fluid" style="max-height: 300px;" />
                </div>

                <!-- Right Side (100% Pleasure + Nationwide) -->
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <div class="mb-5 text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fa-solid fa-thumbs-up benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">100% Pleasure</h5>
                        <p class="">We have a lot of standing customers and high ratings.</p>
                    </div>
                    <div class="text-center d-flex flex-column align-items-center">
                        <div class="icon-circle mb-3">
                            <i class="fa-solid fa-earth-asia benefit-icon"></i>
                        </div>
                        <h5 class="fw-bold">Nationwide</h5>
                        <p class="">Our application is the easiest way to book a taxi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section py-5 text-center" style="background-color: #f8f9fa;">
        <div class="container" style="padding: 55px 0px;">
            <p class="section-subtitle text-warning fw-semibold">WHAT WE OFFER</p>
            <h2 class="section-title fw-bold">Welcome To Us</h2>
            <p class="section-description mx-auto mb-5" style="max-width: 700px;">
                We created our taxi to help you to find the most dependable and highest quality taxi services, anytime
                and anywhere. All our drivers are uniformed and fully licensed.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-map-location-dot fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">Address Pickup</h5>
                        <p class="">We always pick up our clients on time, 24/7 availability.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-plane-departure fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">Airport Transfer</h5>
                        <p class="">GetCab specialized in 24 hours airport transfer service.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-route fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">Long Distance</h5>
                        <p class="">We offer you a long distance taxi service to anywhere.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-box px-3">
                        <div class="icon mb-3">
                            <i class="fa-solid fa-taxi fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold service-title">Taxi Tours</h5>
                        <p class=" service-description">We offer taxi tours of various durations and
                            complexity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Download Section -->

    <section class="download-app-section">
        <div class="container-fluid px-0 h-100">
            <div class="row g-0 align-items-center h-100">
                <div
                    class="col-md-6 text-white text-center text-md-start p-5 overlay-section d-flex flex-column justify-content-center">
                    <p class="text-warning fw-semibold small mb-2">DOWNLOAD FOR FREE</p>
                    <h2 class="fw-bold display-5 mb-3">Download the App</h2>
                    <p class="text-light mb-4" style="max-width: 500px;">
                        Upload our own taxi application to your smartphone and discover just how easy booking a taxi can
                        be. With this application, you can order a taxi quickly.
                    </p>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a href="#">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                alt="Google Play" style="height: 50px;">
                        </a>
                        <a href="#">
                            <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                                alt="App Store" style="height: 50px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection