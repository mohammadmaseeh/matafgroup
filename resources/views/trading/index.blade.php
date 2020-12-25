@extends('trading.layout')
@section('content')
    <style>
        .card-flip-front .card-body{position:absolute;top:0;left:0;display:table;width:100%;min-height: 100%;}
        .card-flip-front .card-body .card-body-inner{display:table-cell;text-align:center;vertical-align:middle!important;}
        .card-flip-front .card-body .card-body-inner .content-inner {width:100%; padding:15px; padding-bottom:10px; background: #fff;border-radius: 10px;opacity: 0.9}
    </style>
    <!-- Hero with parallax effect-->
    <section class="position-relative pb-5">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-body">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
            </svg>
        </div>
        <div class="bg-overlay bg-primary opacity-65"></div>
        <div class="bg-overlay-content container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 order-md-2 overflow-hidden">
                    <div class="cs-parallax mr-n7 mr-md-0" style="max-width: 1030px;"><img class="d-block" src="{{url('front/trading/img/demo/marketing-seo/hero/lines.png')}}" alt="Lines"/>
                        <div class="cs-parallax-layer" style="z-index: 2;" data-depth="0.13"><img src="{{url('front/trading/img/demo/marketing-seo/hero/image.png')}}" alt="Image"/>
                        </div>
                        <div class="cs-parallax-layer" style="z-index: 3;" data-depth="0.25"><img src="{{url('front/trading/img/demo/marketing-seo/hero/shape-1.png')}}" alt="Badge"/>
                        </div>
                        <div class="cs-parallax-layer" data-depth="0.2"><img src="{{url('front/trading/img/demo/marketing-seo/hero/shape-2.png')}}" alt="Shape"/>
                        </div>
                        <div class="cs-parallax-layer" style="z-index: 3;" data-depth="0.5"><img src="{{url('front/trading/img/demo/marketing-seo/hero/shape-3.png')}}" alt="Badge"/>
                        </div>
                        <div class="cs-parallax-layer" style="z-index: 3;" data-depth="0.45"><img src="{{url('front/trading/img/demo/marketing-seo/hero/shape-4.png')}}" alt="Badge"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 pt-4 pb-5 py-md-5">
                    <div class="mx-auto mr-lg-4 pl-xl-3 order-md-1 text-center text-md-left" style="max-width: 420px;">
                        <h1 class="text-light mb-3">International Trading</h1>
                        <h3 class="text-light mb-3">Get more with us </h3>
                        <p class="text-light font-size-lg">We offer flexible Import/Export Deals</p>
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="mr-4"><img width="102" src="{{url('front/trading/img/demo/marketing-seo/hero/award-1.png')}}" alt="Award"/></div>
                            <div><img width="72" src="{{url('front/trading/img/demo/marketing-seo/hero/award-2.png')}}" alt="Award"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients (carousel)-->
    <!-- Hero-->
    <!-- About-->
    <section class="container bg-overlay-content" style="margin-top: -100px;">
        <div class="bg-light rounded-lg box-shadow py-5 py-md-6 px-4 px-md-0">
            <div class="row align-items-center py-3 py-md-0">
                <div class="col-xl-6 col-lg-5 col-md-4 text-center">
                    <h2 class="pb-3 pb-md-0"><span class="d-block text-body opacity-25">MATAF GROUP</span>ABOUT US</h2>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-7 text-center text-md-left">
                    <p>WE ARE NEW EMERGING BUSINESS FIRM WHO GIVE FIRST PREFERENCE TO CUSTOMER SATISFACTION IN ALL ASPECTS OF BUSINESS. HERE WE HAVE VERY RELIABLE SUPPLIERS FOR ALL PRODUCTS WHO HAVE VERY GOOD KNOWLEDGE AND EXPERIENCE IN PROVIDING QUALITY PRODUCTS.</p>
                    <div><a class="btn btn-primary" href="#">Read More...</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Our Services/Categories</h2>
        <p class="text-center">We are importer & exporter of many products/categories as following:<br><br></p>
        <div class="cs-masonry-filterable mb-3">
            <div class="cs-masonry-grid" data-columns="4">
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/12.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Metal</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Metal</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                            <span class="btn btn-primary btn-sm">Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/18.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Polymers</h3>
                                            <p class="font-size-sm text-blue">Polymers (Plastic) - Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Polymers</h3>
                                            <p class="font-size-sm text-blue">Polymers (Plastic) - Import/Export</p>
                                            <span class="btn btn-primary btn-sm">>Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/09.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Health Supplements</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Health Supplements</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                            <span class="btn btn-primary btn-sm">Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/09.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Fruits & Vegetables</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Fruits & Vegetables</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                            <span class="btn btn-primary btn-sm">Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/10.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Agro Commodities</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Agro Commodities</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                            <span class="btn btn-primary btn-sm">Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/15.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Surgical Equipment</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Surgical Equipment</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                            <span class="btn btn-primary btn-sm">Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/13.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Grow with Us</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Grow with us</h3>
                                            <p class="font-size-sm text-blue">We will enhance your Idea & Products for Import/Export</p>
                                            <span class="btn btn-primary btn-sm">Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                    <div class="card card-flip">
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img class="card-img" src="{{url('front/trading/img/portfolio/17.jpg')}}" alt="Portfolio thumb"/>
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Other Products</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="card-flip-back" href="{{url('international-trading/services')}}">
                                <div class="card-body">
                                    <div class="card-body-inner">
                                        <div class="content-inner">
                                            <h3 class="h5 card-title mb-2">Other Products</h3>
                                            <p class="font-size-sm text-blue">Import/Export</p>
                                            <span class="btn btn-primary btn-sm">Read More..</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center"><a class="btn btn-primary" href="#">See All Categories</a></div>
    </section>
    <!-- Testimonials-->
    <section class="container py-5 py-md-6 py-lg-7">
        <div class="row align-items-center cs-carousel py-4 py-md-2">
            <div class="col-md-8">
                <h2 class="pb-2 mb-4 text-center text-md-left">What people say about us</h2>
                <div class="cs-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;gutter&quot;: 20}">
                    <blockquote class="blockquote mt-3 mb-0">
                        <p>Increase international business with us as we are recommended as highly reputed international trading company by our esteemed customers.</p>
                        <footer class="media align-items-center">
                            <div class="media-body text-heading font-size-md font-weight-medium">Talha Altaf - Director</div>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 offset-lg-1">
                <div class="cs-carousel-pager d-flex flex-wrap flex-md-column justify-content-center align-items-center align-items-md-start border-left pt-4 mt-4 pl-md-3 pt-md-0 mt-md-0"><a class="cs-swap-image active mx-4 my-3 my-md-4" href="#" data-goto="1"><img class="cs-swap-to" width="136" src="{{url('front/trading/img/demo/gadget-landing/logos/01_color.png')}}" alt="Logo"/><img class="cs-swap-from" width="136" src="{{url('front/trading/img/demo/gadget-landing/logos/01_gray.png')}}" alt="Logo"/></a><a class="cs-swap-image mx-4 my-3 my-md-4" href="#" data-goto="2"><img class="cs-swap-to" width="130" src="{{url('front/trading/img/demo/gadget-landing/logos/02_color.png')}}" alt="Logo"/><img class="cs-swap-from" width="130" src="{{url('front/trading/img/demo/gadget-landing/logos/02_gray.png')}}" alt="Logo"/></a><a class="cs-swap-image mx-4 my-3 my-md-4" href="#" data-goto="3"><img class="cs-swap-to" width="114" src="{{url('front/trading/img/demo/gadget-landing/logos/05_color.png')}}" alt="Logo"/><img class="cs-swap-from" width="114" src="{{url('front/trading/img/demo/gadget-landing/logos/05_gray.png')}}" alt="Logo"/></a><a class="cs-swap-image mx-4 my-3 my-md-4" href="#" data-goto="4"><img class="cs-swap-to" width="103" src="{{url('front/trading/img/demo/gadget-landing/logos/03_color.png')}}" alt="Logo"/><img class="cs-swap-from" width="103" src="{{url('front/trading/img/demo/gadget-landing/logos/03_gray.png')}}" alt="Logo"/></a><a class="cs-swap-image mx-4 my-3 my-md-4" href="#" data-goto="5"><img class="cs-swap-to" width="143" src="{{url('front/trading/img/demo/gadget-landing/logos/04_color.png')}}" alt="Logo"/><img class="cs-swap-from" width="143" src="{{url('front/trading/img/demo/gadget-landing/logos/04_gray.png')}}" alt="Logo"/></a></div>
            </div>
        </div>
    </section>
    <!-- News-->
    <div class="position-relative bg-secondary" style="height: 420px;">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-body">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-center pt-3 pt-md-2 mb-5">Latest news &amp; insights</h2>
        <div class="cs-carousel">
            <div class="cs-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1"><span class="badge badge-lg badge-floating badge-floating-right badge-success">New</span>
                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link font-size-sm mb-2" href="#">Identity design</a>
                            <h3 class="h4 nav-heading mb-4"><a href="#">Top 5 Secrets of Making Successful Corporate Identity Design</a></h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2"><a class="media meta-link font-size-sm align-items-center" href="#"><img class="rounded-circle" width="42" src="{{url('front/trading/img/testimonials/02.jpg')}}" alt="Sanomi Smith"/>
                                "
                                <div class="media-body pl-2 ml-1 mt-n1">by<span class="font-weight-semibold ml-1">Sanomi Smith</span></div></a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Feb 12</a></div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link font-size-sm mb-2" href="#">Project management</a>
                            <h3 class="h4 nav-heading mb-4"><a href="#">What You Can Learn About Managing Projects</a></h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2"><a class="media meta-link font-size-sm align-items-center" href="#"><img class="rounded-circle" width="42" src="{{url('front/trading/img/testimonials/03.jpg')}}" alt="Tim Brooks"/>
                                "
                                <div class="media-body pl-2 ml-1 mt-n1">by<span class="font-weight-semibold ml-1">Tim Brooks</span></div></a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Jan 27</a></div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link font-size-sm mb-2" href="#">Brand strategy</a>
                            <h3 class="h4 nav-heading mb-4"><a href="#">Simple Steps to an Effective Brand Strategy. Real Life Examples</a></h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2"><a class="media meta-link font-size-sm align-items-center" href="#"><img class="rounded-circle" width="42" src="{{url('front/trading/img/testimonials/04.jpg')}}" alt="Charlie Welch"/>
                                "
                                <div class="media-body pl-2 ml-1 mt-n1">by<span class="font-weight-semibold ml-1">Charlie Welch</span></div></a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Jan 15</a></div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <div class="card-body pt-5 px-4 px-xl-5"><a class="meta-link font-size-sm mb-2" href="#">Web development</a>
                            <h3 class="h4 nav-heading mb-4"><a href="#">Build Complete Websites in a Fraction of Time With This Handy Tool</a></h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2"><a class="media meta-link font-size-sm align-items-center" href="#"><img class="rounded-circle" width="42" src="{{url('front/trading/img/testimonials/07.jpg')}}" alt="Sarah Palson"/>
                                "
                                <div class="media-body pl-2 ml-1 mt-n1">by<span class="font-weight-semibold ml-1">Sarah Palson</span></div></a>
                            <div class="mt-3 text-right text-nowrap"><a class="meta-link font-size-xs" href="#"><i class="fe-calendar mr-1 mt-n1"></i>&nbsp;Dec 19</a></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection