@extends('education.layout')
@section('content')
<!-- ============================ Page Title Start================================== -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">

				<div class="breadcrumbs-wrap">
					<h1 class="breadcrumb-title">Full Width Courses</h1>
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

<!-- ============================ Full Width Courses  ================================== -->
<section class="pt-0">
	<div class="container">
		<!-- Onclick Sidebar -->
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div id="filter-sidebar" class="filter-sidebar">
					<div class="filt-head">
						<h4 class="filt-first">Advance Options</h4>
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close <i class="ti-close"></i></a>
					</div>
					<div class="show-hide-sidebar">

						<!-- Find New Property -->
						<div class="sidebar-widgets">

							<!-- Search Form -->
							<form class="form-inline addons mb-3">
								<input class="form-control" type="search" placeholder="Search Courses" aria-label="Search">
								<button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
							</form>

							<h4 class="side_title">Course categories</h4>
							<ul class="no-ul-list mb-3">
								<li>
									<input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
									<label for="a-4" class="checkbox-custom-label">Backend (3)</label>
								</li>
								<li>
									<input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
									<label for="a-5" class="checkbox-custom-label">Frontend (2)</label>
								</li>
								<li>
									<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
									<label for="a-6" class="checkbox-custom-label">General (2)</label>
								</li>
								<li>
									<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
									<label for="a-7" class="checkbox-custom-label">IT & Software (2)</label>
								</li>
								<li>
									<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
									<label for="a-8" class="checkbox-custom-label">Photography (2)</label>
								</li>
								<li>
									<input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
									<label for="a-9" class="checkbox-custom-label">Technology (2)</label>
								</li>
							</ul>

							<h4 class="side_title">Instructors</h4>
							<ul class="no-ul-list mb-3">
								<li>
									<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
									<label for="a-1" class="checkbox-custom-label">Keny White (4)</label>
								</li>
								<li>
									<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
									<label for="a-2" class="checkbox-custom-label">Hinata Hyuga (11)</label>
								</li>
								<li>
									<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
									<label for="a-6" class="checkbox-custom-label">Mike hussy (4)</label>
								</li>
								<li>
									<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
									<label for="a-7" class="checkbox-custom-label">Adam Riky (7)</label>
								</li>
								<li>
									<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
									<label for="a-8" class="checkbox-custom-label">Balcony</label>
								</li>
								<li>
									<input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
									<label for="a-9" class="checkbox-custom-label">Icon</label>
								</li>
							</ul>

							<h4 class="side_title">Price</h4>
							<ul class="no-ul-list mb-3">
								<li>
									<input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
									<label for="a-10" class="checkbox-custom-label">All (75)</label>
								</li>
								<li>
									<input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
									<label for="a-11" class="checkbox-custom-label">Free (15)</label>
								</li>
								<li>
									<input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
									<label for="a-12" class="checkbox-custom-label">Paid (60)</label>
								</li>
							</ul>

							<button class="btn btn-theme full-width mb-2">Filter Result</button>

						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Row -->
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<!-- Row -->
				<div class="row align-items-center mb-3">
					<div class="col-lg-6 col-md-6 col-sm-12">
						We found <strong>142</strong> courses for you
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 ordering">
						<div class="filter_wraps">
							<div class="dl">
								<div id="main2">
									<a href="javascript:void(0)" class="btn btn-theme arrow-btn filter_open" onclick="openNav()" id="open2">Show Filter<span><i class="fas fa-arrow-alt-circle-right"></i></span></a>
								</div>
							</div>
							<div class="dropdown show">
								<a class="btn btn-custom dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Recent Courses
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="#">Popular Courses</a>
									<a class="dropdown-item" href="#">Recent Courses</a>
									<a class="dropdown-item" href="#">Featured Courses</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

				<div class="row">

					<!-- Cource Grid 1 -->
					<div class="col-lg-4 col-md-6">
						<div class="education_block_grid style_2">

							<div class="education_block_thumb">
								<a href="course-detail.html"><img src="{{url('front/education/img/course-1.jpg')}}" class="img-fluid" alt=""></a>
								<div class="education_ratting"><i class="fa fa-star"></i>4.8 (70)</div>
							</div>

							<div class="education_block_body">
								<h4 class="bl-title"><a href="course-detail.html">Tableau For Beginners: Get CA Certified, Grow Your Career</a></h4>
							</div>

							<div class="cources_info_style3">
								<ul>
									<li><i class="ti-eye mr-2"></i>7482 Views</li>
									<li><i class="ti-control-skip-forward mr-2"></i>63 Lectures</li>
									<li><i class="ti-time mr-2"></i>6h 30min</li>
								</ul>
							</div>

							<div class="education_block_footer">
								<div class="education_block_author">
									<div class="path-img"><a href="instructor-detail.html"><img src="{{url('front/education/img/user-1.jpg')}}" class="img-fluid" alt=""></a></div>
									<h5><a href="instructor-detail.html">Dhananjay Preet</a></h5>
								</div>
								<div class="cources_price_foot"><span class="price_off">$79.0</span>49.99</div>
							</div>

						</div>
					</div>

					<!-- Cource Grid 1 -->
					<div class="col-lg-4 col-md-6">
						<div class="education_block_grid style_2">

							<div class="education_block_thumb">
								<a href="course-detail.html"><img src="{{url('front/education/img/course-2.jpg')}}" class="img-fluid" alt=""></a>
								<div class="education_ratting"><i class="fa fa-star"></i>4.7 (40)</div>
							</div>

							<div class="education_block_body">
								<h4 class="bl-title"><a href="course-detail.html">The Complete Business Plan Course (Includes 50 Templates)</a></h4>
							</div>

							<div class="cources_info_style3">
								<ul>
									<li><i class="ti-eye mr-2"></i>10682 Views</li>
									<li><i class="ti-control-skip-forward mr-2"></i>82 Lectures</li>
									<li><i class="ti-time mr-2"></i>9h 45min</li>
								</ul>
							</div>

							<div class="education_block_footer">
								<div class="education_block_author">
									<div class="path-img"><a href="instructor-detail.html"><img src="{{url('front/education/img/user-2.jpg')}}" class="img-fluid" alt=""></a></div>
									<h5><a href="instructor-detail.html">Litha Jethaani</a></h5>
								</div>
								<div class="cources_price_foot"><span class="price_off">$199.00</span>149.00</div>
							</div>

						</div>
					</div>

					<!-- Cource Grid 1 -->
					<div class="col-lg-4 col-md-6">
						<div class="education_block_grid style_2">

							<div class="education_block_thumb">
								<a href="course-detail.html"><img src="{{url('front/education/img/course-3.jpg')}}" class="img-fluid" alt=""></a>
								<div class="education_ratting"><i class="fa fa-star"></i>4.9 (29)</div>
							</div>

							<div class="education_block_body">
								<h4 class="bl-title"><a href="course-detail.html">An Entire MBA In 1 Course:Award Winning Business School Prof</a></h4>
							</div>

							<div class="cources_info_style3">
								<ul>
									<li><i class="ti-eye mr-2"></i>9882 Views</li>
									<li><i class="ti-control-skip-forward mr-2"></i>47 Lectures</li>
									<li><i class="ti-time mr-2"></i>6h 30min</li>
								</ul>
							</div>

							<div class="education_block_footer">
								<div class="education_block_author">
									<div class="path-img"><a href="instructor-detail.html"><img src="{{url('front/education/img/user-3.jpg')}}" class="img-fluid" alt=""></a></div>
									<h5><a href="instructor-detail.html">Adam Gilvork</a></h5>
								</div>
								<div class="cources_price_foot"><span class="price_off">$89.65</span>49.10</div>
							</div>

						</div>
					</div>

					<!-- Cource Grid 1 -->
					<div class="col-lg-4 col-md-6">
						<div class="education_block_grid style_2">

							<div class="education_block_thumb">
								<a href="course-detail.html"><img src="{{url('front/education/img/course-4.jpg')}}" class="img-fluid" alt=""></a>
								<div class="education_ratting"><i class="fa fa-star"></i>4.7 (60)</div>
							</div>

							<div class="education_block_body">
								<h4 class="bl-title"><a href="course-detail.html">The Complete Financial Analyst Course 2020</a></h4>
							</div>

							<div class="cources_info_style3">
								<ul>
									<li><i class="ti-eye mr-2"></i>5882 Views</li>
									<li><i class="ti-control-skip-forward mr-2"></i>52 Lectures</li>
									<li><i class="ti-time mr-2"></i>5h 15min</li>
								</ul>
							</div>

							<div class="education_block_footer">
								<div class="education_block_author">
									<div class="path-img"><a href="instructor-detail.html"><img src="{{url('front/education/img/user-4.jpg')}}" class="img-fluid" alt=""></a></div>
									<h5><a href="instructor-detail.html">Shilpa Shekh</a></h5>
								</div>
								<div class="cources_price_foot"><span class="price_off">$149.77</span>99.00</div>
							</div>

						</div>
					</div>

					<!-- Cource Grid 1 -->
					<div class="col-lg-4 col-md-6">
						<div class="education_block_grid style_2">

							<div class="education_block_thumb">
								<a href="course-detail.html"><img src="{{url('front/education/img/course-5.jpg')}}" class="img-fluid" alt=""></a>
								<div class="education_ratting"><i class="fa fa-star"></i>4.8 (45)</div>
							</div>

							<div class="education_block_body">
								<h4 class="bl-title"><a href="course-detail.html">PMP Exam Prep Seminar - PMBOK Guide 6</a></h4>
							</div>

							<div class="cources_info_style3">
								<ul>
									<li><i class="ti-eye mr-2"></i>4732 Views</li>
									<li><i class="ti-control-skip-forward mr-2"></i>32 Lectures</li>
									<li><i class="ti-time mr-2"></i>3h 30min</li>
								</ul>
							</div>

							<div class="education_block_footer">
								<div class="education_block_author">
									<div class="path-img"><a href="instructor-detail.html"><img src="{{url('front/education/img/user-5.jpg')}}" class="img-fluid" alt=""></a></div>
									<h5><a href="instructor-detail.html">Shaurya Preet</a></h5>
								</div>
								<div class="cources_price_foot"><span class="price_off">$107.77</span>55.99</div>
							</div>

						</div>
					</div>

					<!-- Cource Grid 1 -->
					<div class="col-lg-4 col-md-6">
						<div class="education_block_grid style_2">

							<div class="education_block_thumb">
								<a href="course-detail.html"><img src="{{url('front/education/img/course-6.jpg')}}" class="img-fluid" alt=""></a>
								<div class="education_ratting"><i class="fa fa-star"></i>4.7 (40)</div>
							</div>

							<div class="education_block_body">
								<h4 class="bl-title"><a href="course-detail.html">Tableau 2020 A-Z:Hands-On Tableau Training For Data Science!</a></h4>
							</div>

							<div class="cources_info_style3">
								<ul>
									<li><i class="ti-eye mr-2"></i>7582 Views</li>
									<li><i class="ti-control-skip-forward mr-2"></i>62 Lectures</li>
									<li><i class="ti-time mr-2"></i>3h 10min</li>
								</ul>
							</div>

							<div class="education_block_footer">
								<div class="education_block_author">
									<div class="path-img"><a href="instructor-detail.html"><img src="{{url('front/education/img/user-6.jpg')}}" class="img-fluid" alt=""></a></div>
									<h5><a href="instructor-detail.html">Litha Anshal</a></h5>
								</div>
								<div class="cources_price_foot"><span class="price_off">$99.77</span>47.99</div>
							</div>

						</div>
					</div>

				</div>

				<!-- Row -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">

						<!-- Pagination -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 text-center">
								<button type="button" class="btn btn-loader">Load More<i class="ti-reload ml-3"></i></button>
							</div>
						</div>

					</div>
				</div>
				<!-- /Row -->

			</div>

		</div>
		<!-- Row -->

	</div>
</section>
<!-- ============================ Full Width Courses End ================================== -->
@endsection
