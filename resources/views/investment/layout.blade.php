
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>MatafGroup - Investment Portfolio</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('front/investment/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('front/investment/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/font-awesome.min.css')}}">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{asset('front/investment/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/revolution/css/navigation.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('front/investment/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/investment/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('front/investment/css/default.css')}}">
</head>

<body>
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    <header id="header-container">
        <!-- Header -->
        <div id="header">
            <div class="container">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" alt="" style="width: 150px;"></a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li><a class="current" href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Property Investment</a>
                                <ul>
                                    <li><a href="#">Property Listing</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Private Access</a></li>
                            <li><a href="#">Resources</a>
                                <ul>
                                    <li><a href="#">How it Works</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Our Investors</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->
                <!-- Right Side Content / End -->
                <div class="right-side hidden-lg-down">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <a href="{{url('/investment/dashboard')}}" class="button border">Dashboard</a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->
            </div>
        </div>
        <!-- Header / End -->
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- STAR HEADER SEARCH -->
    <div id="map-container" class="fullwidth-home-map dark-overlay">
        <!-- Video -->
        <div class="video-container">
            <video poster="{{url('front/investment/images/bg/video-poster.jpg')}}" loop autoplay muted>
                <source src="{{url('front/investment/video/4.mp4')}}" type="video/mp4">
            </video>
        </div>
        <div id="hero-area" class="main-search-inner search-2 vid">
            <div class="container vid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-inner2">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <h1 class="mb-2">Invest now in pre-rented properties</h1>
                                <p class="mb-0">Generate monthly revenue & other benefits from capital appreciation</p>
                                <p>&nbsp;</p>
                            </div>
                            <!--/ End Welcome Text -->
                            <!-- Search Form -->
                            <div class="trip-search vid">
                                <form class="form row">
                                    <!-- Form Location -->
                                    <div class="form-group location col-md-1">
                                        &nbsp;
                                    </div>
                                    <div class="form-group location col-md-2">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Location</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">Lucknow, India</li>
                                                <li data-value="2" class="option selected ">Indore, India</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Location -->
                                    <!-- Form Property Type -->
                                    <div class="form-group col-md-3">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Type</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">Hospitality</li>
                                                <li data-value="2" class="option selected ">Apartments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Property Type -->
                                    <!-- Form Property Status -->
                                    <div class="form-group duration col-md-3">
                                        <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected ">For Sale</li>
                                                <li data-value="2" class="option">For Rent</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--/ End Form Property Status -->
                                    <!-- Form Button -->
                                    <div class="form-group button col-md-2">
                                        <button type="submit" class="btn">Search</button>
                                    </div>
                                    <!--/ End Form Button -->
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER SEARCH -->
    @yield('content')

            <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="netabout">
                            <a href="index-2.html" class="logo">
                                <img src="{{url('images/logo.png')}}" alt="logo">
                            </a>
                            <p>Transparency in deals and communication is the hallmark of Matafgroup.</p>
                        </div>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">Indore, M.P, India</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">info@matafgroup.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Business Sectors</h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href="{{url('construction')}}">Construction</a></li>
                                    <li><a href="{{url('real-estate')}}">Real Estate</a></li>
                                    <li><a href="{{url('hospitality')}}">Hospitality</a></li>
                                    <li><a href="{{url('decorate')}}">Innovative Products</a></li>
                                    <li><a href="{{url('trading')}}">International Trading</a></li>
                                    <li><a href="{{url('investment')}}">Investment</a></li>
                                </ul>
                                <ul class="nav-right">
                                    <li><a href="{{url('consultation')}}">Consultation</a></li>
                                    <li><a href="{{url('it-marketing')}}">IT & Marketing</a></li>
                                    <li><a href="{{url('health-wellness')}}">Health & Wellness</a></li>
                                    <li><a href="{{url('recycling')}}">Recycling</a></li>
                                    <li><a href="{{url('robotics-agriculture')}}">Robotic Agriculture</a></li>
                                    <li><a href="{{url('education')}}">Education</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="navigation">
                            <h3>Important Links</h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('investment')}}">Investment Portfolio</a></li>
                                    <li><a href="{{url('investment/process')}}">Investment Process</a></li>
                                    <li><a href="{{url('investment/faqs')}}">Investment FAQs</a></li>
                                    <li><a href="{{url('investment/investors')}}">Investors</a></li>
                                    <li><a href="{{url('about-us')}}">About Us</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="newsletters">
                            <h3>Newsletters</h3>
                            <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                        </div>
                        <form class="bloq-email mailchimp form-inline" method="post">
                            <label for="subscribeEmail" class="error"></label>
                            <div class="email">
                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email" style="width: 100%">
                                <input type="submit" value="Subscribe" style="width: 100%">
                                <p class="subscription-success"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <p>1998-{{date('Y')}} © Copyright - All Rights Reserved.</p>
                <p>MatafGroup - Investment</p>
            </div>
        </div>
    </footer>

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <!--Style Switcher===========================================-->
    <div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x" ></i></a>
        <div class="theme-colours">
            <p class="font-italic">Choose Colour style</p>
            <ul>
                <li>
                    <a href="#." class="blue" id="blue"></a>
                </li>
                <li>
                    <a href="#." class="pink" id="pink"></a>
                </li>
                <li>
                    <a href="#." class="orange" id="orange"></a>
                </li>
                <li>
                    <a href="#." class="purple" id="purple"></a>
                </li>
                <li>
                    <a href="#." class="green" id="green"></a>
                </li>
                <li>
                    <a href="#." class="red" id="red"></a>
                </li>
                <li>
                    <a href="#." class="cyan" id="cyan"></a>
                </li>
                <li>
                    <a href="#." class="sky-blue" id="sky-blue"></a>
                </li>
                <li>
                    <a href="#." class="gray" id="gray"></a>
                </li>
                <li>
                    <a href="#." class="brown" id="brown"></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ARCHIVES JS -->
    <script src="{{asset('front/investment/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/investment/js/jquery-ui.js')}}"></script>
    <script src="{{asset('front/investment/js/tether.min.js')}}"></script>
    <script src="{{asset('front/investment/js/moment.js')}}"></script>
    <script src="{{asset('front/investment/js/transition.min.js')}}"></script>
    <script src="{{asset('front/investment/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/investment/js/mmenu.min.js')}}"></script>
    <script src="{{asset('front/investment/js/mmenu.js')}}"></script>
    <script src="{{asset('front/investment/js/slick.min.js')}}"></script>
    <script src="{{asset('front/investment/js/slick3.js')}}"></script>
    <script src="{{asset('front/investment/js/fitvids.js')}}"></script>
    <script src="{{asset('front/investment/js/fitvids.js')}}"></script>
    <script src="{{asset('front/investment/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/investment/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/investment/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('front/investment/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/investment/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('front/investment/js/lightcase.js')}}"></script>
    <script src="{{asset('front/investment/js/search.js')}}"></script>
    <script src="{{asset('front/investment/js/owl.carousel.js')}}"></script>
    <script src="{{asset('front/investment/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/investment/js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('front/investment/js/newsletter.js')}}"></script>
    <script src="{{asset('front/investment/js/jquery.form.js')}}"></script>
    <script src="{{asset('front/investment/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('front/investment/js/searched.js')}}"></script>
    <script src="{{asset('front/investment/js/forms-2.js')}}"></script>
    <script src="{{asset('front/investment/js/color-switcher.js')}}"></script>

    <!-- Slider Revolution scripts -->
    <script src="{{asset('front/investment/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('front/investment/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

    <script>
        var tpj = jQuery;
        var revapi1071;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1071_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1071_1");
            } else {
                revapi1071 = tpj("#rev_slider_1071_1").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 20000,
                    navigation: {},
                    responsiveLevels: [1240, 1024, 778, 778],
                    visibilityLevels: [1240, 1024, 778, 778],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [600, 500, 400, 300],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55],
                        type: "mouse",
                    },
                    shadow: 0,
                    spinner: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
                // CHANGE THE API REFERENCE, AND THE ELEMENTS YOU WISH TO BLUR / UNBLUR
                // SET START BLUR FACTOR, END BLUR FACTOR AND
                var api = revapi1071,
                        ElementsToBlur = api.find('.toblur.tp-caption'),
                        ElementsToUnBlur = api.find('.tounblur.tp-caption'),
                        UnBlurFactor = 2,
                        UnBlurStart = 3,
                        UnBlurEnd = 0,
                        BlurStart = 0,
                        BlurEnd = 5,
                        BlurFactor = 2,
                        blurCall = new Object();
                // SOME CODE FOR BLUR AND UNBLUR ELEMENTS
                // EXTEND THE REVOLUTION SLIDER FUNCTION
                // CHANGE ONLY IF YOU KNOW WHAT YOU DO
                blurCall.inmodule = "parallax";
                blurCall.atposition = "start";
                blurCall.callback = function() {
                    var proc = api.revgetparallaxproc(),
                            blur = UnBlurStart + (proc * UnBlurStart * UnBlurFactor) + UnBlurEnd,
                            nblur = Math.abs(proc * BlurEnd * BlurFactor) + BlurStart;

                    blur = blur < UnBlurEnd ? UnBlurEnd : blur;
                    nblur = nblur > BlurEnd ? BlurEnd : nblur;

                    ElementsToUnBlur = jQuery(ElementsToUnBlur.selector);
                    punchgs.TweenLite.set(ElementsToUnBlur, {
                        '-webkit-filter': 'blur(' + (blur) + 'px)',
                        'filter': 'blur(' + (blur) + 'px)'
                    });
                    punchgs.TweenLite.set(ElementsToBlur, {
                        '-webkit-filter': 'blur(' + (nblur) + 'px)',
                        'filter': 'blur(' + (nblur) + 'px)'
                    });
                }

                api.bind("revolution.slide.layeraction", function(e) {
                    blurCall.callback();
                });

                api.bind("revolution.slide.onloaded", function(e) {
                    revapi1071.revaddcallback(blurCall);
                });
            }
        }); /*ready*/

    </script>

    <!-- MAIN JS -->
    <script src="{{asset('front/investment/js/script.js')}}"></script>

</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 09:27:05 GMT -->
</html>
