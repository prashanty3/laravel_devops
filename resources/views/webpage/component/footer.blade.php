  <footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-about">
                <img src="{{asset('web_assets/logo..png')}}" alt="GetCab Logo" class="footer-logo">
                <p>
                    {{$content->footer_description ?? 'We created our taxi to help you to find the most dependable and highest quality taxi services,
                    anytime and anywhere without any problems.'}}
                </p>
            </div>

            <div class="footer-links">
                <h5>Useful Links</h5>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Get a cab</a>
                    </li>
                    <li>
                        <a href="#">Reviews</a>
                    </li>
                    <li>
                        <a href="#">Our News</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                </ul>
            </div>

            <div class="footer-contact">
                <h5>Contact Info</h5>
                <ul>
                    <li><i class="fas fa-envelope"></i> <a
                            href="mailto:taxiservice@info.com">{{$content->footer_email ?? 'prashant@info.com'}}</a></li>
                    <li><i class="fas fa-phone"></i> {{$content->footer_phone1 ?? '7007294764'}}</li>
                    <li><i class="fas fa-map-marker-alt"></i> {{$content->footer_address ?? 'Kanpur, U.P.'}}</li>
                </ul>
            </div>

            <div class="footer-subscribe">
                <h5>Subscribe to Us</h5>
                <p>Subscribe to Our Newsletters!</p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Enter your e-mail" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <p><strong>{{ $content->copyright_text ?? 'PrashantDeveloper' }}</strong></p>
            <a href="#" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
        </div>
    </div>
</footer>