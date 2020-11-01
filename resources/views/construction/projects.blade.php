@extends('construction.layout')
@section('content')
        <!--Content -->
<div class="content">
    <!--section  -->
    <section class="parallax-section header-section" data-scrollax-parent="true">
        <div class="bg"  data-bg="{{url('front/construction/images/bg/19.jpg')}}" data-scrollax="properties: { translateY: '200px' }"></div>
        <div class="overlay"></div>
        <div class="container big-container">
            <div class="section-title">
                <h3>Work items</h3>
                <div class="separator trsp-separator"></div>
                <h2>Our portfolio</h2>
                <p>Find below our latest & featured projects</p>
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
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                        <div class="parallax-header fl-wrap">
                            <span>01.</span>
                            <ul>
                                <li><a href="#">Structural</a></li>
                                <li><a href="#">Architecture</a></li>
                            </ul>
                        </div>
                        <img  src="{{url('projects/construction/balamand-university.png')}}"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Balamand University</a></h3>
                            <h4>We worked as Civil & Electro-Mechanical Contractor & Completed Successfully</h4>
                            <a href="{{url('/construction/projects')}}" class="btn float-btn flat-btn">View All</a>
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
                            <span>02.</span>
                            <ul>
                                <li><a href="#">Structural</a></li>
                                <li><a href="#">Architecture </a></li>
                                <li><a href="#">MEP</a></li>
                            </ul>
                        </div>
                        <img  src="{{url('projects/construction/sultan-villa-barsha.jpg')}}"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Sultan Villa, Barsha</a></h3>
                            <h4>We worked as sub contractor of all scope of works.</h4>
                            <a href="#" class="btn float-btn flat-btn">View project</a>
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
                            <span>03.</span>
                            <ul>
                                <li><a href="#">Structural</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="{{url('projects/construction/rashidiya-villa.jpg')}}"   alt="">
                        <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Rashidiya Villa</a></h3>
                            <h4>We worked as sub contractor for all civil & finishing works.</h4>
                            <a href="#" class="btn float-btn flat-btn">View project</a>
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
                            <span>04.</span>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture </a></li>
                            </ul>
                        </div>
                        <img  src="{{url('projects/construction/gemstone-office.jpg')}}"   alt="">
                        <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                            <h3><a href="#">Gemstone Office</a></h3>
                            <h4>We worked as Interior & Finishing Contractor.</h4>
                            <a href="#" class="btn float-btn flat-btn">View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--parallax-item end-->
        </div>
        <div class="partcile-dec" data-parcount="250"></div>
    </section>
    <!--section  end -->
</div>
<!-- content end -->
@endsection

