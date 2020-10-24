@extends('construction.layout')
@section('content')
        <!--  content -->
<div class="content">
    <!--  sroll-nav-wrap -->
    <div class="sroll-nav-wrap">
        <div class="sroll-nav-container">
            <nav class="scroll-nav scroll-init fl-wrap">
                <ul>
                    <li><a class="scroll-link act-scrlink" href="#serv1">01.<span>Hero</span></a></li>
                    <li><a class="scroll-link" href="#serv2">02.<span>Architecture</span></a></li>
                    <li><a class="scroll-link" href="#serv3">03.<span>Design</span></a></li>
                    <li><a class="scroll-link" href="#serv4">04.<span>Construction</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--  sroll-nav-wrap end   -->
    <!--  section  -->
    <section class="parallax-section header-section" data-scrollax-parent="true" id="serv1">
        <div class="bg"  data-bg="images/bg/18.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
        <div class="overlay"></div>
        <div class="container big-container">
            <div class="section-title">
                <h3>What we do</h3>
                <div class="separator trsp-separator"></div>
                <h2>Services</h2>
                <p>Curabitur bibendum mi sed rhoncus aliquet. Nulla blandit porttitor justo, at posuere sem accumsan nec.</p>
                <a href="#serv2" class="custom-scroll-link sect-scroll-link"><i class="fa fa-long-arrow-down"></i> <span>scroll down</span></a>
            </div>
        </div>
    </section>
    <!--  section  end-->
    <!--  section  -->
    <section   data-scrollax-parent="true" >
        <div class="container">
            <div class="section-container  fl-wrap">
                <!--serv-item end -->
                <div class="serv-item fl-wrap" id="serv2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pr-title">
                                Architecture
                                <span>Lorem Ipsum generators on the Internet tend to repeat king this the first true generator . </span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-wrap about-wrap">
                                <div class="blog-media fl-wrap">
                                    <div class="box-item">
                                        <img  src="images/folio/10.jpg"  class="respimg" alt="">
                                        <div class="overlay"></div>
                                        <a href="images/folio/10.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                                    </div>
                                </div>
                                <h3 class="bold-title">There are   many variations of passages of Lorem Ipsum available</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                                    Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                                </p>
                                <ul class="pr-list">
                                    <li><span>01.</span> Adipiscing elit</li>
                                    <li><span>02.</span>  Cras lacinia </li>
                                    <li><span>03.</span> Vel molestie </li>
                                    <li><span>04.</span> Cras lacinia magna</li>
                                </ul>
                                <div class="serv-price-wrap">
                                    <span>Price</span>
                                    $250-$350
                                </div>
                                <div class="clearfix"></div>
                                <span class="bold-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--serv-item end -->
                <!--serv-item end -->
                <div class="serv-item fl-wrap" id="serv3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pr-title">
                                Design
                                <span>Lorem Ipsum generators on the Internet tend to repeat king this the first true generator . </span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-wrap about-wrap">
                                <div class="blog-media fl-wrap">
                                    <div class="box-item">
                                        <img  src="images/folio/20.jpg" class="respimg"  alt="">
                                        <div class="overlay"></div>
                                        <a href="images/folio/20.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                                    </div>
                                </div>
                                <h3 class="bold-title">We started as a small, subdue, called hath give fourth. Them one over saying. So the god, greater. </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                                    Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                                </p>
                                <ul class="pr-list">
                                    <li><span>01.</span> Adipiscing elit</li>
                                    <li><span>02.</span>  Cras lacinia </li>
                                    <li><span>03.</span> Vel molestie </li>
                                    <li><span>04.</span> Cras lacinia magna</li>
                                </ul>
                                <div class="serv-price-wrap">
                                    <span>Price</span>
                                    $1250-$3350
                                </div>
                                <div class="clearfix"></div>
                                <span class="bold-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--serv-item end -->
                <!--serv-item end -->
                <div class="serv-item fl-wrap" id="serv4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pr-title">
                                Construction
                                <span>Lorem Ipsum generators on the Internet tend to repeat king this the first true generator . </span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-wrap about-wrap">
                                <div class="blog-media fl-wrap">
                                    <div class="box-item">
                                        <img  src="images/folio/19.jpg" class="respimg"   alt="">
                                        <div class="overlay"></div>
                                        <a href="images/folio/19.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                                    </div>
                                </div>
                                <h3 class="bold-title">We started as a small, subdue, called hath give fourth. Them one over saying. So the god, greater. </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                                    Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                                </p>
                                <ul class="pr-list">
                                    <li><span>01.</span> Adipiscing elit</li>
                                    <li><span>02.</span>  Cras lacinia </li>
                                    <li><span>03.</span> Vel molestie </li>
                                    <li><span>04.</span> Cras lacinia magna</li>
                                </ul>
                                <div class="serv-price-wrap">
                                    <span>Price</span>
                                    $1250-$3350
                                </div>
                                <div class="clearfix"></div>
                                <span class="bold-separator"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--serv-item end -->
            </div>
            <div class="order-item fl-wrap">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-5">
                        <h3>Ready to order your project ? </h3>
                    </div>
                    <div class="col-md-3"><a href="contact.html" class="btn float-btn flat-btn">Get in Touch</a></div>
                </div>
            </div>
        </div>
        <div class="limit-box fl-wrap"></div>
        <!--  partcile-dec-->
        <div class="partcile-dec" data-parcount="200"></div>
        <!--  partcile-dec  end-->
    </section>
    <!--  section  end-->
</div>
<!--  content  end-->

@endsection

