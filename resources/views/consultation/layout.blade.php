<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>MatafGroup - Consultation</title>
	<!-- favicon -->
	<link rel="icon" href="{{asset('front/consultation/img/favicon.png')}}" sizes="20x20" type="image/png" />
	<!-- Nice select -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/nice-select.css')}}" />
	<!-- animate -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/animate.css')}}" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/bootstrap.min.css')}}" />
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/magnific-popup.css')}}" />
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/owl.carousel.min.css')}}" />
	<!-- Slick -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/slick.css')}}" />
	<link rel="stylesheet" href="{{asset('front/consultation/css/slick-theme.css')}}" />
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/font-awesome.min.css')}}" />
	<!-- flaticon -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/flaticon.css')}}" />
	<!-- Themify icon -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/themify-icons.css')}}" />
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/style.css')}}" />
	<!-- responsive Stylesheet -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/responsive.css')}}" />
	<!--Codingeek -->
	<link rel="stylesheet" href="{{asset('front/consultation/css/codingeek.css')}}">
</head>
<body>
<!-- preloader area start -->
<div class="preloader" id="preloader">
	<div class="preloader-inner">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
</div>
<!-- preloader area end -->
<!-- search Popup -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
	<form action="http://codingeek.net/html/quray/index.html" class="search-form">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search....." />
		</div>
		<button type="submit" class="submit-btn">
			<i class="ti-search"></i>
		</button>
	</form>
</div>
<div class="info-popup"></div>
<div class="info-popup-content">
	<button type="button" class="info-popup-content_close">
		<span class="ti-close"></span>
	</button>
	<div class="row no-gutters">
		<div class="col-lg-7">
			<div class="info-popup-content__img info-popup-content__img--one"></div>
		</div>
		<div class="col-lg-5">
			<div class="info-popup-content__text">
				<div class="info-popup-content__text-header">
					<h3 class="info-popup-content__title">Opening Hours</h3>
				</div>
				<div class="info-popup-content__text-body">
					<span class="info-popup-content__text-is">monday <span class="divide"></span> sunday</span>
					<span class="info-popup-content__text-is">8.00 am <span class="divide"></span> 9.00 pm</span>
				</div>
				<div class="info-popup-content__text-footer">
					<span class="info-popup-content__text-is">+880 046 292 02</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--info-popup-->

<div class="location-popup"></div>
<div class="location-popup-content">
	<button type="button" class="location-popup-content_close">
		<span class="ti-close"></span>
	</button>
	<div class="row no-gutters">
		<div class="col-lg-7">
			<div id="map"></div>
		</div>
		<div class="col-lg-5">
			<div class="location-popup-content__text">
				<div class="location-popup-content__text-header">
					<h3 class="location-popup-content__title">Address</h3>
				</div>
				<div class="location-popup-content__text-body">
					<span class="location-popup-content__text-is">
						2, Ave Manchester, Lorem <br />
						ipsum St, Rio Danubin
					</span>
				</div>
				<div class="location-popup-content__text-footer">
					<a href="#" class="button button__secondary button__secondary--rounded">Find Us</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--search-popup-->

<div class="message-popup"></div>
<div class="message-popup-content">
	<button type="button" class="message-popup-content_close">
		<span class="ti-close"></span>
	</button>
	<div class="row no-gutters">
		<div class="col-lg-7">
			<div class="message-popup-content__text text-left pl-lg-5">
				<div class="message-popup-content__text-header">
					<h3 class="message-popup-content__title mb-3">
						You have a question for us?
					</h3>
					<span class="message-popup-content__text-is">
						leave your message below or email us at info@quray.com
					</span>
				</div>
				<div class="message-popup-content__text-body">
					<form action="#">
						<div class="row">
							<div class="col-12 t-mb-18">
								<input type="text" placeholder="Email address" class="contact-form__input"/>
							</div>
							<div class="col-12 ">
								<textarea name="Message" placeholder="Message" class="contact-form__textarea t-mb-18" cols="30" rows="2"></textarea>
								<a href="#" class="button button__secondary button__secondary--rounded">Send</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="message-popup-content__img message-popup-content__img--three"></div>
		</div>
	</div>
</div>
<!--message-popup-->
@yield('content')
<section class="qry-contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5">
				<div class="section-head">
					<span class="section-head__style-text">Get in touch</span>
					<h2 class="section-head__head">We Are Here To Help Your Business</h2>
				</div>
				<!--section-title-->
			</div>
			<!--column-->
		</div>
		<!--row-->

		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="contact-form">
					<form action="#" name="registration">
						<div class="row justify-content-center">
							<div class="col-xl-6 col-lg-6 col-md-6 t-mg-50">
								<input type="text" placeholder="Name" class="contact-form__input" name="name"/>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 t-mb-50">
								<input type="text" placeholder="Email address" class="contact-form__input" name="email"/>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 t-mb-50">
								<select class="contact-form__select">
									<option data-display="Select">Nothing</option>
									<option value="1">Some option</option>
									<option value="2">Another option</option>
									<option value="3">A disabled option</option>
									<option value="4">Potato</option>
								</select>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 t-mb-50">
								<input type="text" placeholder="Phone number (optional)" class="contact-form__input" name="phone"/>
							</div>
							<div class="col-xl-12 t-mb-45">
								<textarea name="message" placeholder="Message" class="contact-form__textarea form-control" cols="30" data-required="text" rows="2"></textarea>
							</div>
							<div class="btn-wrapper desktop-center">
								<button type="submit" class="btn button button__secondary button__secondary--rounded">Send Message</button>
							</div>
						</div>
					</form>
				</div>
				<!--contact-form-->
			</div>
			<!--column-->
		</div>
		<!--row-->
	</div>
	<!--container-->
</section>
<!--contact-->

<footer class="footer-area">
	<div class="footer-top padding-top-100 padding-bottom-65">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="footer-widget widget">
						<div class="about_us_widget">
							<div class="logo-wrapper">
								<a href="{{url('/consultation')}}" class="logo">
									<img src="{{asset('images/logo.png')}}" alt="logo" />
								</a>
							</div>
							<p class="t-mt-50 about-info">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Saepe nam doloribus perferendis blanditiis omnis aliquam
							</p>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-sm-6">
					<div class="footer-widget widget widget_nav_menu">
						<h4 class="widget-title">Consultation</h4>
						<ul class="t-mt-50">
							<li><a href="#">About</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Projects</a></li>
							<li><a href="#">Clients</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-sm-6">
					<div class="footer-widget widget widget_nav_menu">
						<h4 class="widget-title">Other Sectors</h4>
						<ul class="t-mt-50">
							<li><a href="{{url('construction')}}">Construction</a></li>
							<li><a href="{{url('real-estate')}}">Real Estate</a></li>
							<li><a href="{{url('hospitality')}}">Hospitality</a></li>
							<li><a href="{{url('decorate')}}">Innovative Products</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-sm-6">
					<div class="footer-widget widget ">
						<h4>&nbsp;</h4>
						<ul class="t-mt-50">
							<li><a href="{{url('education')}}">Education</a></li>
							<li><a href="{{url('it-marketing')}}">IT & Marketing</a></li>
							<li><a href="{{url('health-wellness')}}">Health & Wellness</a></li>
							<li><a href="{{url('recycling')}}">Recycling</a></li>
							<li><a href="{{url('robotic-agriculture')}}">Robotic Agriculture</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-sm-12 col-lg-6">
					<div class="footer-widget widget ">
						<h4 class="widget-title">Get our newsletter</h4>
						<div class="t-mt-50">
							<p class="newsletter-group__text">
								Subscribe our weekly newsletter you can get last out date
								about digital marketing and design tips.
							</p>
							<form action="#">
								<div class="newsletter-group newsletter-group--footer">
									<input type="text" placeholder="Email Adderess" class="newsletter-group__input"/>
									<a href="#" class="button button__submit">Subscribe</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-area">
		<div class="container footer-area__container">
			<div class="row">
				<div class="col-xl-12">
					<div class="copyright-area-inner d-flex justify-content-between">
						<div class="qry-copy">
							&copy; MatafGroup 2008-{{date('Y')}} All rights reserved.
						</div>
						<ul class="social-list">
							<li class="social-list__item">
								<a href="https://twitter.com/codingeeknet" target="_blank" class="social-list__link"><span class="fa fa-twitter"></span></a>
							</li>
							<li class="social-list__item">
								<a href="https://www.facebook.com/codingeek.net/" target="_blank" class="social-list__link"><span class="fa fa-facebook"></span></a>
							</li>
							<li class="social-list__item">
								<a href="https://www.youtube.com/channel/UCz1tS-oRzKeElBOd6pIjgLQ?reload=9" target="_blank" class="social-list__link"><span class="fa fa-youtube"></span></a>
							</li>
							<li class="social-list__item">
								<a href="https://www.linkedin.com/company/codingeek/about/" target="_blank" class="social-list__link"><span class="fa fa-linkedin"></span></a>
							</li>
							<li class="social-list__item">
								<a href="https://www.instagram.com/codingeeknet/" target="_blank" class="social-list__link"><span class="fa fa-instagram"></span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
	<span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<!-- jquery -->
<script src="{{asset('front/consultation/js/jquery-2.2.4.min.js')}}"></script>
<!-- popper -->
<script src="{{asset('front/consultation/js/popper.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('front/consultation/js/bootstrap.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('front/consultation/js/jquery.magnific-popup.js')}}"></script>
<!-- wow -->
<script src="{{asset('front/consultation/js/wow.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('front/consultation/js/owl.carousel.min.js')}}"></script>
<!-- waypoint -->
<script src="{{asset('front/consultation/js/waypoints.min.js')}}"></script>
<!-- counterup -->
<script src="{{asset('front/consultation/js/jquery.counterup.min.js')}}"></script>
<!-- imageloaded -->
<script src="{{asset('front/consultation/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Slick -->
<script src="{{asset('front/consultation/js/slick.min.js')}}"></script>
<!-- Slick Animation -->
<script src="{{asset('front/consultation/js/slick-animation.js')}}"></script>
<!-- Nice Select -->
<script src="{{asset('front/consultation/js/jquery.nice-select.min.js')}}"></script>
<!-- Map -->
<script src="{{asset('front/consultation/js/goolg-map-activate.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVyNXoXHkqAwBKJaouZWhHPCP5vg7N0HQ&amp;callback=initMap" async defer></script>
<!-- Progress Bar -->
<script src="{{asset('front/consultation/js/rprogressbar.min.js')}}"></script>
<!-- Form validation -->
<script src="{{asset('front/consultation/js/jquery.validate.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('front/consultation/js/main.js')}}"></script>
<!-- codingeek -->
<script src="{{asset('front/consultation/js/codingeek.js')}}"></script>
</body>
</html>