@extends('investment.layout')
@section('content')
        <!-- START SECTION ABOUT -->
<section class="about-us mt-5 mmb-5 pt-5 pb-5">
    <div class="container">
        <div class="section-title">
            <h3>Who</h3>
            <h2>We Are?</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 who-1">

                <div class="pftext">
                    <p>
                    Real estate has historically been the asset class that has created the highest wealth for investors around the world. However, large capital investment, specialised investment knowledge, asset management capabilities and understanding of market cycles has restricted the asset class to institutional investors, ultra high net worth individuals, pension and sovereign funds.
                    </p>
                    <p>
                    Property Share was founded by a team with deep experience in institutional real estate investing and technology with the aim to democratise real estate investing for ordinary investors by providing institutional quality analysis, asset management and liquidity at much lower investment thresholds.
                    </p>
                </div>
                <div class="box bg-2">
                    <a href="{{url('investment-portfolio')}}" class="text-center button button--moema button--text-thick button--text-upper button--size-s">read More</a>
                    <img src="front/investment/images/signature.png" class="ml-5" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 who">
                <div class="wprt-image-video w50">
                    <img alt="image" src="{{url('front/investment/images/projects/welcome.jpg')}}">
                    <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION SERVICES -->
<section class="services-home">
    <div class="container">
        <div class="section-title">
            <h3>What</h3>
            <h2>We Do?</h2>
            <p>A tech platform that provides its users access to institutional grade commercial real estate with property management and liquidity through resale.</p>
        </div>
        <div class="row pt-4">
            <div class="col-lg-4 col-md-12 m-top-0 m-bottom-40">
                <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fa fa-home bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Access</h4>
                        <p>to vetted Grade A commercial real estate with 8-10% yields and 17-20% projected returns</p>
                        <a class="text-base text-base-dark-hover text-size-13" href="{{url('investment-portfolio/process')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40">
                <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fas fa-building bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Liquidity</h4>
                        <p>through access to a separate proprietary resale platform<br><br></p>
                        <a class="text-base text-base-dark-hover text-size-13" href="{{url('investment-portfolio/process')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40 commercial">
                <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fas fa-warehouse bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Asset Management</h4>
                        <p>active asset management including leasing and property management to increase value<br><br></p>
                        <a class="text-base text-base-dark-hover text-size-13" href="{{url('investment-portfolio/process')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SERVICES -->
<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">500</p>
                        <h3>Mil. Invest Experience</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">20</p>
                        <h3>Crs Monthly Listings</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">250</p>
                        <h3>Investors</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0 last">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">20</p>
                        <h3>Technicals</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER UP -->
<!-- START SECTION POPULAR PLACES -->
<section class="popular-places">
    <div class="container">
        <div class="section-title">
            <h3>Most Popular</h3>
            <h2>Places</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Image Box -->
                <a href="properties-map.html" class="img-box hover-effect">
                    <img src="front/investment/images/popular-places/12.jpg" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Featured</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>Lucknow City, India</h4>
                        <span>2 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6">
                <!-- Image Box -->
                <a href="properties-map.html" class="img-box hover-effect">
                    <img src="front/investment/images/popular-places/13.jpg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4>Indore City, India</h4>
                        <span>3 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6">
                <!-- Image Box -->
                <a href="properties-map.html" class="img-box hover-effect no-mb">
                    <img src="front/investment/images/popular-places/14.jpg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4>Noida City, India</h4>
                        <span>1 Property</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Image Box -->
                <a href="properties-map.html" class="img-box hover-effect no-mb x3">
                    <img src="front/investment/images/popular-places/15.jpg" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Featured</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>Hyderabad City, India</h4>
                        <span>1 Property</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->
<!-- START SECTION BLOG -->
<section class="blog-section">
    <div class="container">
        <div class="section-title">
            <h3>Latest</h3>
            <h2>News</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-xs-12">
                    <div class="news-item news-item-sm">
                        <a href="#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{url('front/investment/images/blog/b-1.jpg')}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#"><h3>New Property</h3></a>
                            <span class="date">Jun 23, 2020 &nbsp;/&nbsp; Lucknow</span>
                            <div class="news-item-descr">
                                <p>We started investment in new property in Lucknow, U.P India</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-item news-item-sm">
                        <a href="#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{url('front/investment/images/blog/b-2.jpg')}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#"><h3>New Property</h3></a>
                            <span class="date">Jan 20, 2020 &nbsp;/&nbsp; Lucknow</span>
                            <div class="news-item-descr">
                                <p>We started investment in new property in Lucknow, U.P India</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-xs-12">
                    <div class="news-item news-item-sm">
                        <a href="#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{url('front/investment/images/blog/b-3.jpg')}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#"><h3>New Property</h3></a>
                            <span class="date">May 10, 2019 &nbsp;/&nbsp; Hyderabad</span>
                            <div class="news-item-descr">
                                <p>We started investment in new property in Hyderabad, U.P India</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-item news-item-sm">
                        <a href="#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{url('front/investment/images/blog/b-4.jpg')}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="#"><h3>New Property</h3></a>
                            <span class="date">Oct 15, 2018 &nbsp;/&nbsp; Indore</span>
                            <div class="news-item-descr">
                                <p>We started investment in new property in Indore, M.P India</p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection
