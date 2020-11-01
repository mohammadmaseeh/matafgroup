<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>MatafGroup - Construction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('front/construction/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('front/construction/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('front/construction/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('front/construction/css/yourstyle.css')}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
</head>
<body>
<!-- loader -->
<div class="loader">
    <div id="movingBallG">
        <div class="movingBallLineG"></div>
        <div id="movingBallG_1" class="movingBallG"></div>
    </div>
</div>
<!-- loader end -->
<!--================= Main   ================-->
<div id="main">
    <!--================= header ================-->
    <header class="main-header">
        <!-- logo -->
        <a class="logo-holder" href="{{url('/')}}">
            <img src="{{url('images/logo.png')}}" alt="">&nbsp;&nbsp;
            <span class="mr-3" style="border-left: 2px solid #ccc; height: 100px; line-height: 30px; font-size: 15px; color: #cccccc;">&nbsp;&nbsp;Construction</span>
        </a>
        <!-- logo end -->
        <!-- mobile nav -->
        <div class="nav-button-wrap">
            <div class="nav-button vis-main-menu"><span></span><span></span><span></span></div>
        </div>
        <!-- mobile nav end-->
        <!--  navigation -->
        <div class="nav-holder">
            <nav>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home </a>
                    </li>
                    <li>
                        <a href="{{url('construction')}}" class="{{request()->path() == 'construction'?'act-link':''}}">Construction & Infrastructure</a>
                    </li>
                    <li>
                        <a href="{{url('construction/services')}}" class="{{request()->path() == 'construction/services'?'act-link':''}}">Services</a>
                    </li>
                    <li>
                        <a href="{{url('construction/projects')}}" class="{{request()->path() == 'construction/projects'?'act-link':''}}">Projects</a>
                    </li>
                    <li>
                        <a href="{{url('contact-us')}}" target="_blank">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </header>
    <!-- header  end -->
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <!-- content-holder  -->
        <div class="content-holder">
            @yield('content')
            <!--=============== content-footer   ===============-->
            <div class="height-emulator"></div>
            <footer class="content-footer">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="footer-logo" href="{{url('/')}}"><img src="{{url('images/logo.png')}}" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-header fl-wrap"><span>01.</span> Contacts</div>
                            <div class="footer-box fl-wrap">
                                <ul>
                                    <li><span>Mail :</span><a href="#" target="_blank">info@matafgroup.com</a></li>
                                    <li> <span>Adress :</span><a href="#" target="_blank">India, KSA, UAE</a></li>
                                    <li><span>Phone :</span><a href="#">+91-7078-911316</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-header fl-wrap"><span>02.</span> Subscribe</div>
                            <div class="footer-box fl-wrap">
                                <div class="subcribe-form fl-wrap">
                                    <span>Newsletter</span>
                                    <form id="subscribe">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button">Submit</button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="fl-wrap policy-box">
                                <p> &#169; MatafGroup 2008-{{date('Y')}}.  All rights reserved.  </p>
                            </div>
                        </div>
                    </div>
                    <div class="to-top"><i class="fa fa-long-arrow-up"></i></div>
                </div>
            </footer>
            <!-- content-footer end    -->
        </div>
        <!-- content-holder end -->
    </div>
    <!-- wrapper end -->
    <!--search-form-holder -->
    <div class="search-form-holder fixed-search">
        <div class="search-form-bg"></div>
        <div class="search-form-wrap">
            <div class="container">
                <form class="searchform" method="get"  >
                    <input type="text" autocomplete="off"   name="s" placeholder="Type and Enter to Search">
                </form>
                <div class="close-fixed-search"></div>
            </div>
            <div class="dublicated-text"></div>
        </div>
    </div>
    <!--search-form-holder  end-->
    <!-- Share container  -->
    <div class="share-wrapper isShare">
        <div class="share-container"></div>
    </div>
    <!-- Share container  end-->
    <!-- footer -->
    <footer class="main-footer">
        <div class="fixed-title"><span>Home Slider</span></div>
        <div class="footer-social">
            <ul>
                <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
            </ul>
        </div>
    </footer>
    <!-- footer end-->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{asset('front/construction/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/construction/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('front/construction/js/scripts.js')}}"></script>
</body>
</html>