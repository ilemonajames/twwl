 {{-- @extends('layout.mainlayout')

@section('content') 
<div class="container">
    <h2>Our Services</h2>
    <ul>
        @foreach($services as $service)
            <li>{{ $service->name }} - ${{ $service->price }}</li>
        @endforeach
        
    </ul>
</div>
@endsection --}}


@extends('layout.mainlayout')
@section('content')		
<!-- Home Banner --
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h6>Unique <strong>cognitive-behavioral</strong> approach</h6>
							<h1>Quality Counseling</h1>		
<p>Mending relationships, fostering mental health, and helping you find balance.</p>
							<div class="mt-4">
								<a href="login" class="btn btn-primary">Get Started</a>
								<!-- <a href="councellor-dashboard" class="btn btn-secondary">Our Services</a> --
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Home Banner -->


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
			
			
			<!-- Banner Bottom --
			<section class="section banner-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="card bg-one">
								<div class="card-widget">
									<h3>Couples Counseling</h3>
									<p>We serve all couples, including LGBTQIA+, Pre-marital, Cohabiting, and Married Couples (husbands and wives).</p>
									<a href="map-list" class="btn btn-primary">See All</a>
								</div>								
							</div>							
						</div>

						<div class="col-md-4">
							<div class="card bg-two">
								<div class="card-widget">
									<h3>NUMEROUS SERVICES</h3>
									<p>You are having problems and need our advice, please contact us quickly via social networks by texting or video calling</p>
									<a href="booking" class="btn btn-primary">Book Now</a>
								</div>								
							</div>							
						</div>

						<div class="col-md-4">
							<div class="card bg-three">
								<div class="card-widget">
									<h3>DIRECT Counseling</h3>
									<p>You are having problems and need our advice, please contact us quickly via social networks by texting or video calling</p>
									<a href="booking" class="btn btn-primary">Book Now</a>
								</div>								
							</div>							
						</div>
					</div>
				</div>
			</section>
			<!-- /Banner Bottom -->			
			  
			<!-- Services -->
			<section class="section section-services">
				<div class="container">
					<div class="section-header text-center">
						<h5>WE PROVIDE WHAT</h5>
						<h2>SERVICES</h2>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-12">
							<!-- Slider -->
							<div class="services-slider slider">
								{{$count = 1;
								}}
                                @foreach($services as $service)
                               
                          
								<!-- Slider Item -->
								<div class="services-item text-center">
									<div class="services-img">
										<a href="map-list">
											<img src="assets/img/services/service{{$count++}}.png" class="img-fluid" alt="Services">
										</a>										
										<div class="service-text">
											<h6>{{ $service->name }} </h6>
											<p>${{ $service->price }}</p>
										</div>
									</div>
								</div>	
                                @endforeach
								<!-- /Slider Item -->
								
								<!-- Slider Item --
								<div class="services-item text-center">
									<div class="services-img">
										<a href="map-list">
											<img src="assets/img/service-02.png" class="img-fluid" alt="Services">
										</a>										
										<div class="service-text">
											<h6>Self-Esteem Issues</h6>
											<p>1, 542 Councilors</p>
										</div>
									</div>
								</div>					
								<!-- /Slider Item -->
								
								<!-- Slider Item --
								<div class="services-item text-center">
									<div class="services-img">
										<a href="map-list">
											<img src="assets/img/service-03.png" class="img-fluid" alt="Services">
										</a>										
										<div class="service-text">
											<h6>Young Adult Intensive</h6>
											<p>1, 542 Councilors</p>
										</div>
									</div>
								</div>						
								<!-- /Slider Item -->
								
								<!-- Slider Item --
								<div class="services-item text-center">
									<div class="services-img">
										<a href="map-list">
											<img src="assets/img/service-04.png" class="img-fluid" alt="Services">
										</a>										
										<div class="service-text">
											<h6>Career Counseling</h6>
											<p>1, 542 Councilors</p>
										</div>
									</div>
								</div>						
								<!-- /Slider Item -->
								
								<!-- Slider Item --
								<div class="services-item text-center">
									<div class="services-img">
										<a href="map-list">
											<img src="assets/img/service-05.png" class="img-fluid" alt="Services">
										</a>										
										<div class="service-text">
											<h6>Chronic Impulsivity</h6>
											<p>1, 542 Councilors</p>
										</div>
									</div>
								</div>					
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>	 
			<!-- /Services -->
			
			<!-- We Always -->
			<section class="section section-we-always">
				<div class="row m-0">
					<div class="col-sm-5 col-lg-7 p-0 sec-hide we-al-img"></div>
					<div class="col-sm-12 col-lg-5 we-always-info">
						<h2>The Way We Love Relationship Counseling</h2>
						{{$aboutUsText}}
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
			<!-- /We Always -->

			<!-- Counsellors -->
			<section class="section section-counsellors">
				<div class="container">
					<div class="section-header text-center">
						<h5>OUR PROFESSIONAL TEAM</h5>
						<h2>Counsellors</h2>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-12">
							<!-- Slider -->
							<div class="counsellors-slider slider">
							
								<!-- Slider Item -->
								<div class="services-item text-center">
									<div class="services-img">
										<img src="assets/img/counsellor-01.png" class="img-fluid" alt="Services">
																			
										<div class="counsellors-widget" onclick="redirectDetail()">
											<div class="counsellor-info">
												<div class="top-sec">
													<div class="star-rate">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="rating-rev">3.2</p>
												</div>
												<div class="bott-sec">
													<a href="councellor-profile">
														Richard Paine
													</a>
													<h5>200 Counciling Done</h5>
													<h6>Self-Esteem Issues</h6>
													<h4>$200 / Hr</h4>
												</div>
											</div>											
										</div>
									</div>
									<a href="booking" class="btn btn-primary mt-4">Book Now</a>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="services-item text-center">
									<div class="services-img">
										<img src="assets/img/counsellor-02.png" class="img-fluid" alt="Services">
										<div class="counsellors-widget" onclick="redirectDetail()">
											<div class="counsellor-info">
												<div class="top-sec">
													<div class="star-rate">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="rating-rev">3.2</p>
												</div>
												<div class="bott-sec">
													<a href="councellor-profile">
														Richard Paine
													</a>
													<h5>200 Counciling Done</h5>
													<h6>Self-Esteem Issues</h6>
													<h4>$200 / Hr</h4>
												</div>
											</div>											
										</div>
									</div>
									<a href="booking" class="btn btn-primary mt-4">Book Now</a>
								</div>				
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="services-item text-center">
									<div class="services-img">
										<img src="assets/img/counsellor-03.png" class="img-fluid" alt="Services">
										<div class="counsellors-widget" onclick="redirectDetail()">
											<div class="counsellor-info">
												<div class="top-sec">
													<div class="star-rate">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="rating-rev">3.2</p>
												</div>
												<div class="bott-sec">
													<a href="councellor-profile">
														Richard Paine
													</a>
													<h5>200 Counciling Done</h5>
													<h6>Self-Esteem Issues</h6>
													<h4>$200 / Hr</h4>
												</div>
											</div>											
										</div>
									</div>
									<a href="booking" class="btn btn-primary mt-4">Book Now</a>
								</div>					
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="services-item text-center">
									<div class="services-img">
										<img src="assets/img/counsellor-04.png" class="img-fluid" alt="Services">
										<div class="counsellors-widget" onclick="redirectDetail()">
											<div class="counsellor-info">
												<div class="top-sec">
													<div class="star-rate">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="rating-rev">3.2</p>
												</div>
												<div class="bott-sec">
													<a href="councellor-profile">
														Richard Paine
													</a>
													<h5>200 Counciling Done</h5>
													<h6>Self-Esteem Issues</h6>
													<h4>$200 / Hr</h4>
												</div>
											</div>											
										</div>
									</div>
									<a href="booking" class="btn btn-primary mt-4">Book Now</a>
								</div>					
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="services-item text-center">
									<div class="services-img">
										<img src="assets/img/counsellor-05.png" class="img-fluid" alt="Services">
										<div class="counsellors-widget" onclick="redirectDetail()">
											<div class="counsellor-info">
												<div class="top-sec">
													<div class="star-rate">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="rating-rev">3.2</p>
												</div>
												<div class="bott-sec">
													<a href="councellor-profile">
														Richard Paine
													</a>
													<h5>200 Counciling Done</h5>
													<h6>Self-Esteem Issues</h6>
													<h4>$200 / Hr</h4>
												</div>
											</div>											
										</div>
									</div>
									<a href="booking" class="btn btn-primary mt-4">Book Now</a>	
								</div>				
								<!-- /Slider Item -->

								<!-- Slider Item -->
								<div class="services-item text-center">
									<div class="services-img">
										<img src="assets/img/counsellor-02.png" class="img-fluid" alt="Services">
										<div class="counsellors-widget" onclick="redirectDetail()">
											<div class="counsellor-info">
												<div class="top-sec">
													<div class="star-rate">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<p class="rating-rev">3.2</p>
												</div>
												<div class="bott-sec">
													<a href="councellor-profile">
														Richard Paine
													</a>
													<h5>200 Counciling Done</h5>
													<h6>Self-Esteem Issues</h6>
													<h4>$200 / Hr</h4>
												</div>
											</div>											
										</div>
									</div>
									<a href="booking" class="btn btn-primary mt-4">Book Now</a>
								</div>				
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>	 
			<!-- /Counsellors -->

			<!-- Reviews -->
			<section class="section section-reviews">
				<div class="container">
					<div class="section-header text-center">
						<h5>What happy clients says</h5>
						<h2>Reviews</h2>
					</div>

					<div class="row mt-8">
						<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="top-img">
									<img src="./assets/img/review-01.png" alt="Review" />
								</div>
								<div class="card-body">
									<h5 class="card-title">Davis Payerf</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat</p>
								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<img src="./assets/img/review-user.png" alt="User" />
											<div>
												<h5>James Foster</h5>
												<h6>Young Adult Intensive</h6>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="star-rate">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="rating-rev">3.2</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="top-img">
									<img src="./assets/img/review-01.png" alt="Review" />
								</div>
								<div class="card-body">
									<h5 class="card-title">Davis Payerf</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat</p>
								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<img src="./assets/img/review-user.png" alt="User" />
											<div>
												<h5>James Foster</h5>
												<h6>Young Adult Intensive</h6>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="star-rate">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="rating-rev">3.2</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="top-img">
									<img src="./assets/img/review-01.png" alt="Review" />
								</div>
								<div class="card-body">
									<h5 class="card-title">Davis Payerf</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volutpat</p>
								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<img src="./assets/img/review-user.png" alt="User" />
											<div>
												<h5>James Foster</h5>
												<h6>Young Adult Intensive</h6>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="star-rate">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="rating-rev">3.2</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Reviews -->

			<!-- Call to Action -->
			<section class="section section-call-to-action">
				<div class="container">
					<div class="call-width">
						<h2>“ If You are in Trouble Need our Help, Contact Us Immediately, We are Support 24/7 ”</h2>
						<a href="map-list" class="btn btn-secondary">OUR SERVICES</a>
					</div>					
				</div>
			</section>
			<!-- /Call to Action -->
			
			<!-- Blog -->
			<section class="section section-blog">
				<div class="container">
					<div class="section-header text-center">
						<h5>Latest News</h5>
						<h2>Blogs</h2>
					</div>

					<div class="row">
						<div class="col-md-7">
							<div class="media">
								<a href="blog-details">
									<img src="./assets/img/blog-01.png" alt="Blog">
								</a>								
								<div class="media-body">
									<h4 class="blog-date">21 jan 2021</h4>
								  	<h5 class="mt-0 blog-heading"> <a href="blog-details"> How to Cope with Coronavirus-Caused Mental Health Concerns</a></h5>
								  	<p class="blog-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volu</p>
								</div>
							</div>
							<div class="media mt-4">
								<a href="blog-details">
									<img src="./assets/img/blog-02.png" alt="Blog">
								</a>
								<div class="media-body">
									<h4 class="blog-date">21 jan 2021</h4>
								  	<h5 class="mt-0 blog-heading"><a href="blog-details"> Is It Important to Say “Please”?</a></h5>
								  	<p class="blog-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volu</p>
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<div class="card">
								<a href="blog-details">
									<img src="./assets/img/blog-03.png" alt="Blog">
								</a>
								<div class="card-body">
									<h4 class="blog-date">19 jan 2021</h4>
								  	<h5 class="card-title blog-heading"><a href="blog-details"> 10 Quarantine Activities That Don’t Involve Watching the News</a></h5>
								  	<p class="blog-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean. Eget volu</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Blog -->
			</div>
	   @endsection
	  