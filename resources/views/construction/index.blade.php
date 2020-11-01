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
                <h2>MatafGroup Construction <br> Sector</h2>
                <div class="clearfix"></div>
                <p>We do high quality jobs and provide all customers with good services treating their property with respect.</p>
                <div class="clearfix"></div>
                <a href="{{url('/construction/services')}}" class="btn float-btn flat-btn">Our Services</a>
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
                            <h3 class="bold-title">Welcome !  We are MatafGroup .  <br>   Construction Sector</h3>
                            <p>
                                We have a vast experience in the field of civil and electro-mechanical works well specialized in civil works. We also work activities in industrial plants, district cooling plants, infrastructure and other related facilities in the Kingdom of Saudi Arabia with our head office registered in Jeddah, Kingdom of Saudi Arabia.
                            </p>
                            <p>
                                We do high quality jobs and provide all customers with good services treating their property with respect. We are relaible and competitive with our pricing and activities with our clients.
                            </p>
                            <br><br>
                            <h3 class="bold-title">What we do</h3>
                            <div class="pr-tags fl-wrap">
                                <span>Services : </span>
                                <ul>
                                    <li><a href="{{url('construction/services')}}">Structural</a></li>
                                    <li><a href="{{url('construction/services')}}">Design</a></li>
                                    <li><a href="{{url('construction/services')}}">MEP</a></li>
                                    <li><a href="{{url('construction/services')}}">Architectural</a></li>
                                </ul>
                            </div>
                            <span class="bold-separator"></span>
                            <div class="clearfix"></div>
                            <a href="{{url('construction/projects')}}" class="btn float-btn flat-btn">Our portfolio</a>
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
                <a href="{{url('construction/services')}}" class="btn float-btn flat-btn">Our Services</a>
                <a href="{{url('contact-us')}}" target="_blank" class="btn float-btn flat-btn">Get in Touch</a>
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
                        <span>Find below our recent featured works</span>
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
                                <li><a href="#">Structural</a></li>
                                <li><a href="#">Architecture</a></li>
                            </ul>
                        </div>
                        <img  src="{{url('projects/construction/balamand-university.png')}}"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Balamand University</a></h3>
                            <h4>We worked as Civil & Electro-Mechanical Contractor & Completed Successfully</h4>
                            <a href="{{url('/construction/projects')}}" class="btn float-btn flat-btn">View All</a>
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
                                <li><a href="#">Structural</a></li>
                                <li><a href="#">Architecture </a></li>
                                <li><a href="#">MEP</a></li>
                            </ul>
                        </div>
                        <img  src="{{url('projects/construction/sultan-villa-barsha.jpg')}}"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Sultan Villa, Barsha</a></h3>
                            <h4>We worked as sub contractor of all scope of works.</h4>
                            <a href="#" class="btn float-btn flat-btn">View project</a>
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
                                <li><a href="#">Structural</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="{{url('projects/construction/rashidiya-villa.jpg')}}"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Rashidiya Villa</a></h3>
                            <h4>We worked as sub contractor for all civil & finishing works.</h4>
                            <a href="#" class="btn float-btn flat-btn">View project</a>
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
                        <img  src="{{url('projects/construction/gemstone-office.jpg')}}"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Gemstone Office</a></h3>
                            <h4>We worked as Interior & Finishing Contractor.</h4>
                            <a href="#" class="btn float-btn flat-btn">View project</a>
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
</div>
<!-- content  end -->
@endsection

