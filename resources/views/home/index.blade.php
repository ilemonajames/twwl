
@extends('layout.mainlayout')
@section('content')

			<div class="slider-container">
				<div class="slider">
					<div class="slide" style="background-image: url({{asset('assets/img/banner/01.png')}});">
						<div class="slide-content">
							<h2>Reconnect, Rebuild, Rekindle Through Love</h2>
							<a href="#" class="action-button">Subscribe Now</a>
						</div>
					</div>
					<div class="slide" style="background-image: url({{asset('assets/img/banner/02.png')}});">
						<div class="slide-content">
							<h2>Love is the Way, Healing is the Journey</h2>
							<a href="#" class="action-button">Subscribe Now</a>
						</div>
					</div>
					<div class="slide" style="background-image: url({{asset('assets/img/banner/03.png')}});">
						<div class="slide-content">
							<h2>Join Us and Let Love Guide Your Way</h2>
							<a href="#" class="action-button">Subscribe Now</a>
						</div>
					</div>
				</div>
				<div class="slider-navigation">
					<div class="prev">&#10094;</div>
					<div class="next">&#10095;</div>
				</div>
			</div>

			<!-- Call to Action -->
			<section class="section section-call-to-action">
				<div class="container">
					<div class="call-width">
						<h2>“ At The Way we love, we offer personalized coaching and counseling services designed to meet the unique
                            needs of each client. Our areas of expertise include ”</h2>
					</div>
				</div>
			</section>
			<!-- /Call to Action -->

			<!-- Blog -->
			<section class="section section-blog">
				<div class="container">
					<div class="section-header text-center">
						<h5>What we do</h5>
						<h2>Services</h2>
					</div>

					<div class="row">
                        @foreach($services as $service)
						<div class="col-md-4" >
							<div class="card">
								<a href="{{ route('services.details',$service->id)}}">
									<img src="{{ asset('guest/images/uploads/' . $service->service_image) }}" style="width: 100%" alt="{{ $service->service_title }}">
								</a>
								<div class="card-body">
								  	<h2 class="card-title blog-heading"><a href="{{ route('services.details',$service->id)}}"> {{ $service->service_title }}</a></h2>
								  	<p class="blog-para">{!! Str::limit(strip_tags($service->service_description),100) !!}</p><br>
                                      <div class="row mt-3 ml-2">
                                        <a class="btn btn-primary btn-sm"
                                        href="{{ route('client.book')}}">Book Now</a> || <a class="btn btn-success btn-sm"
                                            href="{{ route('services.details', $service->id) }}">Learn more</a>
                                    </div>
                                      {{-- <a href="{{ route('client.book')}}" class="btn btn-danger">Book Appointment</a>
                                      <a href="{{ route('services.details',$service->id)}}" class="btn btn-primary" style="float: right">Learn more</a> --}}
								</div>

							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</section>

			<!-- We Always -->
			<section class="section section-we-always">
				<div class="row mb-2">
					<div class="col-sm-5 col-lg-6 p-0 sec-hide we-al-img"></div>
					<div class="col-sm-12 col-lg-6 we-always-info">
						<h2>About Elizabeth Hall</h2>
						<p align="justify">Elizabeth Hall is a dedicated mental health professional with a Master of Arts in Clinical Mental
                            Health Counseling and a Bachelor's Degree in Psychology. She is a Certified Transpersonal
                            Hypnotherapist (CTH) and holds the National Certified Counselor (NCC) credential from the
                            National Board for Certified Counselors (NBCC).</p>

                        <p>Specializing in couples and family therapy, Elizabeth’s educational background equips her to
                            provide systemic and relational therapeutic services for individuals, couples, and families. She
                            integrates her training as a transpersonal hypnotherapist for clients dealing with stress-related
                            issues, utilizing tools like guided imagery to promote deep relaxation and mental well-being... <a href="#">learn more</a></p>
                            {{-- <p>The Way We Love Relationship Counseling is born out of a desire to serve and mend relationships. We strive to help individuals, couples, and families attain mental health through a lifestyle of self-care, identifying value systems that make them happy in their relationships</p> --}}
						<div class="row">
							<div class="col-sm-6 col-md-3 col-lg-6 we-info">
								<h4>400+</h4>
								<hr>
								<h5>Solved Cases</h5>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-6 we-info">
								<h4>1400+</h4>
								<hr>
								<h5>Councellors</h5>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-6 we-info">
								<h4>5400+</h4>
								<hr>
								<h5>Register Users</h5>
							</div>
							<div class="col-sm-6 col-md-3 col-lg-6 we-info">
								<h4>100%</h4>
								<hr>
								<h5>Happy Clients</h5>
							</div>
						</div>
					</div>
				</div>
			</section>

			</div>
	   @endsection
