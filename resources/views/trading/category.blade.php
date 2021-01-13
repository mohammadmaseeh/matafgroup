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