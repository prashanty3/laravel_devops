<div class="navbar" id="mainNavbar" style="padding: 30px 35px;">
    <div class="logo">
        <img src="{{asset('web_assets/logo.png')}}" alt="GetCab Logo" />
    </div>
    <ul class="navbar-list" id="navMenu">
        <li><a href="{{route('homepage')}}" class="navbar-link active">Home</a></li>
        <li><a href="{{route('about')}}" class="navbar-link">About Us</a></li>
        <li><a href="#" class="navbar-link">Get a Cab</a></li>
        <li><a href="{{route('reviews')}}" class="navbar-link">Reviews</a></li>
        <li><a href="#" class="navbar-link">Our News</a></li>
        <li><a href="{{route('contact')}}" class="navbar-link">Contact Us</a></li>
    </ul>
    <button class="open-btn"><i class="fa-solid fa-bars"></i></button>
    <button class="close-btn"><i class="fa-solid fa-xmark"></i></button>
</div>