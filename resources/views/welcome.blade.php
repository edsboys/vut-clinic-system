<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VUT Health Clinic providing medical services to students and staff">
    <meta name="keywords" content="VUT, clinic, healthcare, university medical services">
    <title>VUT Clinic - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
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

        /* --- NEW STYLES FOR BLUE SECTIONS --- */
        .bg-vut-blue-section {
            background-color: #072C5E; /* Fixed: was 'red', now VUT blue */
            color: var(--light-color);
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .bg-vut-blue-section .section-title {
            color: #ffffff;
        }

        .bg-vut-blue-section p {
            color: #ccc;
        }

        .site-header {
            background-color: #201c52;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .ast-above-header-bar {
            background-color: #201c52;
            padding: 15px 0;
        }

        .ast-builder-grid-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .site-header-above-section-left {
            display: flex;
            align-items: center;
        }

        .site-branding {
            display: flex;
            align-items: center;
        }

        .custom-logo {
            height: 60px;
            width: auto;
            max-width: 250px;
        }

        .navbar-custom {
            background-color: #201c52;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            padding: 12px 20px !important;
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #ccc !important;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .btn-vut {
            background-color: var(--primary-color);
            border: none;
            transition: background-color var(--transition-speed);
            color: #fff;
            padding: 12px 25px;
            font-weight: 500;
        }

        .btn-vut:hover {
            background-color: var(--accent-color);
            color: #fff;
        }

        .hero {
            background-color: #072C5E;
            padding: 100px 0;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 600;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: var(--primary-color);
            font-weight: 600;
            text-align: center;
        }

        .service-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
            margin-bottom: 30px;
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon i {
            font-size: 3.5rem;
            color: var(--accent-color);
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .hours {
            background-color:  #072C5E;
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hours-card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
        }

        .hours-list {
            list-style: none;
            padding: 0;
            font-size: 1.1rem;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        /* Main Header Container */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #201c52;
            /* VUT Dark Blue */
            padding: 15px 30px;
        }

        /* Logo Styling */
        .logo img {
            max-height: 50px;
        }

        /* Nav List Styling */
        .nav-links ul {
            display: flex;
            list-style: none;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        /* Regular Links */
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #00aced;
            /* Light blue on hover */
        }

        /* Emergency Button */
        .emergency-btn {
            background-color: #ffc107;
            /* Yellow/Orange */
            color: #000;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .emergency-btn:hover {
            background-color: #ff9800;
            /* Deeper orange on hover */
            color: white;
        }

        .footer {
            background-color: #201c52;
            color: #ccc;
            padding: 60px 0 20px;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color var(--transition-speed);
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .social-icons a {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #ccc;
            transition: color var(--transition-speed);
        }

        .social-icons a:hover {
            color: var(--primary-color);
        }

        .disclaimer {
            font-size: 0.8rem;
            text-align: center;
            margin-top: 30px;
            border-top: 1px solid #444;
            padding-top: 20px;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <header class="site-header" id="masthead">
        <div class="header-container">
            <!-- Left: Logo -->
            <div class="logo">
                <a href="https://vut.ac.za/" class="custom-logo-link" rel="home">
                    <img src="https://vut.ac.za/wp-content/uploads/2025/05/Vaal-University-of-Technology.webp"
                        class="custom-logo" alt="Vaal University of Technology" />
                </a>
            </div>

            <!-- Right: Navigation -->
            <nav class="nav-links">
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a class="emergency-btn" href="http://127.0.0.1:8000/login">Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </header>


    </div>
    </div>


    </header>

    <header class="hero">
        <div class="container">
            <h1>Welcome to the VUT Campus Clinic</h1>
            <p>Your health and well-being are our priority. We are here to provide quality healthcare services to the
                VUT community.</p>

        </div>
    </header>

    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-stethoscope"></i></div>
                        <h3>Primary Healthcare</h3>
                        <p>General consultations for minor ailments, injuries, and day-to-day health concerns.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
                        <h3>Chronic Disease Management</h3>
                        <p>Ongoing care and support for chronic conditions to help you manage your health effectively.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-pills"></i></div>
                        <h3>Reproductive Health</h3>
                        <p>Confidential services including family planning, pap smears, and advice on reproductive
                            health.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-medkit"></i></div>
                        <h3>Emergency Medical Services</h3>
                        <p>Immediate care for medical emergencies with on-site paramedics available.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-hand-holding-medical"></i></div>
                        <h3>HIV/ARV Program</h3>
                        <p>Confidential HIV testing, counseling, and management of Antiretroviral therapy.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-user-friends"></i></div>
                        <h3>Student Counselling Support</h3>
                        <p>Access to professional counseling services for mental and emotional well-being.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hours" class="hours">
        <div class="container">
            <h2 class="section-title text-white">Clinic Hours</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="hours-card">
                        <h3 class="text-center mb-4">Regular Hours</h3>
                        <ul class="hours-list">
                            <li>
                                <span>Monday</span>
                                <span>8:00 AM - 5:00 PM</span>
                            </li>
                            <li>
                                <span>Tuesday</span>
                                <span>8:00 AM - 5:00 PM</span>
                            </li>
                            <li>
                                <span>Wednesday</span>
                                <span>8:00 AM - 5:00 PM</span>
                            </li>
                            <li>
                                <span>Thursday</span>
                                <span>8:00 AM - 5:00 PM</span>
                            </li>
                            <li>
                                <span>Friday</span>
                                <span>8:00 AM - 4:00 PM</span>
                            </li>
                            <li>
                                <span>Saturday</span>
                                <span>9:00 AM - 12:00 PM</span>
                            </li>
                            <li>
                                <span>Sunday</span>
                                <span>Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hours-card">
                        <h3 class="text-center mb-4">Emergency Contact</h3>
                        <div class="text-center mb-4">
                            <i class="fas fa-phone-alt fa-3x mb-3"></i>
                            <h4>24/7 Emergency Line</h4>
                            <h3 class="fw-bold">(016) 950-9111</h3>
                        </div>
                        <p class="text-center">For after-hours emergencies, please call our emergency line. In case
                            of life-threatening emergencies, please proceed to the nearest hospital or call 112.</p>
                        <div class="mt-4">
                            <h5>Nearest Hospital</h5>
                            <p>Vanderbijlpark Medi-Clinic<br>
                                1 Hospital Rd, Vanderbijlpark<br>
                                Phone: (016) 931-5000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="contact" class="footer">
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
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#hours">Operating Hours</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With VUT</h5>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/VUTSGauteng/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/VUT_Online" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/vut_online/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/school/vaal-university-of-technology/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
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