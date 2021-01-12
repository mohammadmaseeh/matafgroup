
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>MatafGroup - International Trading (Import/Export)</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .cs-page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .cs-page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .cs-page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .cs-page-loading.active > .cs-page-loading-inner {
            opacity: 1;
        }
        .cs-page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #737491;
        }
        .cs-page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #766df4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                var preloader = document.querySelector('.cs-page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 2000);
            };
        })();

    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{asset('vendor/simplebar/dist/simplebar.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('vendor/tiny-slider/dist/tiny-slider.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('vendor/lightgallery.js/dist/css/lightgallery.min.css')}}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('front/trading/css/theme.min.css')}}">
    <!-- Google Tag Manager-->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
</head>
<!-- Body-->
<body>
<!-- Google Tag Manager (noscript)-->
<noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
</noscript>
<!-- Page loading spinner-->
<div class="cs-page-loading active">
    <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div><span>Loading...</span>
    </div>
</div>
<main class="cs-page-wrapper">
    <header class="cs-header navbar navbar-expand-lg navbar-light bg-light navbar-sticky" data-scroll-header>
        <div class="container px-0 px-xl-3">
            <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{url('/')}}">
                <img class="d-none d-lg-block" width="153" src="{{url('images/logo.png')}}" alt="MatafGroup - Internation Trading"/>
                <img class="d-lg-none" width="58" src="{{url('images/logo.png')}}" alt="MatafGroup - Internation Trading"/>
            </a>
            <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
                <div class="cs-offcanvas-cap navbar-box-shadow">
                    <h5 class="mt-1 mb-0">Menu</h5>
                    <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="cs-offcanvas-body">
                    <!-- Menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->path() == 'international-trading' ?'active':''}}" href="{{url('/international-trading')}}" >International Trading</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link dropdown-toggle {{request()->path() == 'international-trading/categories*' ?'active':''}}" href="{{url('/international-trading/categories')}}" >Categories/Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('international-trading/categories/metal')}}">Metal</a></li>
                                <li><a class="dropdown-item" href="{{url('international-trading/categories/polymers')}}">Polymers</a></li>
                                <li><a class="dropdown-item" href="{{url('international-trading/categories/health-supplements')}}">Health Supplements</a></li>
                                <li><a class="dropdown-item" href="{{url('international-trading/categories/fruits-and-vegetables')}}">Fruits and Vegetables</a></li>
                                <li><a class="dropdown-item" href="{{url('international-trading/categories/surgical-equipment')}}">Surgical Equipment</a></li>
                                <li><a class="dropdown-item" href="{{url('international-trading/categories/agro-commodities')}}">Agro Commodities</a></li>
                                <li><hr></li>
                                <li><a class="dropdown-item" href="{{url('international-trading/categories')}}">All Categories</a></li>
                            </ul>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link " href="{{url('/contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Page content-->
    @yield('content')
            <!-- Split Careers + Subscription-->
    <section class="container py-5 py-md-6 py-lg-7">
        <div class="row no-gutters py-3 py-md-0">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="d-flex flex-column h-100 rounded-left bg-position-left-center bg-no-repeat py-6" style="background-image: url(img/demo/business-consulting/careers-bg.jpg); background-color: #f4f4f6;"><span class="d-sm-none d-md-block d-lg-none bg-overlay rounded-left bg-secondary" style="opacity: 1;"></span>
                    <div class="text-center mx-auto mr-sm-5 mr-md-0 mr-md-auto mr-lg-5 pr-lg-3 bg-overlay-content" style="max-width: 240px;">
                        <h2 class="mb-4 pb-2">Our job offers</h2><a class="btn btn-primary" href="#">Join Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column h-100 rounded-right bg-dark px-4 py-5">
                    <div class="py-2 mx-auto text-center" style="max-width: 450px;">
                        <h2 class="text-light">Subscribe to newsletter</h2>
                        <p class="text-light mb-4">Our monthly critical issues</p>
                        <form class="input-group pt-2">
                            <input class="form-control" type="email" placeholder="Your email" required>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit"><i class="fe-send font-size-xl mr-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer-->
<footer class="cs-footer bg-dark pt-5 pt-md-6">
    <div class="container pt-3 pt-md-0">
        <div class="row pb-3">
            <div class="col-md-4 ml-auto pb-1 mb-4">
                <div class="cs-widget cs-widget-light">
                    <h4 class="cs-widget-title mb-3">Contacts</h4>
                    <div class="d-lg-flex">
                        <ul class="mr-lg-5">
                            <li><a class="cs-widget-link" href="mailto:impex@matafgroup.com"><i class="fe-mail font-size-lg mr-2"></i>impex@matafgroup.com</a></li>
                        </ul>
                    </div>
                    <div class="d-lg-flex">
                        <ul class="mr-lg-5">
                            <li><a class="cs-widget-link" href="mailto:international-trading@matafgroup.com"><i class="fe-mail font-size-lg mr-2"></i>international-trading@matafgroup.com</a></li>
                        </ul>
                    </div>
                    <div class="d-lg-flex">
                        <ul>
                            <li><a class="cs-widget-link" href="tel:9107848015"><i class="fe-phone font-size-lg mr-2"></i>+91-62-6262-3636</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 ml-auto pb-1 mb-4">
                <div class="row">
                    <div class="col-md-4 cs-widget cs-widget-light">
                        <h4 class="cs-widget-title">Important Links</h4>
                        <ul>
                            <li><a class="cs-widget-link" href="{{url('/')}}">Home</a></li>
                            <li><a class="cs-widget-link" href="{{url('/international-trading')}}">International Trading</a></li>
                            <li><a class="cs-widget-link" href="{{url('/about-us')}}">About Us</a></li>
                            <li><a class="cs-widget-link" href="{{url('/contact-us')}}">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 cs-widget cs-widget-light">
                        <h4 class="cs-widget-title">Other Sectors</h4>
                        <ul>
                            <li><a class="cs-widget-link" href="{{url('construction')}}">Construction</a></li>
                            <li><a class="cs-widget-link" href="{{url('real-estate')}}">Real Estate</a></li>
                            <li><a class="cs-widget-link" href="{{url('hospitality')}}">Hospitality</a></li>
                            <li><a class="cs-widget-link" href="{{url('decorate')}}">Innovative Products</a></li>
                            <li><a class="cs-widget-link" href="{{url('recycling')}}">Recycling</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 cs-widget cs-widget-light">
                        <h4 class="cs-widget-title">&nbsp;</h4>
                        <ul>
                            <li><a class="cs-widget-link" href="{{url('education')}}">Education</a></li>
                            <li><a class="cs-widget-link" href="{{url('it-marketing')}}">IT & Marketing</a></li>
                            <li><a class="cs-widget-link" href="{{url('health-wellness')}}">Health & Wellness</a></li>
                            <li><a class="cs-widget-link" href="{{url('consultation')}}">Consultation</a></li>
                            <li><a class="cs-widget-link" href="{{url('robotics-agriculture')}}">Robotic Agriculture</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border-light">
        <div class="row align-items-center my-3 pt-4">
            <div class="col-md-6 order-md-1 mb-3">
                <p class="font-size-sm mb-0">
                    <span class="text-light opacity-50 mr-1">&copy; 1998-{{date('Y')}} All rights reserved.</span>
                    <a class="nav-link-style nav-link-light" href="{{url('/')}}" target="_blank" rel="noopener">Mataf Group -  International Trading</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-->
<!-- Back to top button-->
<a class="btn-scroll-top" href="#top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span>
    <i class="btn-scroll-top-icon fe-arrow-up"></i>
</a>
<!-- Vendor scrits: js libraries and plugins-->
<script src="{{asset('vendor/jquery/dist/jquery.slim.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('vendor/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/shufflejs/dist/shuffle.min.js')}}"></script>
<script src="{{asset('vendor/lightgallery.js/dist/js/lightgallery.min.js')}}"></script>
<script src="{{asset('vendor/lg-video.js/dist/lg-video.min.js')}}"></script>
<script src="{{asset('vendor/parallax-js/dist/parallax.min.js')}}"></script>
<!-- Main theme script-->
<script src="{{asset('front/trading/js/theme.min.js')}}"></script>
</body>
</html>