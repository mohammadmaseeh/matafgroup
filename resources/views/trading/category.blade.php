@extends('trading.layout')
@section('content')
        <style>
            section.container{
            }
            .breadcrumb{
                border-radius: 0px;
            }
            @media all and (min-width: 676px){
                .breadcrumb{
                    height: 300px;
                }
            }
            @media all and (max-width: 676px){
                .breadcrumb{
                    max-height: 300px;
                }
            }
        </style>
        <!-- Page title-->
<section class="position-relative breadcrumb" style="background: #000000;">
    <div class="cs-shape bg-body" style="opacity: 0.4; height: 300px!important;">
        <img src="{{url('images/trading/breadcrumb/'.$category.'.jpg')}}" style="width: 100%;"/>
    </div>
    <div class="container bg-overlay-content text-center  pt-md-6 pt-lg-7 py-5 my-lg-3">
        <h1 class="text-light mb-0">International Trading<span class="h2 d-inline-block bg-faded-primary text-primary px-3 py-2 rounded-lg ml-3">{!! $category !!}</span></h1>
    </div>
</section>
@if($category == 'metal')
<section class="container pt-5 pt-md-6 pt-lg-7">
    <h2 class="text-center pt-3 pt-md-2 pb-4">Metal Import/Export</h2>
    <p class="text-center">Mataf Group is a global supplier of scrap and recycled ferrous & non-ferrous metals. We are a trusted partner to a range of companies across the recycling industry from processors, refineries, smelters, to manufacturers. We handle all major categories of scrap and recycled non-ferrous metals, including aluminium, copper, lead, nickel and zinc, with substantial interest in other non-ferrous metals. We operate as a global organization with Our sales are centralised through our headquarters in the United Arab Emirates, Dubai. The scale and scope of our operation coupled with deep functional and industry expertise means our customers can rely on us to meet their near and long-term supply needs.<br><br></p>
    <div class="cs-gallery row">
        @for($metal=1;$metal<=8;$metal++)
        <div class="col-md-3 col-sm-6 mb-grid-gutter">
            <a class="cs-gallery-item rounded-lg" href="{{url('images/trading/categories/metal/item-'.$metal.'.jpg')}}">
                <img src="{{url('images/trading/categories/metal/item-'.$metal.'.jpg')}}" alt="Metal"/>
            </a>
        </div>
        @endfor
    </div>
</section>
@endif
@if($category == 'polymers')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Polymers Import/Export</h2>
        <p class="text-center">We deal in polymer products internationally. Visit us to get your chance.<br><br></p>
        <div class="cs-gallery row">

        </div>
    </section>
@endif
@if($category == 'health-supplements')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Health Supplements Import/Export</h2>
        <p class="text-center">Health supplements are tranding products for modern era of fitness. We deal with best entities all around the world.<br><br></p>
        <div class="cs-gallery row">

        </div>
    </section>
@endif
@if($category == 'fruits-and-vegetables')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Fruits and Vegetables Import/Export</h2>
        <p class="text-center">Fruits & Vegetables are necessary daily usage products. We export many products to many countries & import some fruits as well.<br><br></p>
        <div class="cs-gallery row">

        </div>
    </section>
@endif
@if($category == 'surgical-equipment')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Surgical Equipment Import/Export</h2>
        <p class="text-center">India is making cheap & best qualtiy surgical products to fulfill the needs of worlds and we deal in it.<br><br></p>
        <div class="cs-gallery row">

        </div>
    </section>
@endif
@if($category == 'agro-commodities')
    <section>
        <div class="container pt-5 pt-md-6 pt-lg-7">
            <h2 class="text-center pt-3 pt-md-2 pb-4">Agro Commodities Import/Export</h2>
            <p class="text-center">The major agro products can be broadly grouped into foods, fibers, fuels, and raw materials. We cater for ALL types of Agriculture Products in any quantity required.<br><br></p>
            <div class="cs-gallery row">
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/rice.jpg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/rice.jpg')}}" alt="Agro Commodities - Rice"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Rice</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/wheat.jpg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/wheat.jpg')}}" alt="Agro Commodities - Wheat"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Wheat</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/corn.jpg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/corn.jpg')}}" alt="Agro Commodities - Corn"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Corn</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/soybean.jpg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/soybean.jpg')}}" alt="Agro Commodities - Soybean"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Soybean</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/pulses.jpg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/pulses.jpg')}}" alt="Agro Commodities - Pulses"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Pulses</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/barely.jpg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/barely.jpg')}}" alt="Agro Commodities - Barely"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Barely</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/oat.jpg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/oat.jpg')}}" alt="Agro Commodities - Oat"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Oat</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/agro-commodities/guar-gum.jpeg')}}">
                        <img src="{{url('images/trading/categories/agro-commodities/guar-gum.jpeg')}}" alt="Agro Commodities - Guar Gum"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Guar Gum</h3>
                            <p class="font-size-sm text-muted mb-1">in Agro Commodities</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endif

@if($category == 'sugar')
    <section>
        <div class="container pt-5 pt-md-6 pt-lg-7">
            <h2 class="text-center pt-3 pt-md-2 pb-4">Sugar Import/Export</h2>
            <p class="text-center">Sugar is a sweet crystalline substance obtained from various plants, especially sugar cane used as a sweetener in food and drink. We deal in all types of sugar such as White Sugar, Brown Sugar, Beet Sugar etc.<br><br></p>
            <div class="cs-gallery row">
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/sugar/white-sugar.jpg')}}">
                        <img src="{{url('images/trading/categories/sugar/white-sugar.jpg')}}" alt="Sugar - White Sugar"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">White Sugar</h3>
                            <p class="font-size-sm text-muted mb-1">in Sugar</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/sugar/brown-sugar.jpg')}}">
                        <img src="{{url('images/trading/categories/sugar/brown-sugar.jpg')}}" alt="Sugar - Brown Sugar"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Brown Sugar</h3>
                            <p class="font-size-sm text-muted mb-1">in Sugar</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/sugar/beet-sugar.jpg')}}">
                        <img src="{{url('images/trading/categories/sugar/beet-sugar.jpg')}}" alt="Sugar - Beet Sugar"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Beet Sugar</h3>
                            <p class="font-size-sm text-muted mb-1">in Sugar</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/sugar/sugar-s30-m30.jpg')}}">
                        <img src="{{url('images/trading/categories/sugar/sugar-s30-m30.jpg')}}" alt="Sugar S30 M30 Indian - Beet Sugar"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Sugar S30 M30 Indian</h3>
                            <p class="font-size-sm text-muted mb-1">in Sugar</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endif
@if($category == 'oil')
    <section>
        <div class="container pt-5 pt-md-6 pt-lg-7">
            <h2 class="text-center pt-3 pt-md-2 pb-4">Oil Import/Export</h2>
            <p class="text-center">
                Edible oil is a fatty liquid that is physically extracted from several vegetables, plants and nuts. It is used by human being to cook multiple dishes.
            </p>
            <div class="cs-gallery row">
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/sunflower-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/sunflower-oil.jpg')}}" alt="Oil - Sunflower Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Sunflower Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/refined-palm-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/refined-palm-oil.jpg')}}" alt="Oil - Palm Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Refined Palm Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/palm-olein.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/palm-olein.jpg')}}" alt="Oil - Plam Olein"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Palm Olein</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/soybean-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/soybean-oil.jpg')}}" alt="Oil - Soybean Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Soybean Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/olive-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/olive-oil.jpg')}}" alt="Oil - Olive Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Olive Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/mustard-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/mustard-oil.jpg')}}" alt="Oil - Mustard Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Mustard Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/coconut-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/coconut-oil.jpg')}}" alt="Oil - Coconut Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Coconut Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/almond-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/almond-oil.jpg')}}" alt="Oil - Almond Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Almond Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/castor-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/castor-oil.jpg')}}" alt="Oil - Castor Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Castor Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/rapeseed-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/rapeseed-oil.jpg')}}" alt="Oil - Rapeseed Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Rapeseed Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/corn-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/corn-oil.jpg')}}" alt="Oil - Corn Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Corn Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-grid-gutter">
                    <a class="cs-gallery-item rounded-lg text-center bg-white" href="{{url('images/trading/categories/oil/sunflower-oil.jpg')}}">
                        <img src="{{url('images/trading/categories/oil/sunflower-oil.jpg')}}" alt="Oil - Sunflower Oil"/>
                        <div class="caption">
                            <h3 class="h5 nav-heading mt-1 mb-2">Sunflower Oil</h3>
                            <p class="font-size-sm text-muted mb-1">in Oil</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endif
@endsection