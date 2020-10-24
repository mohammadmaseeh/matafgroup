@extends('construction.layout')
@section('content')
        <!--Content -->
<div class="content">
    <!--section  -->
    <section class="parallax-section header-section" data-scrollax-parent="true">
        <div class="bg"  data-bg="images/bg/23.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
        <div class="overlay"></div>
        <div class="container big-container">
            <div class="section-title">
                <h3>Work items</h3>
                <div class="separator trsp-separator"></div>
                <h2>Our portfolio <br> Parallax</h2>
                <p>Curabitur bibendum mi sed rhoncus aliquet. Nulla blandit porttitor justo, at posuere sem accumsan nec.</p>
                <a href="#sec1" class="custom-scroll-link sect-scroll-link"><i class="fa fa-long-arrow-down"></i> <span>scroll down</span></a>
            </div>
        </div>
    </section>
    <!--section  end -->
    <!--section  -->
    <section >
        <div class="container">
            <!--parallax-item -->
            <div class="row">
                <div class="col-md-7">
                    <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                        <div class="parallax-header fl-wrap">
                            <span>01.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="images/folio/2.jpg"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">Theatre de Stoep</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
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
                            <span>02.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="images/folio/9.jpg"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">New Acropolis Museum</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
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
                            <span>03.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="images/folio/10.jpg"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">Concept House In Rome</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
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
                            <span>04.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="images/folio/19.jpg"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="portfolio-single.html">New Acropolis Museum</a></h3>
                            <h4>There are many variations of passages of Lorem Ipsum</h4>
                            <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--parallax-item end-->
            <div class="content-nav">
                <ul>
                    <li><a href="portfolio-single.html" class="ln"><i class="fa fa fa-angle-left"></i><span class="tooltip">Prev - Page 1</span></a></li>
                    <li>
                        <a href="#" class="cur-page"><span>Page 02. </span></a>
                    </li>
                    <li><a href="portfolio-single2.html" class="rn"><i class="fa fa fa-angle-right"></i><span class="tooltip">Next - Page 3 </span></a></li>
                </ul>
            </div>
        </div>
        <div class="partcile-dec" data-parcount="250"></div>
    </section>
    <!--section  end -->
</div>
<!-- content end -->
@endsection

