<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MatafGroup - Robotic Agriculture</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('front/robotic/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('front/robotic/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('front/robotic/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('front/robotic/images/favicons/site.webmanifest')}}">

    <!-- Fonts-->
    <link
            href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
            rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">
    <!-- Css-->
    <link rel="stylesheet" href="{{url('front/robotic/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/bootstrap-select.min.css')}}">

    <link rel="stylesheet" href="{{url('front/robotic/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/vegas.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/nouislider.pips.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/agrikol_iconl.css')}}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{url('front/robotic/css/style.css')}}">
    <link rel="stylesheet" href="{{url('front/robotic/css/responsive.css')}}">

</head>

<body>

<div class="preloader">
    <img src="{{url('front/robotic/images/loader.png')}}" class="preloader__image" alt="">
</div><!-- /.preloader -->

<div class="page-wrapper">


    <div class="site-header__header-one-wrap">

        <div class="topbar-one">
            <div class="topbar_bg" style="background-image: url(front/robotic/images/shapes/header-bg.png)"></div>
            <div class="container">
                <div class="topbar-one__left">
                    <a href="mailto:info@matafgroup.com"><span class="icon-message"></span>info@matafgroup.com</a>
                </div>
                <div class="topbar-one__middle">
                    <a href="{{url('/')}}" class="main-nav__logo">
                        <img src="{{url('images/logo.png')}}" class="main-logo" alt="Awesome Image" style="width: 200px;" />
                    </a>
                </div>
                <div class="topbar-one__right">
                    <div class="topbar-one__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <header class="main-nav__header-one">
            <nav class="header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__left">
                        <a href="#" class="main-nav__search search-popup__toggler"><i
                                    class="icon-magnifying-glass"></i></a>
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="{{request()->path() == 'robotics-agriculture'?'current':''}}">
                                <a href="{{url('/robotics-agriculture')}}">Robotics Agriculture</a>
                            </li>
                            <li class="{{request()->path() == 'robotics-agriculture/services'?'current':''}}">
                                <a href="{{url('/robotics-agriculture/services')}}">Services (Robotics Agriculture)</a>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}" target="_blank">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </header>
    </div>
    @yield('content')
    <footer class="site-footer">
        <div class="site-footer_farm_image"><img src="{{url('front/robotic/images/resources/site-footer-farm.png')}}" alt="Farm Image"></div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__title">
                            <h3>Message</h3>
                        </div>
                        <div class="footer-widget_about_text">
                            <p>
                                Agriculture is one of our most important industries. It provides food, feed and fuel necessary for our survival. With the global population expected to reach 9 billion by 2050, agricultural production must double to meet the demand. And because of limited arable land, productivity must increase 25% to help meet that goal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget__column footer-widget__link wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__title">
                            <h3>Explore</h3>
                        </div>
                        <ul class="footer-widget__links-list list-unstyled">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('robotics-agriculture')}}">Robotics Agriculture</a></li>
                            <li><a href="{{url('robotics-agriculture/services')}}">Services (RA)</a></li>
                            <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget__column footer-widget__link wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__title">
                            <h3>Other Business Sectors</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li class="list-item"><a href="{{url('/construction')}}">Construction</a></li>
                                    <li class="list-item"><a href="{{url('/real-estate')}}">Real Estate</a></li>
                                    <li class="list-item"><a href="{{url('/hospitality')}}">Hospitality</a></li>
                                    <li class="list-item"><a href="{{url('/decorate')}}">Innovative Products</a></li>
                                    <li class="list-item"><a href="{{url('/trading')}}">International Trading</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li class="list-item"><a href="{{url('/it-marketing')}}">IT & Marketing</a></li>
                                    <li class="list-item"><a href="{{url('/consultation')}}">Consultation</a></li>
                                    <li class="list-item"><a href="{{url('/education')}}">Education</a></li>
                                    <li class="list-item"><a href="{{url('/health-wellness')}}">Health & Wellness</a></li>
                                    <li class="list-item"><a href="{{url('/recycling')}}">Recycling</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="site-footer_bottom">
        <div class="container">
            <div class="site-footer_bottom_copyright">
                <p>@ All right reserver 1998-{{date('Y')}}, <a href="{{url('/')}}">MatafGroup - Robotics Agriculture</a></p>
            </div>
            <div class="site-footer_bottom_menu">
                <ul class="list-unstyled">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- /.page-wrapper -->
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">
            <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="{{url('front/robotic/images/shapes/close-1-1.png')}}" alt=""></a>
        </div><!-- /.side-menu__top -->

        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>

        <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

        <div class="side-menu__content">
            <p><a href="mailto:info@matafgroup.com">info@matafgroup.com</a> <br> <a href="tel:+919977999777">+91 997 7999 777</a></p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
<script src="{{url('front/robotic/js/jquery.min.js')}}"></script>
<script src="{{url('front/robotic/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('front/robotic/js/owl.carousel.min.js')}}"></script>
<script src="{{url('front/robotic/js/waypoints.min.js')}}"></script>
<script src="{{url('front/robotic/js/jquery.counterup.min.js')}}"></script>
<script src="{{url('front/robotic/js/TweenMax.min.js')}}"></script>
<script src="{{url('front/robotic/js/wow.js')}}"></script>
<script src="{{url('front/robotic/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('front/robotic/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{url('front/robotic/js/swiper.min.js')}}"></script>
<script src="{{url('front/robotic/js/typed-2.0.11.js')}}"></script>
<script src="{{url('front/robotic/js/vegas.min.js')}}"></script>
<script src="{{url('front/robotic/js/jquery.validate.min.js')}}"></script>
<script src="{{url('front/robotic/js/bootstrap-select.min.js')}}"></script>
<script src="{{url('front/robotic/js/countdown.min.js')}}"></script>
<script src="{{url('front/robotic/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('front/robotic/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('front/robotic/js/nouislider.min.js')}}"></script>
<script src="{{url('front/robotic/js/isotope.js')}}"></script>
<script src="{{url('front/robotic/js/appear.js')}}"></script>
<!-- template scripts -->
<script src="{{url('front/robotic/js/theme.js')}}"></script>
</body>
</html>