@extends('construction.layout')
@section('content')
<!-- hero content -->
<div class="fs-gallery-wrap home-slider fl-wrap full-height" data-autoplayslider="5000" data-slidereffect="fade">
    <div class="slide-progress-container">
        <div class="slide-progress-content">
            <div class="slide-progress-warp">
                <div class="slide-progress"></div>
            </div>
        </div>
    </div>
    <div class="swiper-container" data-scrollax-parent="true" >
        <div class="swiper-wrapper"  >
            <!-- swiper-slide-->
            <div class="swiper-slide">
                <div class="bg"  data-bg="{{url('front/construction/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '250px' }" ></div>
            </div>
            <!-- swiper-slide end-->
            <!-- swiper-slide-->
            <div class="swiper-slide">
                <div class="bg "  data-bg="{{url('front/construction/images/bg/2.jpg')}}" data-scrollax="properties: { translateY: '250px' }" ></div>
            </div>
            <!-- swiper-slide end-->
            <!-- swiper-slide-->
            <div class="swiper-slide">
                <div class="bg"  data-bg="{{url('front/construction/images/bg/4.jpg')}}" data-scrollax="properties: { translateY: '250px' }" ></div>
            </div>
            <!-- swiper-slide end-->
            <!-- swiper-slide-->
            <div class="swiper-slide">
                <div class="bg"  data-bg="{{url('front/construction/images/bg/19.jpg')}}" data-scrollax="properties: { translateY: '250px' }" ></div>
            </div>
            <!-- swiper-slide end-->
        </div>
    </div>
    <div class="overlay"></div>
    <!-- hero-wrap-->
    <div class="hero-wrap alt">
        <div class="container">
            <div class="hero-item">
                <h2>Balkon Architecture <br> Studio</h2>
                <div class="clearfix"></div>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary .</p>
                <div class="clearfix"></div>
                <a href="portfolio.html" class="btn float-btn flat-btn">Our portfolio</a>
            </div>
        </div>
    </div>
    <!-- hero-wrap end-->
</div>
<!-- hero content end-->
<!--content-->
<div class="content">
    <!--section -->
    <section id="sec2" data-scrollax-parent="true" >
        <div class="container">
            <div class="section-container fl-wrap">
                <div class="row">
                    <div class="col-md-7">
                        <div class="content-wrap about-wrap">
                            <h3 class="bold-title">Welcome !  We are Balkon .  <br>   Architecture Studio <br> From NY</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                                Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <br><br>
                            <h3 class="bold-title">What we do</h3>
                            <div class="pr-tags fl-wrap">
                                <span>Services : </span>
                                <ul>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Photography</a></li>
                                </ul>
                            </div>
                            <span class="bold-separator"></span>
                            <div class="clearfix"></div>
                            <a href="portfolio.html" class="btn float-btn flat-btn">Our portfolio</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="box-item">
                            <img  src="{{url('front/construction/images/folio/6.jpg')}}"  class="respimg" alt="">
                            <div class="overlay"></div>
                            <a href="{{url('front/construction/images/folio/6.jpg')}}" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg dec-bg left-pos-dec"  data-bg="{{url('front/construction/images/bg/14.jpg')}}"></div>
    </section>
    <!--section end  -->
    <!--section -->
    <section  >
        <div class="bg"  data-bg="{{url('front/construction/images/bg/4.jpg')}}"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="intro-text fl-wrap">
                <h2>Entrust your project <br>to our team of  <br>professionals</h2>
                <a href="services.html" class="btn float-btn flat-btn">Our Services</a>
                <a href="contact.html" class="btn float-btn flat-btn">Get in Touch</a>
            </div>
        </div>
    </section>
    <!--section end  -->
    <!--section -->
    <section >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pr-title">
                        Our Featured Work
                        <span>Lorem Ipsum generators on the Internet tend to repeat king this the first true generator . </span>
                    </div>
                </div>
            </div>
            <!--parallax-item -->
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                        <div class="parallax-header fl-wrap">
                            <span>01.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="{{url('front/construction/images/folio/2.jpg')}}"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">Theatre de Stoep</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--parallax-item end-->
            <!--parallax-item -->
            <div class="row">
                <div class="col-md-7">
                    <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                        <div class="parallax-header fl-wrap">
                            <span>02.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="{{url('front/construction/images/folio/11.jpg')}}"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">New Acropolis Museum</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--parallax-item end-->
            <!--parallax-item -->
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                        <div class="parallax-header fl-wrap">
                            <span>03.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="{{url('front/construction/images/folio/16.jpg')}}"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">Theatre de Stoep</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--parallax-item end-->
            <!--parallax-item -->
            <div class="row">
                <div class="col-md-7">
                    <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                        <div class="parallax-header fl-wrap">
                            <span>04.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="{{url('front/construction/images/folio/19.jpg')}}"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">New Acropolis Museum</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--parallax-item end-->
        </div>
        <div class="partcile-dec" data-parcount="250"></div>
    </section>
    <!--section end  -->
    <!--section -->
    <section class="parallax-section header-section  " data-scrollax-parent="true" id="sec6">
        <div class="bg"  data-bg="{{url('front/construction/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '200px' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pr-title">
                        Testimonials
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="single-slider testilider fl-wrap" data-effects="slide">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <h3>Andy Smith</h3>
                                        <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words"</p>
                                        <a href="#" class="btn float-btn flat-btn" target="_blank">Via Twitter</a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <h3>Liza Mirovsky</h3>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae"</p>
                                        <a href="#" class="btn float-btn flat-btn" target="_blank">Via Facebook</a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <h3>Gary Trust</h3>
                                        <p>"If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."</p>
                                        <a href="#" class="btn float-btn flat-btn" target="_blank">Via Myspace</a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section end  -->
    <!--section -->
    <section>
        <div class="container">
            <div class="clients-list fl-wrap">
                <ul>
                    <li><a href="#" target="_blank"> <img src="{{url('front/construction/images/clients/1.jpg')}}" alt=""> </a></li>
                    <li><a href="#" target="_blank"> <img src="{{url('front/construction/images/clients/2.jpg')}}" alt=""> </a></li>
                    <li><a href="#" target="_blank"> <img src="{{url('front/construction/images/clients/3.jpg')}}" alt=""> </a></li>
                    <li><a href="#" target="_blank"> <img src="{{url('front/construction/images/clients/4.jpg')}}" alt=""> </a></li>
                    <li><a href="#" target="_blank"> <img src="{{url('front/construction/images/clients/5.jpg')}}" alt=""> </a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--section end  -->
    <!--social-wrap -->
    <div class="social-wrap fl-wrap">
        <ul>
            <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
        </ul>
    </div>
    <!--social-wrap end-->
</div>
<!-- content  end -->
@endsection

