@extends('recycling.layout-2')
@section('content')
        <!-- page_title_section start -->
<div class="page_title_section">
    <div class="page_header">
        <div class="container">
            <div class="row">
                <!-- section_heading start -->
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li><a href="#"> Home </a></li>
                            <li> services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page_title_section end -->
<!--sw about us top start-->
<div class="sw_about_top_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="sw_abot_top_txt_wrapper">

                    <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                        <h1>Our services Overview</h1>
                        <img src="{{url('front/recycling/images/hd_line_dark.png')}}" alt="title">
                        <p>
                            Our company is a leadng environmental solutions provider serving many municipal, commercial and industrial customers in all over the India.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="sw_about_top_img">
                    <img src="{{url('front/recycling/images/iner_servce.png')}}" alt="img">

                </div>
            </div>
        </div>
    </div>
</div>
<!--sw about us top end-->
<!-- sw services wrapper start -->
<div class="sw_iner_service_wrapper sw_iner_service_wrapper_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="gb_icon_wrapper">
                    <div class="gb_icon_img">
                        <img src="{{url('front/recycling/images/spec_1.png')}}" alt="title">
                    </div>
                    <div class="gb_icon_content">
                        <h4><a href="#">Waste Pickup</a></h4>
                    </div>
                    <p>Scheduled Waste Pickup Dumpster Rental Hazardous Waste Disposal</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="gb_icon_wrapper">
                    <div class="gb_icon_img">
                        <img src="{{url('front/recycling/images/spec_2.png')}}" alt="title">
                    </div>
                    <div class="gb_icon_content">
                        <h4><a href="#">Recycling Services</a></h4>
                    </div>
                    <p>Food and Organic Waste Pickup Recycling Pickup Battery Recycling.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="gb_icon_wrapper">
                    <div class="gb_icon_img">
                        <img src="{{url('front/recycling/images/spec_3.png')}}" alt="title">
                    </div>
                    <div class="gb_icon_content">
                        <h4><a href="#">Other Waste Services</a></h4>
                    </div>
                    <p>Landfill & Facilities Bulk Waste Pickup Document and Product Destruction</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="gb_icon_wrapper">
                    <div class="gb_icon_img">
                        <img src="{{url('front/recycling/images/spec_4.png')}}" alt="title">
                    </div>
                    <div class="gb_icon_content">
                        <h4><a href="#">Construction Waste</a></h4>
                    </div>
                    <p>Portable Toilets, Universal Waste Recycling, LEED,Certification</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="gb_icon_wrapper">
                    <div class="gb_icon_img">
                        <img src="{{url('front/recycling/images/spec_5.png')}}" alt="title">
                    </div>
                    <div class="gb_icon_content">
                        <h4><a href="#">Recycle By Mail</a></h4>
                    </div>
                    <p>Battery Recycling, Dental Waste, Aerosol Cans</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="gb_icon_wrapper">
                    <div class="gb_icon_img">
                        <img src="{{url('front/recycling/images/spec_6.png')}}" alt="title">
                    </div>
                    <div class="gb_icon_content">
                        <h4><a href="#">Medical Waste</a></h4>
                    </div>
                    <p>Medical Waste, Disposal Containers, Sharps Containers, PACK-RAT Units</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection