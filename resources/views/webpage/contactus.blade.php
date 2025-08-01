@extends('webpage.dashboard')
@section('title', 'Taxi Service in Kanpur | 24x7 Cab Booking | Nanditaxi')
@section('content')
    <!-- About Hero section -->

    <div class="about" id="about">
        <div class="hero-section">
            <div class="hero-content">
                <div class="breadcrumb">HOME / CONTACTS</div>
                <div class="hero-title">CONTACTS</div>
            </div>
        </div>
    </div>
    <section class="contact-section">
        <h4>How can we help you?</h4>
        <h2>Have a Questions?</h2>
        <p>
            If you have any comments, suggestions or questions, please do not hesitate to contact us.
            Our high-quality office staff will help you and answer all your questions.
        </p>

        <div class="contact-boxes">
            <div class="contact-box" style="border-right: 2px solid rgba(9, 9, 9, 0.1);">
                <div class="contact-icon">
                    <i class="fa-solid fa-map-location" style="font-size: 24px; color: white;"></i>
                </div>
                <div class="contact-title">Our Address</div>
                <div class="contact-info">
                    Kanpur,<br>
                    208020
                </div>
            </div>

            <div class="contact-box" style="border-right: 2px solid rgba(9, 9, 9, 0.1);">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone" style="font-size: 24px; color: white;"></i>
                </div>
                <div class="contact-title">Our Phones</div>
                <div class="contact-info">
                    700 729 4764<br>
                    700 729 4764
                </div>
            </div>

            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fa-solid fa-comment" style="font-size: 24px; color: white;"></i>
                </div>
                <div class="contact-title">Our Mail</div>
                <div class="contact-info">
                    prashantinfo@info.com
                </div>
            </div>
        </div>
    </section>
    <div class="contact" id="contact">
        <section class="form-section">
            <form>
                <div class="left-column">
                    <div class="row">
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Your E-mail">
                    </div>
                    <div class="row">
                        <input type="text" placeholder="Your Phone">
                        <input type="text" placeholder="Your City">
                    </div>
                </div>

                <div class="right-column">
                    <textarea placeholder="Your Question"></textarea>
                </div>

                <div class="checkbox-group" style="width: 100%;">
                    <label>
                        <input type="checkbox">
                        I agree that my submitted data is being collected and stored.
                    </label>
                    <br>
                    <button class="submit-btn" type="submit">Send a Request</button>
                </div>
            </form>
        </section>
    </div>

    <section class="map-section">
        <h2>Our Location</h2>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228624.5618574008!2d80.17322501774558!3d26.447386207643437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c4770b127c46f%3A0x1778302a9fbe7b41!2sKanpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1753979555941!5m2!1sen!2sin"
                allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

@endsection