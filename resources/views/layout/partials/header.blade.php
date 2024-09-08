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
								<img src="assets/img/logo.jpg" class="img-fluid" alt="Logo">
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
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="{{ Request::is('home') ? 'active' : '' }}">
								<a href="{{ route('home') }}">Home</a>
							</li>
							<li class="{{ Request::is('about') ? 'active' : '' }}">
								<a href="{{ route('about') }}">About Us</a>
							</li>
							<li class="{{ Request::is('services') ? 'active' : '' }}">
								<a href="{{ route('services.index') }}">Services</a>
							</li>
							<li class="{{ Request::is('find-counselor') ? 'active' : '' }}">
								<a href="{{ route('find-counselor') }}">Find a Counselor</a>
							</li>
							<li class="has-submenu">
								<a href="#">Resources <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									{{-- <li><a href="{{ route('podcasts') }}">Podcasts</a></li>
									<li><a href="{{ route('blog.index') }}">Blog</a></li>
									<li><a href="{{ route('videos') }}">Videos</a></li> --}}
								</ul>
							</li>
							<li class="{{ Request::is('register') ? 'active' : '' }}">
								<a href="{{ route('register') }}">Register</a>
							</li>
							<li class="{{ Request::is('login') ? 'active' : '' }}">
								<a href="{{ route('login') }}">Login</a>
							</li>
						
						
							{{-- <li class="has-submenu <?php if($page=="councellor-dashboard" || $page=="appointments" || $page=="schedule-timings" || $page=="my-patients" || $page=="patient-profile" || $page=="chat-councellor" || $page=="invoices" || $page=="councellor-profile-settings" || $page=="reviews" || $page=="councellor-register") { echo 'active'; } ?>">
								<a href="">Councellors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="councellor-dashboard") { echo 'active'; } ?>"><a href="councellor-dashboard">Councellors Dashboard</a></li>
									<li class="<?php if($page=="appointments") { echo 'active'; } ?>"><a href="appointments">Appointments</a></li>
									<li class="<?php if($page=="schedule-timings") { echo 'active'; } ?>"><a href="schedule-timings">Schedule Timing</a></li>
									<li class="<?php if($page=="my-patients") { echo 'active'; } ?>"><a href="my-patients">Patients List</a></li>
									<li class="<?php if($page=="patient-profile") { echo 'active'; } ?>"><a href="patient-profile">Patients Profile</a></li>
									<li class="<?php if($page=="chat-councellor") { echo 'active'; } ?>"><a href="chat-councellor">Chat</a></li>
									<li class="<?php if($page=="invoices") { echo 'active'; } ?>"><a href="invoices">Invoices</a></li>
									<li class="<?php if($page=="councellor-profile-settings") { echo 'active'; } ?>"><a href="councellor-profile-settings">Profile Settings</a></li>
									<li class="<?php if($page=="reviews") { echo 'active'; } ?>"><a href="reviews">Reviews</a></li>
									<li class="<?php if($page=="councellor-register") { echo 'active'; } ?>"><a href="councellor-register">Councellor Register</a></li>
								</ul>
							</li>	  --}}
							{{-- <li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="search" || $page=="councellor-profile" || $page=="booking" || $page=="checkout" || $page=="booking-success" || $page=="patient-dashboard" || $page=="favourites" || $page=="chat" || $page=="profile-settings" || $page=="change-password" || $page=="choose-service" || $page=="health-profile" || $page=="find-councellor" || $page=="patient-dependent" || $page=="my-councellor" || $page=="patient-add-dependent" || $page=="select-payment" || $page=="type-of-visit" || $page=="visit-reason" || $page=="visit-question" || $page=="visit-confirmed") { echo 'active'; } ?>">
								<a href="">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="map-grid" || $page=="map-list") { echo 'active'; } ?>">
										<a href="#">Councellors</a>
										<ul class="submenu">
											<li class="<?php if($page=="map-grid") { echo 'active'; } ?>"><a href="map-grid">PodCast</a></li>
											<li class="<?php if($page=="map-list") { echo 'active'; } ?>"><a href="map-list">Videos</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="search") { echo 'active'; } ?>"><a href="search">Search Councellors</a></li>
									<li class="<?php if($page=="councellor-profile") { echo 'active'; } ?>"><a href="councellor-profile">Councellor Profile</a></li>
									<li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="booking">Booking</a></li>
									<li class="<?php if($page=="checkout") { echo 'active'; } ?>"><a href="checkout">Checkout</a></li>
									<li class="<?php if($page=="booking-success") { echo 'active'; } ?>"><a href="booking-success">Booking Success</a></li>
									<li class="<?php if($page=="patient-dashboard") { echo 'active'; } ?>"><a href="patient-dashboard">Patient Dashboard</a></li>
									@if(Route::is(['patient-add-dependent']))
									<li class="<?php if($page=="patient-add-dependent") { echo 'active'; } ?>"><a href="patient-add-dependent">Patient Add Dependent</a></li>
									@endif
									@if(Route::is(['patient-dependent','my-councellor']))
									<li class="<?php if($page=="patient-dependent") { echo 'active'; } ?>"><a href="patient-dependent">Patient Dependent</a></li>
									@endif
                                    @if(Route::is(['choose-service']))
									<li class="<?php if($page=="choose-service") { echo 'active'; } ?>"><a href="choose-service">Choose Service</a></li>
                                    @endif

                                    @if(Route::is(['visit-reason']))
                                    <li class="<?php if($page=="visit-reason") { echo 'active'; } ?>"><a href="visit-reason.html">Visit Reason</a></li>
                                    @endif
                                    @if(Route::is(['visit-question']))
									<li class="<?php if($page=="visit-question") { echo 'active'; } ?>"><a href="visit-question">Visit Questionnaire</a></li>
									@endif
									@if(Route::is(['visit-confirmed']))
									<li class="<?php if($page=="visit-confirmed") { echo 'active'; } ?>"><a href="visit-confirmed">Visit Confirmed</a></li>
                                    @endif
                                    @if(Route::is(['find-councellor']))
                                    <li class="<?php if($page=="find-councellor") { echo 'active'; } ?>"><a href="find-councellor">Find Counsellor</a></li>
                                    @endif
                                    @if(Route::is(['health-profile']))
                                    <li class="<?php if($page=="health-profile") { echo 'active'; } ?>"><a href="health-profile">Health Profile</a></li>
                                    @endif
                                    @if(Route::is(['select-payment']))
                                    <li class="<?php if($page=="select-payment") { echo 'active'; } ?>"><a href="select-payment">Select Payment</a></li>
                                    @endif
                                    <li class="<?php if($page=="type-of-visit") { echo 'active'; } ?>"><a href="type-of-visit">Visit Type</a></li>
									<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="favourites">Favourites</a></li>
									<li class="<?php if($page=="chat") { echo 'active'; } ?>"><a href="chat">Chat</a></li>
									<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="profile-settings">Profile Settings</a></li>
									<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="change-password">Change Password</a></li>
								</ul>
							</li>	 --}}
							<li class="has-submenu <?php if($page=="voice-call" || $page=="video-call" || $page=="search" || $page=="calendar" || $page=="components" || $page=="invoices" || $page=="invoice-view" || $page=="blank-page" || $page=="login" || $page=="register" || $page=="forgot-password") { echo 'active'; } ?>">
								<a href="">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="voice-call") { echo 'active'; } ?>"><a href="voice-call">Voice Call</a></li>
									<li class="<?php if($page=="video-call") { echo 'active'; } ?>"><a href="video-call">Video Call</a></li>
									<li class="<?php if($page=="search") { echo 'active'; } ?>"><a href="search">Search Councellors</a></li>
									<li class="<?php if($page=="calendar") { echo 'active'; } ?>"><a href="calendar">Calendar</a></li>
									<li class="<?php if($page=="components") { echo 'active'; } ?>"><a href="components">Components</a></li>
									<li class="has-submenu <?php if($page=="invoice-view" || $page=="invoices") { echo 'active'; } ?>">
										<a href="invoices">Invoices</a>
										<ul class="submenu">
											<li class="<?php if($page=="invoices") { echo 'active'; } ?>"><a href="invoices">Invoices</a></li>
											<li class="<?php if($page=="invoice-view") { echo 'active'; } ?>"><a href="invoice-view">Invoice View</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="blank-page") { echo 'active'; } ?>"><a href="blank-page">Starter Page</a></li>
									<li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="login">Login</a></li>
									<li class="<?php if($page=="register") { echo 'active'; } ?>"><a href="register">Register</a></li>
									<li class="<?php if($page=="forgot-password") { echo 'active'; } ?>"><a href="forgot-password">Forgot Password</a></li>
								</ul>
							</li>
							<li class="has-submenu <?php if($page=="blog-list" || $page=="blog-grid" || $page=="blog-details") { echo 'active'; } ?>">
								<a href="">Blog <i class="fas fa-chevron-down"></i></a>
								<!-- <ul class="submenu">
									<li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="blog-list">Blog List</a></li>
									<li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="blog-grid">Blog Grid</a></li>
									<li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="blog-details">Blog Details</a></li>
								</ul> -->
							</li>
							<li class="login-link">
								<a href="login">Login / Signup</a>
							</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
					@if(Route::is(['page']))
						<li class="nav-item contact-item">
							<form class="input-group">
								<input type="text" class="form-control" placeholder="Search service">
								<div class="input-group-append">
								  	<button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
								</div>
							</form>
						</li>
						@endif

						@if(!Route::is(['add-billing','add-prescription','appointment-detail','appointments','blank-page','blog-details','blog-grid','blog-list','booking-success','booking','calendar','change-password','chat-councellor','chat','checkout','choose-service','components','councellor-change-password','councellor-dashboard','councellor-profile-settings','councellor-profile','edit-billing','edit-prescription','favourites','find-councellor','health-profile','invoice-view','invoices','map-grid','map-list','my-account','my-councellor-profile','my-councellor','my-patients','patient-add-dependent','patient-dashboard','patient-dependent','patient-profile','privacy-policy','profile-settings','reviews','schedule-timings','search','select-payment','social-media','term-condition','type-of-visit','video-call','visit-confirmed','visit-question','visit-reason','voice-call','register','login','forgot-password','councellor-register']))
						<li>
							<a href="checkout"><i class="fas fa-shopping-cart"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login">login / Signup </a>
						</li>
						
						@endif
						@if(Route::is(['register','login','forgot-password','councellor-register']))
						<li class="nav-item">
							<a class="nav-link header-login" href="login">login / Signup </a>
						</li>
						@endif
						@if(Route::is(['add-billing','add-prescription','appointment-detail','appointments','blank-page','blog-details','blog-grid','blog-list','booking-success','booking','calendar','change-password','chat-councellor','chat','checkout','choose-service','components','councellor-change-password','councellor-dashboard','councellor-profile-settings','councellor-profile','edit-billing','edit-prescription','favourites','find-councellor','health-profile','invoice-view','invoices','map-grid','map-list','my-account','my-councellor-profile','my-councellor','my-patients','patient-add-dependent','patient-dashboard','patient-dependent','patient-profile','privacy-policy','profile-settings','reviews','schedule-timings','search','select-payment','social-media','term-condition','type-of-visit','video-call','visit-confirmed','visit-question','visit-reason','voice-call']))
						<li class="nav-item contact-item">
							<form class="input-group">
								<input type="text" class="form-control" placeholder="Search service">
								<div class="input-group-append">
								  	<button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
								</div>
							</form>
						</li>
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/counsellors/counsellor-thumb-02.jpg" width="31" alt="Elizabeth Hall">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/counsellors/counsellor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Elizabeth Hall</h6>
										<p class="text-muted mb-0">Counsellor</p>
									</div>
								</div>
								<a class="dropdown-item" href="councellor-dashboard">Dashboard</a>
								<a class="dropdown-item" href="councellor-profile-settings">Profile Settings</a>
								<a class="dropdown-item" href="login">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						@endif
					</ul>
				</nav>
			</header>
			<!-- /Header -->