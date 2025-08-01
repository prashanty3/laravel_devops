<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taxi Service in Kanpur | 24x7 Cab Booking | Nanditaxi</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Book reliable and affordable taxi services in Kanpur. Available 24/7 for city and outstation rides. Call Nanditaxi now!">
    <meta name="keywords" content="Taxi in Kanpur, Kanpur cab service, 24x7 taxi Kanpur, Nanditaxi, airport transfer Kanpur, outstation taxi">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.nanditaxi.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Taxi Service in Kanpur | 24x7 Cabs – Nanditaxi">
    <meta property="og:description" content="Book affordable taxis in Kanpur with Nanditaxi. Safe, reliable, and available round the clock.">
    <meta property="og:image" content="https://www.nanditaxi.com/assets/og-image.jpg">
    <meta property="og:url" content="https://www.nanditaxi.com/">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Taxi Service in Kanpur | 24x7 Cabs – Nanditaxi">
    <meta name="twitter:description" content="Book reliable and safe taxi rides in Kanpur with Nanditaxi. Available anytime.">
    <meta name="twitter:image" content="https://www.nanditaxi.com/assets/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('web_assets/newcar.ico')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('web_assets/css/style.css')}}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    @isset($content)
        @include('webpage.component.topbar')
        
        <div class="{{ request()->routeIs('homepage') ? 'header' : 'pages-header' }}" id="header">
            @include('webpage.component.navbar')
            
            @if(request()->routeIs('homepage'))
                @yield('hero_content')
            @endif
        </div>
        
        <!-- Main content section that all pages will use -->
        @yield('content')
        
        @include('webpage.component.footer')
    @endisset
    <!-- Scripts -->
    <script>
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            const submitBtn = document.querySelector('#bookingForm button[type="submit"]');
            const submitText = document.getElementById('submitText');
            const spinner = document.getElementById('spinner');
            
            // Show loading state
            submitText.textContent = 'Processing...';
            spinner.classList.remove('d-none');
            submitBtn.disabled = true;
            
            // You could add additional client-side validation here if needed
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{asset('web_assets/js/script.js')}}"></script>
</body>

</html>