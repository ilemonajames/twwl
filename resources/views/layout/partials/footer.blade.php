<!-- Footer -->
			<footer class="footer">
				<div class="footer-top">
					<div class="container">
						<h4>Sign Up For Newsletter</h4>
						<p>Check out Join 12.000+ Subscribers and get a new discount coupon </p>
						<form method="post" action="{{ route('subscribe')}}" class="input-group">
                            @csrf
							<input type="email" name="email" class="form-control" placeholder="Enter your email...">

							<div class="input-group-append">
								<button class="btn btn-secondary" type="submit">
									<i class="fas fa-location-arrow"></i> Subscribe Now
								</button>
							</div><br>

						</form>
						<ul class="mt-4 mb-4">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-youtube"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<ul>
							<li>
								<a href="{{ route('home')}}">Home</a>
							</li>
                            <li>
								<a href="{{ route('about')}}">About</a>
							</li>
							<li>
								<a href="{{ route('services.all')}}">Services</a>
							</li>
							<li>
								<a href="{{ route('login')}}">Login</a>
							</li>
							<li>
								<a href="{{ route('register')}}">Register</a>
							</li>
							<li>
								<a href="#">Blogs</a>
							</li>
                            <li>
								<a href="{{ route('contact')}}">Contact</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="copy-rights mt-5">
					<p>All rights reserver @ The Way We Love © 2024 . All Rights Reserved</p>
				</div>
			</footer>
			<!-- /Footer -->
