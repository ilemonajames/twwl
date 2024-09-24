
@extends('layout.mainlayout')
@section('content')

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="slider-container">
            <div class="slider">
                <div class="slide" style="background-image: url({{ asset('assets/img/banner/01.png') }});">
                    <div class="slide-content">
                        <h2>Transform Your Relationships with Professional Counseling</h2>
                        <a href="#" class="action-button">Schedule Appointment</a>
                    </div>
                </div>
                <div class="slide" style="background-image: url({{ asset('assets/img/banner/02.png') }});">
                    <div class="slide-content">
                        <h2>Love is the Way, Healing is the Journey</h2>
                        <a href="#" class="action-button">Schedule Appointment</a>
                    </div>
                </div>
                <div class="slide" style="background-image: url({{ asset('assets/img/banner/03.png') }});">
                    <div class="slide-content">
                        <h2>Join Us and Let Love Guide Your Way</h2>
                        <a href="#" class="action-button">Schedule Appointment</a>
                    </div>
                </div>
            </div>
            <div class="slider-navigation">
                <div class="prev">&#10094;</div>
                <div class="next">&#10095;</div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <section class="section section-call-to-action fade-in">
        <div class="container">
            <div class="call-width">
                <h2>At The Way We Love, we offer personalized coaching and counseling services designed to meet your unique needs.</h2>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section section-blog fade-in">
        <div class="container">
            <div class="section-header text-center">
                <h5>What We Do</h5>
                <h2>Our Services</h2>
            </div>

            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4">
                    <div class="card" style="transition: transform 0.3s, box-shadow 0.3s;">
                        <div class="icon-container" style="text-align: center; margin-bottom: 15px;">
                            <i class="{{ $service->service_icon }}" style="font-size: 40px; color: #333;"></i>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title blog-heading"><a href="{{ route('services.details', $service->id) }}">{{ $service->service_title }}</a></h2>
                            <p class="blog-para">{!! Str::limit(strip_tags($service->service_description), 100) !!}</p><br>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="section section-about fade-in">
        <div class="container">
            <h2>About Us</h2>
            <p>{{ $aboutUsText }}</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section section-testimonials fade-in">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="testimonials">
                <!-- Add testimonial content here -->
                <blockquote>
                    <p>"The counseling sessions have truly helped us restore balance in our relationship."</p>
                    <footer>- John & Jane Doe</footer>
                </blockquote>
                <blockquote>
                    <p>"An amazing service that changed my perspective on relationships!"</p>
                    <footer>- Sarah Lee</footer>
                </blockquote>
                <blockquote>
                    <p>"I feel much more connected with my partner, thanks to the expert guidance."</p>
                    <footer>- Mike & Emma Smith</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup Section -->
    <section class="section section-newsletter fade-in text-center">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Sign up for our newsletter to receive the latest news and updates.</p>
            <form action="#" method="POST">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer Section with Links to Privacy Policy and Terms of Service -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} The Way We Love Counseling. All Rights Reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

@endsection


