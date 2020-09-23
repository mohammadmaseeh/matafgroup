@extends('layouts.main')
@section('content')
<style>
.card-body canvas{max-width: 100%;width: 100%!important;}
</style>
		<section id="up" class="pos-rel js-parallax-bg" style="background-image:url('{{asset('images/contact/contact-us.jpg')}}')">
				<!-- bg-overlay -->
				<div class="bg-overlay-black"></div>
				<!-- pos-rel start -->
				<div class="pos-rel flex-min-height-100vh">
					<div class="padding-top-bottom-120 container small after-preloader-anim">
						<!-- title start -->
						<h2 class="headline-xl">
							<span class="hidden-box d-block">
								<span class="anim-slide">The Best</span>
							</span>
							<span class="hidden-box d-block">
								<span class="anim-slide tr-delay-01">Agency for</span>
							</span>
							<span class="hidden-box d-block">
								<span class="anim-slide tr-delay-02">Your Businnes</span>
							</span>
						</h2><!-- title end -->
						<p class="subhead-xs text-color-dadada margin-top-20 anim-fade tr-delay-04">Tote bag cornhole pork belly swag vexillologist godard.</p>
					</div>
				</div><!-- pos-rel end -->
			</section><!-- pos-rel end -->

			<!-- contact us start -->
			<section id="down" class="pos-rel section-bg-dark-1">
				<!-- pos-rel start -->
				<div class="pos-rel flex-min-height-100vh">
					<!-- container start -->
					<div class="padding-top-bottom-120 container">
						<!-- content start -->
						<div class="js-scrollanim">
							<h2 class="headline-l">
								<span class="anim-text-double-fill" data-text="Contact">Contact</span>
								<span class="anim-text-double-fill tr-delay-02" data-text="Us">Us</span>
							</h2>
							<p class="body-text-s margin-top-20 anim-text-reveal tr-delay-04">Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial franzen tacos cardigan, offal gluten-free pour-over snackwave plaid four dollar toast.</p>
						</div><!-- content end -->

						<!-- flex-container start -->
						<div class="flex-container padding-top-30">
							<!-- column start -->
							<div class="four-columns column-50-100 padding-top-60">
								<div class="column-r-margin-20 js-scrollanim">
									<p class="headline-xxxxs anim-text-double-fill invert" data-text="Email us">Email us</p>
									<div class="padding-top-20">
										<h6 class="anim-fade tr-delay-01">
											<a href="#" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">info@matafgroup.com</a>
										</h6><br>
										
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns column-50-100 padding-top-60">
								<div class="column-r-margin-20 js-scrollanim">
									<p class="headline-xxxxs anim-text-double-fill invert" data-text="Visit us">Visit us</p>
									<h6 class="list list_margin-1px padding-top-20 text-color-b0b0b0">
										<span class="list__item">
											<span class="d-inline-block hidden-box">
												<span class="subhead-xxs anim-reveal tr-delay-01">Dubai, UAE</span>
											</span>
										</span>
										
									</h6>
									
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns column-50-100 padding-top-60">
								<div class="column-r-margin-20 js-scrollanim">
									<p class="headline-xxxxs anim-text-double-fill invert" data-text="Call us">Call us</p>
									<div class="padding-top-20">
										<h6 class="anim-fade tr-delay-01">
											<a href="#" class="subhead-xxs text-color-dadada text-hover-to-red js-pointer-small">+971-568-568-341</a>
										</h6>
									</div>
								</div>
							</div><!-- column end -->
						</div><!-- flex-container end -->

						
					</div><!-- container end -->
					
				</div><!-- pos-rel end -->
				<!-- container start -->
					<div class="container padding-bottom-100">
						
						<!-- flex-container start -->
						<div class="flex-container padding-top-30 ">
							<!-- column start -->
							<div class="four-columns country_wise_padd">
								<div class="flex-container country_wise">
								<div class="four-columns">
									<div class="card-body">
									  <canvas id="timezone"></canvas>
										  <div class = "date_time">
										  									  
										  <h6>20 Sep 2020</h6>
										</div>
									</div>
								</div>
								<div class="six-columns">
									<div class = "watch_address">
									<h4>UAE(Dubai)</h4>
									<p><i class="fa fa-phone"></i> +971 50 654 2916</p>
									<p><i class="fa fa-envelope"></i> ae@matafgroup.com</p>
									<p><i class="fa fa-globe"></i>  www.matafgroup.com</p>
									</div>
								</div>
								</div>
								
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns country_wise_padd">
								<div class="flex-container country_wise">
								<div class="four-columns">
									<div class="card-body">
									  <canvas id="timezone_india"></canvas>
									  <div class = "date_time">
										  									  
										  <h6>20 Sep 2020</h6>
										</div>
									</div>
								</div>
								<div class="six-columns">
									<div class = "watch_address">
									<h4>India(New Delhi)</h4>
									<p><i class="fa fa-phone"></i>  +91 99779 99777</p>
									<p><i class="fa fa-envelope"></i> in@matafgroup.com</p>
									<p><i class="fa fa-globe"></i>  www.matafgroup.com</p>
									</div>
								</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns country_wise_padd">
								<div class="flex-container country_wise">
								<div class="four-columns">
									<div class="card-body">
									  <canvas id="timezone_ksa"></canvas>
									  <div class = "date_time">
										  									  
										  <h6>20 Sep 2020</h6>
										</div>
									</div>
								</div>
								<div class="six-columns">
									<div class = "watch_address">
									<h4>KSA(Jeddash)</h4>
									<p><i class="fa fa-phone"></i> +966 5492 57550</p>
									<p><i class="fa fa-envelope"></i> sa@matafgroup.com</p>
									<p><i class="fa fa-globe"></i>  www.matafgroup.com</p>
									</div>
								</div>
								</div>
							</div><!-- column end -->
						</div><!-- flex-container end -->
						<div class="flex-container padding-top-30">
							<!-- column start -->
							<div class="four-columns country_wise_padd">
								<div class="flex-container country_wise">
								<div class="four-columns">
									<div class="card-body">
									  <canvas id="timezone_bah"></canvas>
									  <div class = "date_time">
										  									  
										  <h6>20 Sep 2020</h6>
										</div>
									</div>
								</div>
								<div class="six-columns">
									<div class = "watch_address">
									<h4>Bahrain(Manama)</h4>
									<p><i class="fa fa-phone"></i> +966 54 925 7550</p>
									<p><i class="fa fa-envelope"></i> bh@matafgroup.com</p>
									<p><i class="fa fa-globe"></i>  www.matafgroup.com</p>
									</div>
								</div>
								</div>
								
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns country_wise_padd">
								<div class="flex-container country_wise">
								<div class="four-columns">
									<div class="card-body">
									  <canvas id="timezone_mal"></canvas>
									  <div class = "date_time">
										  									  
										  <h6>20 Sep 2020</h6>
										</div>
									</div>
								</div>
								<div class="six-columns">
									<div class = "watch_address">
									<h4>Malaysia(Kula Lampur)</h4>
									<p><i class="fa fa-phone"></i>  +60 19 232 5688</p>
									<p><i class="fa fa-envelope"></i> my@matafgroup.com</p>
									<p><i class="fa fa-globe"></i>  www.matafgroup.com</p>
									</div>
								</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns country_wise_padd">
								<div class="flex-container country_wise">
								<div class="four-columns">
									<div class="card-body">
									  <canvas id="timezone_chi"></canvas>
									  <div class = "date_time">
										  									  
										  <h6>20 Sep 2020</h6>
										</div>
									</div>
								</div>
								<div class="six-columns">
									<div class = "watch_address">
									<h4>China(Sanghai)</h4>
									<p><i class="fa fa-phone"></i> +91 99779 99777</p>
									<p><i class="fa fa-envelope"></i> cn@matafgroup.com</p>
									<p><i class="fa fa-globe"></i>  www.matafgroup.com</p>
									</div>
								</div>
								</div>
							</div><!-- column end -->
						</div><!-- flex-container end -->
						
					</div><!-- container end -->
			</section><!-- contact us end -->
			
			<!-- form section start -->
			<section class="pos-rel bg-img-cover" style="background-image:url('{{asset('images/backgrounds/architecture-buildings-city-fog-373965.jpg')}}')">
				<!-- bg-overlay -->
				<div class="bg-overlay-black"></div>
				<!-- pos-rel start -->
				<div class="pos-rel flex-min-height-100vh">
					<!-- container start -->
					<div class="container small padding-top-bottom-120 form-box">
						<h4 class="headline-xxxxs text-center">Lets Get In Touch!</h4>
						<!-- flex-container start -->
						<form action="" method="post" name="formobrsv" id="send_form" class="flex-container padding-top-90">
							<!-- column start -->
							<div class="four-columns">
								<div class="column-r-margin-10">
									<input type="text" name="first_name" placeholder="Enter your name" id="first_name" required class="form-input js-pointer-small">
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns">
								<div class="column-l-r-margin-5">
									<input type="text" name="last_name" placeholder="Enter your last name" id="last_name" required class="form-input js-pointer-small">
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns">
								<div class="column-l-margin-10">
									<input type="email" name="email" placeholder="Enter your email address" id="email" required class="form-input js-pointer-small">
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="twelve-columns">
								<textarea name="message" placeholder="Enter your message" id="message" required class="form-input js-pointer-small"></textarea>
							</div><!-- column end -->
							<!-- column start -->
							<div class="twelve-columns text-center padding-top-90">
								<button id="send" class="border-btn js-pointer-large">
									<span class="border-btn__inner">submit</span>
									<span class="btn-wait">Wait</span>
									<span class="border-btn__lines-1"></span>
									<span class="border-btn__lines-2"></span>
								</button>
							</div><!-- column end -->
						</form><!-- flex-container end -->
					</div><!-- container end -->

					<!-- alert start -->
					<div class="js-popup-fade" id="m_sent">
						<div class="js-popup">
							<div class="popup-icon">
								<i class="fas fa-check"></i>
							</div>
							<p class="popup-alert headline-xs">
								Thank you!<br>
								Your submission<br>
								has been received!
							</p>
							<div class="js-popup-close js-pointer-large">
								<div class="flip-btn" data-text="Close">Close</div>
							</div>
						</div>
					</div><!-- alert end -->

					<!-- alert start -->
					<div class="js-popup-fade" id="m_err">
						<div class="js-popup">
							<div class="popup-icon">
								<i class="fas fa-times"></i>
							</div>
							<p class="popup-alert headline-xs">Error</p>
							<div class="js-popup-close js-pointer-large">
								<div class="flip-btn" data-text="Close">Close</div>
							</div>
						</div>
					</div><!-- alert end -->
				</div><!-- pos-rel end -->
</section><!-- form section end -->

@endsection