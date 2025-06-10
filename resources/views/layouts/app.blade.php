<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VUT Health Clinic providing medical services to students and staff">
    <meta name="keywords" content="VUT, clinic, healthcare, university medical services">
    <title>@yield('title', config('app.name', 'VUT Clinic'))</title> {{-- Dynamic title --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        /* Your extensive CSS styles should go here, or even better, in resources/css/app.css */
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --accent-color: #6610f2;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --font-base: 'Poppins', sans-serif;
            --transition-speed: 0.3s;
        }
        body {
            font-family: var(--font-base);
            color: var(--dark-color);
            background-color: var(--light-color);
            line-height: 1.6;
        }
        /* ... All your other custom CSS styles ... */
    </style>
</head>
<body>
    {{-- This header would be your main site navigation, either custom or the Breeze/Jetstream one --}}
    <header class="site-header" id="masthead">
        <div class="header-container">
            <div class="logo">
                <a href="{{ url('/') }}" class="custom-logo-link" rel="home"> {{-- Link to home page --}}
                    <img src="https://vut.ac.za/wp-content/uploads/2025/05/Vaal-University-of-Technology.webp" class="custom-logo" alt="Vaal University of Technology" />
                </a>
            </div>
            <nav class="nav-links">
                <ul>
                    <li><a href="{{ route('services') }}">Services</a></li> {{-- Use named routes --}}
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li> {{-- Assuming 'about' is the route name for about page --}}
                    <li><a class="emergency-btn" href="{{ route('login') }}">Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content') {{-- This is the main content slot for all child views --}}
    </main>

    <footer id="contact" class="footer">
        {{-- Your footer content here, common to all pages --}}
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Private Bag X021, Andries Potgieter Blvd, Vanderbijlpark, 1911, South Africa</p>
                    <p>
                        <strong>General Enquiries:</strong> 016 950 9000<br>
                        <strong>Email:</strong> <a href="mailto:enquiries@vut.ac.za">enquiries@vut.ac.za</a> (General)
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="https://www.vut.ac.za/">VUT Main Website</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li> {{-- Use named routes --}}
                        <li><a href="{{ route('services') }}">Services</a></li> {{-- Use named routes --}}
                        {{-- Note: #hours is an ID, not a route --}}
                        <li><a href="{{ url('/') }}#hours">Operating Hours</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With VUT</h5>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/VUTSGauteng/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/VUT_Online" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/vut_online/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/school/vaal-university-of-technology/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="disclaimer">
                <p>&copy; 2024 VUT Campus Clinic. All Rights Reserved. This is a conceptual website design. Please
                    verify all information with the official VUT Campus Clinic.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>