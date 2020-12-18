<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <title>MatafGroup - Recycling</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="solar system /sun & wind" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/meanmenu.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/slicknav.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/venobox/css/venobox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/camera.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/style_4.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/recycling/css/responsive_4.css')}}" />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="{{asset('front/recycling/images/favicon.png')}}" />

<body>
<!-- preloader Start -->
<div id="preloader">
    <div id="status">
        <img src="{{url('front/recycling/images/preloader.gif')}}" id="preloader_image" alt="loader">
    </div>
</div>
<!--sw header wrapper start-->
<div class="transparent-menu header-area hidden-menu-bar stick">

    <div class="container-fluid">

        <div class="bt_main_menu_wrapper">
            <div class="main-menu-wrapper clear-fix">

                <div class="logo float-left visible-lg visible-md hidden-sm hidden-xs">
                    <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" class="img-responsive" alt="logo" style="width: 150px;"></a>
                </div>
                <div class="logo float-left hidden-lg hidden-md visible-sm visible-xs">
                    <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" class="img-responsive" alt="logo" style="width: 150px;"></a>
                </div>

            </div>
            <div class="sc_navigation hidden-sm hidden-xs">
                <nav id="primary-nav" class="dropdown nav_left_margin">
                    <ul class="dropdown menu navigation cart_dropdown_wrapper">
                        <li><a href="{{url('/')}}" title="Home">Home</a></li>
                        <li><a href="{{url('/recycling')}}" title="About (Recycling)">About (Recycling)</a></li>
                        <li><a href="{{url('/recycling/services')}}" title="Services (Recycling)">Services (Recycling)</a></li>
                        <li><a href="{{url('/contact-us')}}" title="Contact Us">Contact Us</a></li>
                    </ul>
                    <div class="header_right_main_wrapper">
                        <div class="header_btn">
                            <ul>
                                <li>
                                    <a href="{{url('/contact-us')}}" class="waves-effect waves-purple waves-ripple">Get a free quote</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </nav>
            </div>
            <!-- /.main-menu-wrapper -->
            <!-- mobile menu area start -->
            <div class="mobile-menu-area visible-sm visible-xs">
                <div class="container-fluid header_container">
                    <div class="row">

                        <div class="col-xs-12 cc_menu_top_margin">
                            <!-- mobile menu start -->
                            <div class="mobile-menu">
                                <nav>
                                    <ul class="nav">
                                        <li><a href="{{url('/')}}" title="Home">Home</a></li>
                                        <li><a href="{{url('/recycling')}}" title="Home">About (Recycling)</a></li>
                                        <li><a href="{{url('/recycling/services')}}" title="Home">Services (Recycling)</a></li>
                                        <li><a href="{{url('/contact-us')}}" title="Home">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- mobile menu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu area end -->

            <!-- /.main-menu-wrapper -->
        </div>
    </div>
</div>
<!--sw header wrapper end-->
@yield('content')
        <!-- sw footer section start-->
<div class="footer_wrapper">
    <div class="icon_4">
        <img src="{{url('front/recycling/images/icon_4.png')}}" alt="img">
    </div>
    <div class="container">
        <div class="circle_btm">
            <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i></a>
        </div>
        <div class="row">
            <div class="foter_padder">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="wrapper_second_about">
                        <div class="wrapper_first_image">
                            <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" class="img-responsive" alt="logo" style="width:200px; "/></a>
                        </div>
                        <div class="abotus_content">
                            <p>We are a leading metal scrap recycling, scrap and rail trading company based in Indore, India.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="wrapper_second_useful">
                        <h4>Important Links</h4>
                        <img src="{{url('front/recycling/images/heading_line3.png')}}" alt="title" class="pd_btm_3">
                        <ul>
                            <li><a href="{{url('construction')}}">Home</a></li>
                            <li><a href="{{url('recycling')}}">Recycling Sector</a></li>
                            <li><a href="{{url('recycling/services')}}">Recycling Services</a></li>
                            <li><a href="{{url('about-us')}}">About Us</a></li>
                            <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                    <div class="wrapper_second_useful">
                        <h4>Other Sectors</h4>
                        <img src="{{url('front/recycling/images/heading_line3.png')}}" alt="title" class="pd_btm_3">
                        <ul>
                            <li><a href="{{url('construction')}}">Construction</a></li>
                            <li><a href="{{url('real-estate')}}">Real Estate</a></li>
                            <li><a href="{{url('hospitality')}}">Hospitality</a></li>
                            <li><a href="{{url('decorate')}}">Innovative Products</a></li>
                            <li><a href="{{url('international-trading')}}">International Trading</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                    <div class="wrapper_second_useful wrapper_second_links">

                        <ul>
                            <li><a href="{{url('education')}}">Education</a></li>
                            <li><a href="{{url('it-marketing')}}">IT & Marketing</a></li>
                            <li><a href="{{url('health-wellness')}}">Health & Wellness</a></li>
                            <li><a href="{{url('consultation')}}">Consultation</a></li>
                            <li><a href="{{url('robotics-agriculture')}}">Robotic Agriculture</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="section3_copyright">
                <p>&copy; 1998-{{date('Y')}} <a href="{{url('/')}}">Mataf Group</a>. all right reserved</p>
            </div>
        </div>
    </div>
    <div class="icon_5">
        <img src="{{url('front/recycling/images/icon_5.png')}}" alt="img">
    </div>
    <div class="icon2">
        <img src="{{url('front/recycling/images/icon_2.png')}}" alt="img">
    </div>
</div>
<!-- sw footer section end-->
<!--main js files-->
<script src="{{asset('front/recycling/js/jquery_min.js')}}"></script>
<script src="{{asset('front/recycling/js/materialize.min.js')}}"></script>
<script src="{{asset('front/recycling/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/recycling/js/jqu_menu.js')}}"></script>
<script src="{{asset('front/recycling/js/jqu_slickmenu.js')}}"></script>
<script src="{{asset('front/recycling/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/recycling/js/venobox/js/venobox.min.js')}}"></script>
<script src="{{asset('front/recycling/js/jquery.inview.min.js')}}"></script>
<script src="{{asset('front/recycling/js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('front/recycling/js/jquery.countTo.js')}}"></script>
<script src="{{asset('front/recycling/js/wow.min.js')}}"></script>
<script src="{{asset('front/recycling/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('front/recycling/js/owl.carousel.js')}}"></script>
<script src="{{asset('front/recycling/js/camera.min.js')}}"></script>
<script src="{{asset('front/recycling/js/custom_4.js')}}"></script>
<!--js code-->
</body>
</html>