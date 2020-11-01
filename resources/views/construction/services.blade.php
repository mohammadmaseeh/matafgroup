@extends('construction.layout')
@section('content')
        <!--  content -->
<div class="content">
    <!--  sroll-nav-wrap -->
    <div class="sroll-nav-wrap">
        <div class="sroll-nav-container">
            <nav class="scroll-nav scroll-init fl-wrap">
                <ul>
                    <li><a class="scroll-link act-scrlink" href="#serv1">01.<span>Overview</span></a></li>
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
        <div class="bg"  data-bg="{{url('front/construction/images/bg/18.jpg')}}" data-scrollax="properties: { translateY: '200px' }"></div>
        <div class="overlay"></div>
        <div class="container big-container">
            <div class="section-title">
                <h3>What we do</h3>
                <div class="separator trsp-separator"></div>
                <h2>Services</h2>
                <p>We do high quality jobs and provide all customers with good services treating their property with respect. We are relaible and competitive with our pricing and activities with our clients.</p>
                <a href="#serv2" class="custom-scroll-link sect-scroll-link"><i class="fas fa-eye fa-5x"></i> <span>scroll down</span></a>
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
                                Civil Works
                                <span>
                                    We do civil works from scratch to top. We have professional team to do it.
                                </span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-wrap about-wrap">
                                <div class="blog-media fl-wrap">
                                    <div class="box-item">
                                        <img  src="{{url('front/construction/images/folio/2.jpg')}}"  class="respimg" alt="">
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                                <p class="text-capitalize">
                                    MatafGroup has professional expertise in all industrial, structural, architectural, infrastructures related civil works.
                                    <br>
                                    All the projects undertaken by MatafGroup are executed on a "task force" basis with its high quality and expert management and a work force dedicated to their work.
                                </p>
                                <ul class="pr-list">
                                    <li><span>01.</span> Structural</li>
                                    <li><span>02.</span>  Waterproofing</li>
                                    <li><span>03.</span> Epoxy</li>
                                    <li><span>04.</span> and more...</li>
                                </ul>
                                <a class="serv-price-wrap" href="{{url('/contact-us')}}" target="_blank">
                                    <span>QUOTATION</span>
                                    Get Now
                                </a>
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
                                Design & Architecture
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-wrap about-wrap">
                                <div class="blog-media fl-wrap">
                                    <div class="box-item">
                                        <img  src="{{url('front/construction/images/folio/20.jpg')}}" class="respimg"  alt="">
                                        <div class="overlay"></div>
                                        <a href="images/folio/20.jpg" class="image-popup popup-image"><i class="fa fa-search"  ></i></a>
                                    </div>
                                </div>
                                <p>
                                    We are dedicated to providing innovative designs & build services, from building brand new facilities to renovating and rehabilitating those that already exist. Our client experience is far-reaching and includes projects for hotels, commercial buildings, corporate, shopping mall, retail, industrial, university, healthcare, school, residential, municipal facilities and more.
                                    <br>
                                    We understand that each project is different, and our engineering and building services can be customized according to a project’s specialized needs, from specialty design with a limited scope, to full design-build that includes construction.
                                </p>
                                <ul class="pr-list">
                                    <li><span>01.</span>Design</li>
                                    <li><span>02.</span>Build</li>
                                    <li><span>03.</span>Finishing</li>
                                </ul>
                                <a class="serv-price-wrap" href="{{url('/contact-us')}}" target="_blank">
                                    <span>QUOTATION</span>
                                    Get Now
                                </a>
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
                                Electrical
                                <span>We provide services for a range of projects strengthening our expertise, including complete low voltage electrical installations for Commercial Buildings, Villas, Warehouses and more. </span>
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
                                <p>
                                    We provide its services widely with skilled & experienced engineers, manpower, and elite suppliers
                                    Get the advantage of our professional team's ability to handle all types of services in a modern process and save your valuable effort and Ideas!
                                </p>
                                <ul class="pr-list">
                                    <li><span>01.</span> Cabling & Wiring </li>
                                    <li><span>02.</span>  Power & Lighting</li>
                                    <li><span>03.</span> Low Current</li>
                                    <li><span>04.</span> Fire Alaram</li>
                                    <li><span>05.</span> BMS</li>
                                </ul>
                                <a class="serv-price-wrap" href="{{url('/contact-us')}}" target="_blank">
                                    <span>QUOTATION</span>
                                    Get Now
                                </a>
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
                                Mechanical
                                <span>We provide services for a range of projects strengthening our expertise, including complete HVAC (Air Conditioning), Plumbing, Fire Fighting for Commercial Buildings, Villas, Warehouses and more. </span>
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
                                <p>
                                    Our Mechanical Department has what installation, designing, engineering solutions takes, that offer more for less in a proficient manner.
                                    <br>
                                    We are having professional to complete all kind of mechanical works such as HVAC, Fire Fighting, Chiller, Plumbing & Steel Works Etc.
                                </p>
                                <ul class="pr-list">
                                    <li><span>01.</span> HVAC </li>
                                    <li><span>02.</span>  Fire Fighting</li>
                                    <li><span>03.</span> Steel Works</li>
                                    <li><span>04.</span> Plumbing</li>
                                </ul>
                                <a class="serv-price-wrap" href="{{url('/contact-us')}}" target="_blank">
                                    <span>QUOTATION</span>
                                    Get Now
                                </a>
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
                    <div class="col-md-3"><a href="{{url('contact-us')}}" target="_blank" class="btn float-btn flat-btn">Get in Touch</a></div>
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

