<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="author" content="www.frebsite.nl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>MatafGroup - Education</title>

	<!-- Custom CSS -->
	<link href="{{asset('front/education/css/styles.css')}}" rel="stylesheet">

	<!-- Custom Color Option -->
	<link href="{{asset('front/education/css/colors.css')}}" rel="stylesheet">

</head>

<body class="red-skin">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader"><div class="preloader"><span></span><span></span></div></div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

	<!-- ============================================================== -->
	<!-- Top header  -->
	<!-- ============================================================== -->
	<!-- Start Navigation -->
	<div class="header {{request()->path() == 'education'?'header-transparent':'header-light'}} change-logo">
		<div class="container">
			<nav id="navigation" class="navigation navigation-landscape">
				<div class="nav-header">
					<a class="nav-brand static-logo" href="#"><img src="{{url('images/logo.png')}}" class="logo" alt="" /></a>
					<a class="nav-brand fixed-logo" href="#"><img src="{{url('images/logo.png')}}" class="logo" alt="" /></a>
					<div class="nav-toggle"></div>
				</div>
				<div class="nav-menus-wrapper" style="transition-property: none;">
					<ul class="nav-menu">
						<li>
							<a href="{{url('/')}}">Home</a>
						</li>
						<li class="{{request()->path() == 'education'?'active':''}}">
							<a href="{{url('/education')}}">Education (STEM)</a>
						</li>
						<li class="{{request()->path() == 'education/courses'?'active':''}}">
							<a href="{{url('/education/courses')}}">Courses & Programs</a>
						</li>
						<li><a href="{{url('contact-us')}}">Contact</a></li>
					</ul>
					<ul class="nav-menu nav-menu-social align-to-right">
						<li class="login_click light">
							<a href="#" data-toggle="modal" data-target="#login">Sign in</a>
						</li>
						<li class="login_click bg-green">
							<a href="#" data-toggle="modal" data-target="#signup">Sign up</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- End Navigation -->
	<div class="clearfix"></div>
	<!-- ============================================================== -->
	<!-- Top header  -->
	@yield('content')
	<!-- ============================== Start Newsletter ================================== -->
	<section class="newsletter theme-bg inverse-theme">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-8 col-sm-12">
					<div class="text-center">
						<h2>Join Thousand of Happy Students!</h2>
						<p>Subscribe our newsletter & get latest news and updation!</p>
						<form class="sup-form">
							<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
							<input type="submit" class="btn btn-theme" value="Get Started">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================================= End Newsletter =============================== -->

	<!-- ============================ Footer Start ================================== -->
	<footer class="dark-footer skin-dark-footer">
		<div>
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-3">
						<div class="footer-widget">
							<img src="{{url('images/logo.png')}}" class="img-footer" alt="" />
							<div class="footer-add">
								<p>INDIA, UAE, KSA, CHINA.</p>
								<p>+91-7078-911316</p>
								<p>info@matafgroup.com</p>
							</div>

						</div>
					</div>
					<div class="col-lg-2 col-md-3">
						<div class="footer-widget">
							<h4 class="widget-title">Education Sector</h4>
							<ul class="footer-menu">
								<li><a href="{{url('education')}}">About Sector</a></li>
								<li><a href="{{url('education/courses')}}">Courses</a></li>
								<li><a href="{{url('contact-us')}}">Contact Us</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2 col-md-3">
						<div class="footer-widget">
							<h4 class="widget-title">Other Sectors</h4>
							<ul class="footer-menu">
								<li><a href="{{url('construction')}}">Construction</a></li>
								<li><a href="{{url('real-estate')}}">Real Estate</a></li>
								<li><a href="{{url('hospitality')}}">Hospitality</a></li>
								<li><a href="{{url('decorate')}}">Innovative Products</a></li>
								<li><a href="{{url('trading')}}">International Trading</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2 col-md-3">
						<div class="footer-widget">
							<h4 class="widget-title">&nbsp;</h4>
							<ul class="footer-menu">
								<li><a href="{{url('consultation')}}">Consultation</a></li>
								<li><a href="{{url('it-marketing')}}">IT & Marketing</a></li>
								<li><a href="{{url('health-wellness')}}">Health & Wellness</a></li>
								<li><a href="{{url('recycling')}}">Recycling</a></li>
								<li><a href="{{url('robotics-agriculture')}}">Robotic Agriculture</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-12">
						<div class="footer-widget">
							<h4 class="widget-title">Download Apps</h4>
							<a href="#" class="other-store-link">
								<div class="other-store-app">
									<div class="os-app-icon">
										<i class="lni-playstore theme-cl"></i>
									</div>
									<div class="os-app-caps">
										Google Play
										<span>Get It Now</span>
									</div>
								</div>
							</a>
							<a href="#" class="other-store-link">
								<div class="other-store-app">
									<div class="os-app-icon">
										<i class="lni-apple theme-cl"></i>
									</div>
									<div class="os-app-caps">
										App Store
										<span>Now it Available</span>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row align-items-center">

					<div class="col-lg-6 col-md-6">
						<p class="mb-0">© 1998-{{date('Y')}} <a href="https://www.matafGroup.com/">MatafGroup - Education Sector</a>.</p>
					</div>

					<div class="col-lg-6 col-md-6 text-right">
						<ul class="footer-bottom-social">
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-twitter"></i></a></li>
							<li><a href="#"><i class="ti-instagram"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<!-- ============================ Footer End ================================== -->

	<!-- Log In Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
			<div class="modal-content" id="registermodal">
				<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
				<div class="modal-body">
					<h4 class="modal-header-title">Log In</h4>
					<div class="login-form">
						<form>

							<div class="form-group">
								<label>User Name</label>
								<input type="text" class="form-control" placeholder="Username">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="*******">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-md full-width pop-login">Login</button>
							</div>

						</form>
					</div>

					<div class="social-login mb-3">
						<ul>
							<li>
								<input id="reg" class="checkbox-custom" name="reg" type="checkbox">
								<label for="reg" class="checkbox-custom-label">Save Password</label>
							</li>
							<li><a href="#" class="theme-cl">Forget Password?</a></li>
						</ul>
					</div>

					<div class="text-center">
						<p class="mt-2">Haven't Any Account? <a href="register.html" class="link">Click here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->

	<!-- Sign Up Modal -->
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
			<div class="modal-content" id="sign-up">
				<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
				<div class="modal-body">
					<h4 class="modal-header-title">Sign Up</h4>
					<div class="login-form">
						<form>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="Full Name">
							</div>

							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username">
							</div>

							<div class="form-group">
								<input type="password" class="form-control" placeholder="*******">
							</div>


							<div class="form-group">
								<button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
							</div>

						</form>
					</div>
					<div class="text-center">
						<p class="mt-3"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->

	<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('front/education/js/jquery.min.js')}}"></script>
<script src="{{asset('front/education/js/popper.min.js')}}"></script>
<script src="{{asset('front/education/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/education/js/select2.min.js')}}"></script>
<script src="{{asset('front/education/js/slick.js')}}"></script>
<script src="{{asset('front/education/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('front/education/js/counterup.min.js')}}"></script>
<script src="{{asset('front/education/js/custom.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>

</html>