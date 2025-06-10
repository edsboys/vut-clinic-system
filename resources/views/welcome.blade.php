@extends('layouts.app')

@section('title', 'Welcome to VUT Clinic') {{-- Dynamic title for the home page --}}

@section('content')
    <header class="hero">
        <div class="container">
            <h1>Welcome to the VUT Campus Clinic</h1>
            <p>Your health and well-being are our priority. We are here to provide quality healthcare services to the
                VUT community.</p>
            {{-- Consider adding a button here like <a href="{{ route('show.login') }}" class="btn btn-vut">Book Appointment</a> --}}
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
                            <li><span>Monday</span><span>8:00 AM - 5:00 PM</span></li>
                            <li><span>Tuesday</span><span>8:00 AM - 5:00 PM</span></li>
                            <li><span>Wednesday</span><span>8:00 AM - 5:00 PM</span></li>
                            <li><span>Thursday</span><span>8:00 AM - 5:00 PM</span></li>
                            <li><span>Friday</span><span>8:00 AM - 4:00 PM</span></li>
                            <li><span>Saturday</span><span>9:00 AM - 12:00 PM</span></li>
                            <li><span>Sunday</span><span>Closed</span></li>
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
@endsection