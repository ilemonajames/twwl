
@extends('layout.mainlayout')
@section('content')
			<!-- Call to Action -->
			<section class="section section-call-to-action">
				<div class="container">
					<div class="call-width">
						<h2>About Us</h2>
					</div>
				</div>
			</section>
			<!-- /Call to Action -->

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

                        <p  align="justify">Specializing in couples and family therapy, Elizabeth’s educational background equips her to
                            provide systemic and relational therapeutic services for individuals, couples, and families. She
                            integrates her training as a transpersonal hypnotherapist for clients dealing with stress-related
                            issues, utilizing tools like guided imagery to promote deep relaxation and mental well-being...</p>
                            {{-- <p>The Way We Love Relationship Counseling is born out of a desire to serve and mend relationships. We strive to help individuals, couples, and families attain mental health through a lifestyle of self-care, identifying value systems that make them happy in their relationships</p> --}}
						<p  align="justify">Elizabeth is also certified by the Virginia Board of Counseling as a Qualified Mental Health
                            Professional for adults and children (QMHP-A/C) and is currently registered with the Board as a
                            Resident in Counseling and Marriage & Family Therapy.<br>
                            At the core of Elizabeth’s work is a commitment to mental health and well-being, and she
                            believes that a person-centered approach is essential in any therapeutic relationship. By
                            respecting the autonomy of her clients and working collaboratively with them, she tailors
                            treatment to meet their unique needs. Her holistic approach considers the mind, body, and spirit
                            connection, ensuring that her clients receive compassionate, individualized care.</p>
					</div>
				</div>
			</section>
			<!-- /We Always --><br><br>

            <section id="feature-section" class="feature-section pad-none pad-bottom-100 broken-top-1500 pad-bottom-md-none ">
                <div class="container">
                    <!-- Row -->
                    <div class="row">
                        <!-- Col -->

                        <!-- Col -->
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="f-box-style-2 text-center">
                                        <div class="f-box-inner div-bg-img b-radius-20" >
                                            <div class="feature-icon margin-bottom-15">
                                                <img src="{{ asset('assets/img/vision.png') }}" width="50" />
                                            </div>
                                            <div class="feature-content mb-3">
                                                <div class="feature-title">
                                                    <h5 class="margin-bottom-15">Vision</h5>
                                                </div>
                                                <p class="mb-0">We envision a world where clients attain mental well-being through self-care practices,
                                                    value-driven relationships, and nurturing bonds. By fostering secure connections and
                                                    balance, we guide our clients toward relationships that are not only fulfilling but also
                                                    deeply satisfying..</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="f-box-style-2 text-center">
                                        <div class="f-box-inner div-bg-img b-radius-20" >
                                            <div class="feature-icon margin-bottom-15">
                                                <img src="{{ asset('assets/img/values.png') }}" width="50" />
                                            </div>
                                            <div class="feature-content mb-3">
                                                <div class="feature-title">
                                                    <h5 class="margin-bottom-15">Core Values</h5>
                                                </div>
                                                <p class="mb-0">Empathy,
                                                    Empathy,
                                                    Growth,
                                                    Balance.</p><br><br><br><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="f-box-style-2 text-center">
                                        <div class="f-box-inner div-bg-img b-radius-20">
                                            <div class="feature-icon margin-bottom-15">
                                                <img src="{{ asset('assets/img/mission.png') }}" width="50" />
                                            </div>
                                            <div class="feature-content mb-3">
                                                <div class="feature-title">
                                                    <h5 class="margin-bottom-15">Mission</h5>
                                                </div>
                                                <p class="mb-0">At The Way we Love Relationship Counseling, our mission is to foster mental health,
                                                    strengthen relationships, and empower individuals, couples, and families to achieve
                                                    deeper connection and lasting relationship satisfaction..</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                </div>
                <!-- Container -->
            </section><br><br>
			{{-- <!-- Reviews -->
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
			</section> --}}
			<!-- /Reviews -->

			<!-- /Blog -->
			</div>
	   @endsection
