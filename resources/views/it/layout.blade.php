<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Markethon - Digital Marketing Agency Responsive HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/it/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('front/it/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('front/it/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front/it/css/responsive.css')}}">
</head>
<body>
{{--<!-- loading -->--}}
{{--<div id="loading">--}}
    {{--<div id="loading-center">--}}
        {{--<img src="images/loader.gif" alt="loder">--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- loading End -->--}}
<header id="main-header" class="header-three">
    <!-- menu start -->
    <nav id="menu-1" class="mega-menu">
        <!-- menu list items container -->
        <div class="menu-list-items">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                            <li>
                                <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-fluid pr-4"></a>
                            </li>
                        </ul>
                        <ul class="menu-contact">
                            <li class="text-black iq-fw-9"><a href="{{url('it-marketing')}}" ><i class="pl-4"></i>IT & Marketing</a></li>
                        </ul>
                        <!-- menu links -->
                        <ul class="menu-links">
                            <!-- active class -->
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li >
                                <a href="{{url('/it-marketing')}}" class="{{request()->path() == 'it-marketing'?'active':''}}">IT & Marketing</a>
                            </li>
                            <li>
                                <a href="{{url('it-marketing/services')}}" class="{{request()->path() == 'it-marketing/services'?'active':''}}">Services</a>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}" target="_blank">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- menu end -->
</header>
<!-- Main -->
@yield('content')
<!-- Main -->
<!-- Main Content END -->
<div class="clearfix"></div>
<footer class="footer-three position-relative">
    <div class="container">
        <div class="row ">
            <div class=" col-lg-5 col-md-6  iq-rmt-40">
                <div class="iq-footer-logo mb-5">
                    <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" class="img-fluid" alt="image"></a>
                </div>
                <form class="position-relative subscribe-form">
                    <div class="form-group mb-0">
                        <input type="email" class="form-control position-relative subscription-email  mb-0" placeholder="Enter Email">
                    </div>
                    <a class="slide-button button bt-subscribe subscription-button " href="javascript:void(0)">
                        <div class="first">Subscribe</div>
                        <div class="second">Subscribe</div>
                    </a>
                </form>
                <div class="contact mt-4 d-inline-block">
                    <span class="pl-4 d-inline-block"><i class="fa fa-envelope"></i><a href="mail:info@matafgroup.com">info@matafgroup.com</a></span>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 footer-link  iq-rmt-40">
                <h5 class="iq-fw-7 ">Links</h5>
                <ul class="list-inline">
                    <li class="list-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="list-item"><a href="{{url('/it-marketing')}}">IT & Marketing</a></li>
                    <li class="list-item"><a href="{{url('/it-marketing/services')}}">IT Services</a></li>
                    <li class="list-item"><a href="{{url('/contact-us')}}" target="_blank">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-5 col-sm-12 footer-link iq-rmt-40">
                <h5 class="iq-fw-7 ">Other Business Sectors</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-inline">
                            <li class="list-item"><a href="{{url('/construction')}}">Construction</a></li>
                            <li class="list-item"><a href="{{url('/real-estate')}}">Real Estate</a></li>
                            <li class="list-item"><a href="{{url('/hospitality')}}">Hospitality</a></li>
                            <li class="list-item"><a href="{{url('/decorate')}}">Innovative Products</a></li>
                            <li class="list-item"><a href="{{url('/international-trading')}}">International Trading</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-inline">
                            <li class="list-item"><a href="{{url('/consultation')}}">Consultation</a></li>
                            <li class="list-item"><a href="{{url('/education')}}">Education</a></li>
                            <li class="list-item"><a href="{{url('/health-wellness')}}">Health & Wellness</a></li>
                            <li class="list-item"><a href="{{url('/recycling')}}">Recycling</a></li>
                            <li class="list-item"><a href="{{url('/robotics-agriculture')}}">Robotic Agriculture</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
            </div>
        </div>
        <div class="row">


            <div class="col-lg-6 col-md-6">
                <div class="social-media">
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f iq-fw-6"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter iq-fw-6"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin iq-fw-6"></i></a></li>
                    </ul>
                </div>
                <div class="lang">
                    <i class="fas fa-globe"></i>
                    <select name="languagelist" class="iq-language iq-fw-4">
                        <option value="volvo">English</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <div class="footer-copyright iq-fw-5">2008-{{date('Y')}} &copy; <a href="{{url('/')}}" class="text-green iq-fw-5">MatafGroup</a> </div>
            </div>

        </div>
    </div>
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"><i class="ion-ios-arrow-thin-up"></i></a>
    </div>
    <!-- back-to-top End -->
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('front/it/js/jquery-min.js')}}" ></script>
<!-- popper  -->
<script src="{{asset('front/it/js/popper.min.js')}}"></script>
<!--  bootstrap -->
<script src="{{asset('front/it/js/bootstrap.min.js')}}" ></script>
<!-- Modernizr JavaScript -->
<script src="{{asset('front/it/js/modernizr.js')}}"></script>
<!-- Appear JavaScript -->
<script src="{{asset('front/it/js/appear.min.js')}}"></script>
<!-- Megamenu  -->
<script src="{{asset('front/it/js/mega_menu.min.js')}}"></script>
<!-- Timeline JavaScript -->
<script src="{{asset('front/it/js/timeline.js')}}"></script>
<!-- Wow -->
<script src="{{asset('front/it/js/wow.min.js')}}"></script>
<!-- scrollme -->
<script src="{{asset('front/it/js/jquery.scrollme.min.js')}}"></script>
<!-- countdown JavaScript -->
<script src="{{asset('front/it/js/countdown.js')}}"></script>
<!-- waypoints JavaScript -->
<script src="{{asset('front/it/js/waypoints.min.js')}}"></script>
<!-- Counterup JavaScript -->
<script src="{{asset('front/it/js/jquery.counterup.min.js')}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{asset('front/it/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{asset('front/it/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope JavaScript -->
<script src="{{asset('front/it/js/isotope.pkgd.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('front/it/revslider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('front/it/revslider/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Retina JavaScript -->
<script src="{{asset('front/it/js/retina.min.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{asset('front/it/js/custom.js')}}"></script>
<script>
    var revapi17,
            tpj=jQuery;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_17_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_17_1");
        }else{
            revapi17 = tpj("#rev_slider_17_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"http://localhost/projects-online/matafgroup/public/front/it/revslider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    onHoverStop:"off",
                },
                visibilityLevels:[1240,1024,778,480],
                gridwidth:1170,
                gridheight:900,
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"enterpoint",
                    speed:400,
                    levels:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,55],
                },
                shadow:0,
                spinner:"spinner0",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    }); /*ready*/
</script>
</body>
</html>