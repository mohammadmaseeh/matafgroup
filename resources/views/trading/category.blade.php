@extends('trading.layout')
@section('content')
        <!-- Page title-->
<section class="position-relative bg-dark pt-7 pb-5 pb-md-7 bg-size-cover bg-fixed" style="background-image: url('{{url('images/trading/cubes-bg.jpg')}}');">
    <div class="cs-shape cs-shape-bottom cs-shape-curve bg-body">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
        </svg>
    </div>
    <div class="container bg-overlay-content text-center pt-md-6 pt-lg-7 py-5 my-lg-3">
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
@if($category == 'health-supplements')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Health Supplements Import/Export</h2>
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
@if($category == 'fruits-and-vegetables')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Fruits and Vegetables Import/Export</h2>
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
@if($category == 'surgical-equipment')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Surgical Equipment Import/Export</h2>
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
@if($category == 'agro-commodities')
    <section class="container pt-5 pt-md-6 pt-lg-7">
        <h2 class="text-center pt-3 pt-md-2 pb-4">Agro Commodities Import/Export</h2>
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
@endsection