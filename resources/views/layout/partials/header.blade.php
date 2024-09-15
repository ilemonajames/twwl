<?php error_reporting(0);?>
<!-- Loader -->
@if(Route::is(['map-grid','map-list']))
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
	@endif
	<!-- /Loader  -->
<!-- Main Wrapper -->
		<div class="main-wrapper">
			<!-- Top Header -->
			<div class="top-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col">
							<a href="index" class="navbar-brand logo">
								<img src="{{ asset('assets/img/logo.jpg')}}" class="img-fluid" alt="Logo">
							</a>
						</div>
						{{-- <div class="col-2 d-flex align-items-center justify-content-center p-0">
							<h5>GET OFFER UPTO <span>25%</span> ON FIRST BOOKINGS</h5>
						</div> --}}
						<div class="col d-flex align-items-center justify-content-end">
							<ul class="d-flex">
                                <li class="call-div">
									<i class="fas fa-phone-alt"></i>
									<div>
										{{-- <h4>Free Call</h4> --}}
										<h6>+(804) 721-0983</h6>
									</div>
								</li>
								<!-- <li class="flag-div">
									<a class="nav-link dropdown-toggle align-items-center text-center p-0" data-toggle="dropdown" href="#" role="button">
										<figure>
											<img src="assets/img/flags/en.png" alt="" width="21" height="14" class="lang-flag">
											<figcaption> ENG </figcaption>
										</figure>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="javascript:void(0);" class="dropdown-item">
											<img src="assets/img/flags/us.png" alt="" height="16"> ENG
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<img src="assets/img/flags/fr.png" alt="" height="16"> FRA
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<img src="assets/img/flags/es.png" alt="" height="16"> SPN
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											<img src="assets/img/flags/de.png" alt="" height="16"> GER
										</a>
									</div>
								</li> -->
								<li class="header-social-media">
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="#">
										<i class="fab fa-youtube"></i>
									</a>
									{{-- <a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a> --}}
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Top Header -->

			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index" class="menu-logo">
								<img src="{{ asset('assets/img/logo.jpg')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="{{ Request::is('/') ? 'active' : '' }}">
								<a href="{{ route('home') }}"><b>Home</b></a>
							</li>
							<li class="{{ Request::is('about') ? 'active' : '' }}">
								<a href="{{ route('about') }}"><b>About Us</b></a>
							</li>
							<li class="{{ Request::is('our-services') ? 'active' : '' }}">
								<a href="{{ route('services.all') }}"><b>Services</b></a>
							</li>
							<li class="{{ Request::is('find-counselor') ? 'active' : '' }}">
								<a href="#"><b>Mission</b></a>
							</li>
                            <li class="{{ Request::is('find-counselor') ? 'active' : '' }}">
								<a href="#"><b>Blog</b></a>
							</li>
							<li class="{{ Request::is('contact') ? 'active' : '' }}">
								<a href="{{ route('contact') }}"><b>Contact</b></a>
							</li>

							<li class="login-link">
								<a href="login">Login / Signup</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
					@guest

						<li>
							<a href="checkout"><i class="fas fa-shopping-cart"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login">login / Signup </a>
						</li>
                    @else
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="{{ asset('assets/images/users/'.Auth::user()->profile_photo_path) }}" width="31" alt="Darren Elder">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('assets/images/users/'.Auth::user()->profile_photo_path) }}" alt="User Image" class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>{{ Auth::user()->surname." ".Auth::user()->othernames}}</h6>
                                    <p class="text-muted mb-0">{{ Auth::user()->user_type }}</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{ route('client-dashboard')}}">Dashboard</a>
                            <a class="dropdown-item" href="#">Profile Settings</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">  @csrf</form>Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-login" href="login">Book Appointment </a>
                    </li>
                    @endguest

					</ul>
				</nav>
			</header>
			<!-- /Header -->
        </div>

