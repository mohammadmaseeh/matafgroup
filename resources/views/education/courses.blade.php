@extends('education.layout')
@section('content')
<!-- ============================ Page Title Start================================== -->
<section class="page-title theme-bg inverse-theme">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcrumbs-wrap">
					<h1 class="breadcrumb-title text-white">Our Programs & Development Areas</h1>
					<p>&nbsp;</p>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Find Courses</li>
						</ol>
					</nav>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- ============================ Page Title End ================================== -->

<section>
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<div class="sec-heading center">
					<p>Programs</p>
					<h2><span class="theme-cl">Age Groups</span></h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="edu_cat_2 cat-9">
					<div class="edu_cat_icons">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/health.png')}}" class="img-fluid" alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Kindergarten</a></h4>
						<ul class="meta">
							<li class="video"><i class="ti-video-clapper"></i>0-2 Years</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="edu_cat_2 cat-3">
					<div class="edu_cat_icons">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/career.png')}}" class="img-fluid" alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Nursery School</a></h4>
						<ul class="meta">
							<li class="video"><i class="ti-video-clapper"></i>3-5 Years</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="edu_cat_2 cat-4">
					<div class="edu_cat_icons">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/python.png')}}" class="img-fluid" alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Primary School</a></h4>
						<ul class="meta">
							<li class="video"><i class="ti-video-clapper"></i>6-9 Years</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="edu_cat_2 cat-10">
					<div class="edu_cat_icons">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/designer.png')}}" class="img-fluid" alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Middle School</a></h4>
						<ul class="meta">
							<li class="video"><i class="ti-video-clapper"></i>10-13 Years</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="edu_cat_2 cat-6">
					<div class="edu_cat_icons">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/speaker.png')}}" class="img-fluid" alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">High School</a></h4>
						<ul class="meta">
							<li class="video"><i class="ti-video-clapper"></i>14-16 Years</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="edu_cat_2 cat-7">
					<div class="edu_cat_icons">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/photo.png')}}" class="img-fluid" alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Intermediate</a></h4>
						<ul class="meta">
							<li class="video"><i class="ti-video-clapper"></i>17-19 Years</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ============================ Featured Courses Start ================================== -->
<section class="gray">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<div class="sec-heading center">
					<p>Other Programs</p>
					<h2>under <span class="theme-cl">STEM</span></h2>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<!-- Cource Grid 1 -->
			<div class="col-lg-3 col-md-3">
				<div class="education_block_grid style_2">

					<div class="education_block_thumb n-shadow">
						<a href="#"><img src="{{url('front/education/img/co-1.jpg')}}" class="img-fluid" alt=""></a>
					</div>

					<div class="education_block_body">
						<h4 class="bl-title"><a href="#">Fetal Learning</a></h4>
					</div>

				</div>
			</div>

			<!-- Cource Grid 1 -->
			<div class="col-lg-3 col-md-3">

				<div class="education_block_grid style_2">

					<div class="education_block_thumb n-shadow">
						<a href="#"><img src="{{url('front/education/img/co-2.jpg')}}" class="img-fluid" alt=""></a>
					</div>

					<div class="education_block_body">
						<h4 class="bl-title"><a href="#">Etiquette Classes</a></h4>
					</div>
				</div>
			</div>

			<!-- Cource Grid 1 -->
			<div class="col-lg-3 col-md-3">
				<div class="education_block_grid style_2">

					<div class="education_block_thumb n-shadow">
						<a href="#"><img src="{{url('front/education/img/co-3.jpg')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="education_block_body">
						<h4 class="bl-title"><a href="#">Career Counselling</a></h4>
					</div>
				</div>
			</div>

			<!-- Cource Grid 1 -->
			<div class="col-lg-3 col-md-3">
				<div class="education_block_grid style_2">

					<div class="education_block_thumb n-shadow">
						<a href="#"><img src="{{url('front/education/img/co-4.jpg')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="education_block_body">
						<h4 class="bl-title"><a href="#">Bride-to-be Classes</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ============================ Featured Courses End ================================== -->

<!-- ========================== Featured Category Section =============================== -->
<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<div class="sec-heading center">
					<p>Popular Category</p>
					<h2><span class="theme-cl">Hot</span> Areas of Development</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="edu_cat_2 cat-1">
					<div class="edu_cat_icons"  style="min-width: 80px;">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/content.png')}}" class="img-fluid" alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Social Development</a></h4>
						<p>
							Such an educational program
							helps the kids in their verbal and
							non-verbal language skills. ability
							to express themselves and to be
							able to handle adverse social
							settings
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="edu_cat_2 cat-2">
					<div class="edu_cat_icons" style="min-width: 80px;">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/briefcase.png')}}" class="img-fluid"  alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Cognitive Development</a></h4>
						<p>
							STEM takes care of this as well,
							which we in broad terms refer to
							as 'Intelligence' which is basically
							our ability to think, create, evolve,
							and use learning to solve problems
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="edu_cat_2 cat-3">
					<div class="edu_cat_icons" style="min-width: 80px;">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/career.png')}}" class="img-fluid"  alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Emotional Development</a></h4>
						<p>
							Such a style of learning helps instill
							in kids a sense of confidence, selfesteam, maturity, self-regulation,
							moral values, resilience, and most
							importantly empathy.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="edu_cat_2 cat-4">
					<div class="edu_cat_icons" style="min-width: 80px;">
						<a class="pic-main" href="#"><img src="{{url('front/education/img/python.png')}}" class="img-fluid"  alt="" /></a>
					</div>
					<div class="edu_cat_data">
						<h4 class="title"><a href="#">Physical Development</a></h4>
						<p>
							Our program promotes physical
							activities as an integral process to
							learning. A healthy body is as
							important as a healthy mind.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========================== Featured Category Section =============================== -->
@endsection
