@extends('layouts.app')
@section('title', 'Contact Us - VUT Clinic System')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>Contact Us</h1>
        <p class="lead">Get in touch with us for any inquiries or appointments.</p>
        <div class="card">
            <div class="card-header">
                <h4>Send us a Message</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <h4>Contact Information</h4>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">VUT Clinic</h5>
                <p class="card-text">
                    <strong>Address:</strong><br>
                    Vaal University of Technology<br>
                    Andries Potgieter Blvd<br>
                    Vanderbijlpark, 1900<br>
                    South Africa
                </p>

                <p class="card-text">
                    <strong>Phone:</strong> (016) 950-9000<br>
                    <strong>Emergency:</strong> (016) 950-9111<br>
                    <strong>Email:</strong> clinic@vut.ac.za
                </p>

                <h6>Operating Hours:</h6>
                <ul class="list-unstyled">
                    <li><strong>Monday - Friday:</strong> 8:00 AM - 5:00 PM</li>
                    <li><strong>Saturday:</strong> 8:00 AM - 1:00 PM</li>
                    <li><strong>Sunday:</strong> Closed</li>
                    <li><strong>Emergency:</strong> 24/7</li>
                </ul>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Location</h5>
            </div>
            <div class="card-body">
                <div class="bg-light p-4 text-center" style="height: 200px;">
                    <p>Map will be displayed here</p>
                    <small class="text-muted">VUT Campus Location</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection