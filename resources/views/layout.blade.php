<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
    <title>Mataf Group</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('front/main/css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front/main/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="preloader cursor-anim-enable dark-nav">
<!-- preloader-loading start -->
<div class="preloader__logoload-box">
    <img class="preloader__logo" src="{{asset('images/logo.png')}}" alt="logo">
    <div class="preloader__pulse"></div>
</div><!-- preloader-loading end -->
<!-- pointer start -->
<div class="pointer js-pointer" id="js-pointer">
    <i class="pointer__inner fas fa-long-arrow-alt-right"></i>
    <i class="pointer__inner fas fa-search"></i>
    <i class="pointer__inner fas fa-link"></i>
</div><!-- pointer end -->
<!-- to top btn start -->
<a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
    <span class="scroll-to-btn__box">
        <span class="scroll-to-btn__arrow"></span>
    </span>
</a><!-- to top btn end -->
<!-- scroll down btn start -->
<a href="#down" class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
    <span class="scroll-to-btn__box">
        <span class="scroll-to-btn__arrow"></span>
    </span>
</a><!-- scroll down btn end -->
<!-- header start -->
<header class="fixed-header">
    <!-- logo start -->
    <div class="header-logo js-midnight-color js-headroom">
        <div class="hidden-box">
            <a href="{{url('/')}}" class="header-logo__box js-pointer-large js-animsition-link">
                <img class="header-logo__img white" src="{{asset('images/logo.png')}}" alt="logo" style="height: 70px;">
                <img class="header-logo__img black" src="{{asset('images/logo.png')}}" alt="logo" style="height: 70px;">
            </a>
        </div>
    </div><!-- logo end -->
    <!-- menu-icon start -->
    <div class="menu-icon js-menu-open-close js-pointer-large js-midnight-color js-headroom">
        <div class="menu-icon__box">
            <span class="menu-icon__inner"></span>
            <span class="menu-icon__close"></span>
        </div>
    </div><!-- menu-icon end -->
    <!-- header-contact start -->
    <div class="header-contact js-midnight-color js-headroom">
        <div class="header-contact__flex">
            <div class="header-contact__anim">
                <a href="{{url('contact-us')}}" class="header-contact__btn vertical-text center js-pointer-large">
                    <span class="vertical-text__inner"><i class="far fa-comment-dots"></i> Get in touch</span>
                </a>
            </div>
        </div>
    </div><!-- header-contact end -->

    <!-- header-social start -->
    <div class="header-social after-preloader-anim js-midnight-color js-headroom">
        <ul class="list list_center list_margin-20px hidden-box">
            <li class="list__item">
                <div class="hidden-box d-inline-block">
                    <a href="#" class="anim-slide js-pointer-small">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </li>
            <li class="list__item">
                <div class="hidden-box d-inline-block">
                    <a href="#" class="anim-slide tr-delay-02 js-pointer-small">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </li>
            <li class="list__item">
                <div class="hidden-box d-inline-block">
                    <a href="#" class="anim-slide tr-delay-04 js-pointer-small">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </li>
            <li class="list__item">
                <div class="hidden-box d-inline-block">
                    <a href="#" class="anim-slide tr-delay-06 js-pointer-small">
                        <i class="fab fa-behance"></i>
                    </a>
                </div>
            </li>
            <li class="list__item">
                <div class="hidden-box d-inline-block">
                    <a href="#" class="anim-slide tr-delay-08 js-pointer-small">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </li>
            <li class="list__item">
                <div class="hidden-box d-inline-block">
                    <a href="#" class="anim-slide tr-delay-10 js-pointer-small">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div><!-- header-social end -->
</header><!-- header end -->
<!-- navigation start -->
<nav class="nav-container pos-rel js-dropdown-active-box">
    <!-- pos-rel start -->
    <div class="pos-rel height-100perc">
        <!-- dropdown close btn start -->
        <div class="dropdown-close">
            <div class="dropdown-close__inner js-dropdown-close js-pointer-large">
                <span class="dropdown-close__arrow"></span>
            </div>
        </div><!-- dropdown close btn end -->

        <!-- js-nav-slider-bg start -->
        <div class="js-nav-slider-bg">
            <!-- swiper-wrapper start -->
            <div class="swiper-wrapper">
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <div class="nav-slide-bg" style="background-image:url('{{asset('images/projects/speakers/revolt-BMest61rcqs-unsplash.jpg')}}')"></div>
                    <div class="bg-overlay-black"></div>
                </div><!-- swiper-slide end -->
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <div class="nav-slide-bg" style="background-image:url('{{asset('images/projects/sneakers/revolt-164_6wVEHfI-unsplash.jpg')}}')"></div>
                    <div class="bg-overlay-black"></div>
                </div><!-- swiper-slide end -->
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <div class="nav-slide-bg" style="background-image:url('{{asset('images/projects/black-bike/josh-nuttall-pIwu5XNvXpk-unsplash.jpg')}}')"></div>
                    <div class="bg-overlay-black"></div>
                </div><!-- swiper-slide end -->
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <div class="nav-slide-bg" style="background-image:url('{{asset('images/projects/pexels/woman-in-black-sexy-top-2825034.jpg')}}')"></div>
                    <div class="bg-overlay-black"></div>
                </div><!-- swiper-slide end -->
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <div class="nav-slide-bg" style="background-image:url('{{asset('images/projects/furniture/goashape-RvyJGaoaWrs-unsplash.jpg')}}')"></div>
                    <div class="bg-overlay-black"></div>
                </div><!-- swiper-slide end -->
            </div><!-- swiper-wrapper end -->
        </div><!-- js-nav-slider-bg end -->

        <!-- menu-box start -->
        <ul class="menu-box">
            <!-- nav-btn-box start -->
            <li class="nav-btn-box">
                <a href="{{url('/')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="Home">Home</span>
                </a>
            </li>
            <!-- nav-btn-box end -->
            <!-- nav-btn-box start -->
            <li class="nav-btn-box js-dropdown-open">
                <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
                    <span class="nav-btn__inner" data-text="Business Sectors">Business Sectors</span>
                </a>
                <!-- dropdown start -->
                <ul class="menu-box dropdown js-dropdown">
                    <li class="nav-btn-box">
                        <a href="{{url('/real-estate')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Real Estate">Real Estate</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('/construction')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Construction">Construction</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('/hospitality')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Hospitality">Hospitality</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('/recycling')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Recycling">Recycling</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('/health-wellness')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Health & Wellness">Health & Wellness</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('/education')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Education">Education</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('/it-marketing')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="IT & Marketing">IT & Marketing</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('innovative-products')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Innovative Products">Innovative Products</span>
                        </a>
                    </li>
                    <li class="nav-btn-box">
                        <a href="{{url('consultation')}}" class="nav-btn js-animsition-link js-pointer-large">
                            <span class="nav-btn__inner" data-text="Consultation">Consultation</span>
                        </a>
                    </li>
                </ul><!-- dropdown end -->
            </li>
            <!-- nav-btn-box end -->

            <!-- nav-btn-box start -->
            <li class="nav-btn-box">
                <a href="{{url('/about-us')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="About Us">About Us</span>
                </a>
            </li>
            <!-- nav-btn-box end -->

            <!-- nav-btn-box start -->
            <li class="nav-btn-box">
                <a href="{{url('/profile')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="Profile">Profile</span>
                </a>
            </li>
            <!-- nav-btn-box end -->

            <!-- nav-btn-box start -->
            <li class="nav-btn-box">
                <a href="{{url('/contact-us')}}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
                    <span class="nav-btn__inner" data-text="Contact Us">Contact Us</span>
                </a>
            </li>
            <!-- nav-btn-box end -->
        </ul><!-- menu-box end -->

        <!-- nav-information start -->
        <div class="nav-information">
            <!-- nav-email start -->
            <div>
                <div class="hidden-box d-inline-block">
                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Email</div>
                </div>
                <div class="nav-fade-anim js-nav-anim margin-top-10">
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">info@matafgroup.com</a>
                </div>
            </div><!-- nav-email end -->
            <!-- nav-address start -->
            <div>
                <div class="hidden-box d-inline-block">
                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Address</div>
                </div>
                <div class="nav-fade-anim js-nav-anim margin-top-10">
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">
                        Business Park<br>
                        Dubau, UAE
                    </a>
                </div>
            </div><!-- nav-address end -->

            <!-- nav-phone start -->
            <div>
                <div class="hidden-box d-inline-block">
                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Phone</div>
                </div>
                <div class="nav-fade-anim js-nav-anim margin-top-10">
                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+971-56-568-341</a><br>
                </div>
            </div><!-- nav-phone end -->
        </div><!-- nav-information end -->

        <!-- nav-copyright start -->
        <div class="nav-copyright text-right">
            <p class="copyright-style nav-fade-anim js-nav-anim">
                &copy; Copyright 2020 UMAYA. Template by <a href="#" class="text-weight-700 js-pointer-small">Jinna Gik</a>
            </p>
        </div><!-- nav-copyright end -->
    </div><!-- pos-rel end -->
</nav><!-- navigation end -->

<!-- main start -->
<main class="js-animsition-overlay" data-animsition-overlay="true">
    @yield('content')
</main>
<!-- footer start -->
<footer class="fixed-footer pos-rel bg-img-cover js-fixed-footer" style="background-image:url('{{asset('images/backgrounds/man-holding-videocamera-standing-in-studio-3379943.jpg')}}')">
    <!-- bg-overlay -->
    <div class="bg-overlay-black"></div>
    <!-- pos-rel start -->
    <div class="pos-rel flex-min-height-100vh">
        <!-- container start -->
        <div class="container padding-top-bottom-120">
            <!-- footer-logo start -->
            <div class="footer-logo footer-logo-desktop-hidden padding-bottom-90">
                <img class="footer-logo__img" src="{{asset('images/logo/logo.png')}}" alt="logo">
            </div><!-- footer-logo end -->

            <!-- flex-container start -->
            <div class="flex-container flex-align-center">
                <!-- column start -->
                <div class="eight-columns">
                    <h4 class="column-l-r-margin-10 headline-l footer-title">
                        The <span class="text-color-red">Best<br>Agency</span> for<br>Your Businnes
                    </h4>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns footer-nav-mobile-padding">
                    <ul class="column-l-r-margin-10 footer-nav-list js-footer-hover-box">
                        <li>
                            <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">About</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Services</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="footer-nav__btn js-pointer-small js-footer-hover-link">Contact</a>
                        </li>
                    </ul>
                </div><!-- column end -->
            </div><!-- flex-container end -->

            <!-- flex-container start -->
            <div class="flex-container flex-justify-center padding-top-30">
                <!-- column start -->
                <div class="four-columns column-50-100 padding-top-60 footer-email">
                    <div class="column-l-r-margin-10">
                        <div class="headline-xxxxs">Email</div>
                        <div class="margin-top-10">
                            <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">info@matafgroup.com</a>
                        </div>
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns column-50-100 padding-top-60 footer-address">
                    <div class="column-l-r-margin-10">
                        <div class="headline-xxxxs">Address</div>
                        <div class="margin-top-10">
                            <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">
                                Dubai, UAE
                            </a>
                        </div>
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="four-columns column-50-100 padding-top-60 footer-phone">
                    <div class="column-l-r-margin-10">
                        <div class="headline-xxxxs">Phone</div>
                        <div class="margin-top-10">
                            <a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+971-568-568-341</a>
                        </div>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->

            <!-- footer-social start -->
            <ul class="footer-social-desktop-hidden list list_center padding-top-90">
                <li class="list__item">
                    <a href="#" class="flip-btn js-pointer-small" data-text="Facebook">Facebook</a>
                </li>
                <li class="list__item">
                    <a href="#" class="flip-btn js-pointer-small" data-text="Dribbble">Dribbble</a>
                </li>
                <li class="list__item">
                    <a href="#" class="flip-btn js-pointer-small" data-text="Instagram">Instagram</a>
                </li>
                <li class="list__item">
                    <a href="#" class="flip-btn js-pointer-small" data-text="Youtube">Youtube</a>
                </li>
                <li class="list__item">
                    <a href="#" class="flip-btn js-pointer-small" data-text="Behance">Behance</a>
                </li>
                <li class="list__item">
                    <a href="#" class="flip-btn js-pointer-small" data-text="Twitter">Twitter</a>
                </li>
            </ul><!-- footer-social end -->

            <!-- footer-copyright start -->
            <div class="footer-copyright text-center pos-abs pos-bottom-center">
                <p class="copyright-style">
                    &copy; 2020 MatafGroup All Right Reserved
                </p>
            </div><!-- footer-copyright end -->
        </div><!-- container end -->
    </div><!-- pos-rel end -->
</footer><!-- footer end -->
<!-- scripts -->
<script src="{{asset('front/main/js/plugins.js')}}"></script>
<script src="{{asset('front/main/js/footer-reveal.js')}}"></script>
<script src="{{asset('front/main/js/main.js')}}"></script>
<script src="{{asset('front/main/js/footer-reveal_init.js')}}"></script>
<script src="{{asset('front/main/js/jquery.ht-analog-clock.js')}}"></script>
<script>
    $(function () {
        $("#basic").htAnalogClock();
        $("#timezone").htAnalogClock({}, {
            timezone: "America/Los_Angeles"
        });
        $("#timezone_india").htAnalogClock({}, {
            timezone: "America/Los_Angeles"
        });
        $("#timezone_ksa").htAnalogClock({}, {
            timezone: "America/Los_Angeles"
        });
        $("#timezone_bah").htAnalogClock({}, {
            timezone: "America/Los_Angeles"
        });
        $("#timezone_mal").htAnalogClock({}, {
            timezone: "America/Los_Angeles"
        });
        $("#timezone_chi").htAnalogClock({}, {
            timezone: "America/Los_Angeles"
        });
        $("#custom").htAnalogClock({
            fillColor: "rgba(255, 100, 255, 0.2)",
            fontColor: "#000",
            pinColor: "#f80",
            majorTicksColor: "#000",
            minorTicksColor: "#111",
            hourHandColor: "#00f",
            minuteHandColor: "#0f0",
            drawSecondHand: false
        });
        $("#gray_fantastic").htAnalogClock(htAnalogClock.preset_gray_fantastic);
        $("#black_bolded").htAnalogClock(htAnalogClock.preset_black_bolded);
        $("#nice_bolded").htAnalogClock(htAnalogClock.preset_nice_bolded);
        $("#ocean_blue").htAnalogClock(htAnalogClock.preset_ocean_blue);
        $("#white_nice").htAnalogClock(htAnalogClock.preset_white_nice);
        $("#modern_dark").htAnalogClock(htAnalogClock.preset_modern_dark);
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>