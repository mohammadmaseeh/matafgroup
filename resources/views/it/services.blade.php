@extends('it.layout')
@section('content')
      <!-- Breadcrumb -->
      <section class="iq-breadcrumb">
        
         <div class="iq-breadcrumb-info">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-7 align-self-center">
                     <h2 class="iq-fw-8 mb-3">Services</h2>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                     </nav>
                  </div>
                  <div class="col-md-5">
                     <img src="{{url('front/it/images/breadcrumb/service.png')}}" class="img-fluid" alt="image">
                  </div>
               </div>
            </div>
         </div>
         <div class="iq-breadcrumb-img">
        <img src="{{url('front/it/images/breadcrumb/02.png')}}" class="img-fluid breadcrumb-two" alt="image">
      </div>
      </section>
      <!-- Breadcrumb END -->
      <div class="main-content">
         <div class="overview-block-ptb">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <div class="section-title">
                        <p class="mt-2 text-uppercase  iq-fw-3 iq-ls-3">About Services</p>
                        <h2 class="title iq-fw-8">What We Offer?</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Solutions From  -->
         <section class="iq-solutions position-relative pt-0">
            <div class="container">
               <div class="row no-gutters">
                  <div class="tab-info iq-mtb-60" id="it">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-7">
                              <img src="{{url('front/it/images/offers/06.png')}}" class="img-fluid offer-info" alt="#">
                           </div>
                           <div class="col-lg-5 ">
                              <img src="{{url('front/it/images/others/icon.png')}}" class="img-fluid d-inline mr-4" alt="#">
                              <h4 class="title iq-fw-8 d-inline">IT Services</h4>
                              <ul class="listing-mark mt-4">
                                 <li>IT Consultancy, IT Infrastructure and Data&nbsp; Center design with Support and Maintenance Contracts</li>
                                 <li>IP Telephony Systems with Mobile App, Click to call, Web Conferencing, IVRs, Call Center with CRM Integration.</li>
                                 <li>Network Design, WAN connectivity&nbsp; over leased line,&nbsp; ADSL, MPLS,&nbsp; IP/VPN, 4G/5G, Wireless, VSAT with proven cost 50% reduction.</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-info iq-mtb-60" id="development">
                     <div class="container">
                        <div class="row flex-row-reverse">
                           <div class="col-lg-7">

                              <img src="{{url('front/it/images/offers/07.png')}}" class="img-fluid offer-info" alt="#">
                           </div>
                           <div class="col-lg-5 ">
                              <img src="{{url('front/it/images/others/icon.png')}}" class="img-fluid d-inline mr-4" alt="#">
                              <h4 class="title iq-fw-8 d-inline">Development</h4>
                              <p class="mt-3">
                                 We create artistically designed, meticulously developed and optimized websites, web applications and mobile applicationswhich provides a unique & quality experience to all stakeholders of the same.
                              </p>
                              <ul class="listing-mark mt-4">
                                 <li>Android Development</li>
                                 <li>iOS Development</li>
                                 <li>Web Development</li>
                                 <li>Content Management System</li>
                                 <li>Desktop Apps Development</li>
                              </ul>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="tab-info   iq-mtb-60" id="ecommerce">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-7">
                              <img src="{{url('front/it/images/offers/06.png')}}" class="img-fluid offer-info" alt="#">
                           </div>
                           <div class="col-lg-5 ">
                              <img src="{{url('front/it/images/others/icon.png')}}" class="img-fluid d-inline mr-4" alt="#">
                              <h4 class="title iq-fw-8 d-inline">E-commerce</h4>
                              <p class="mt-3">We have a seprate unit & team to develop & provide all types of E-commerce solutions</p>
                              <ul class="listing-mark mt-4">
                                 <li>E-Commerce Website</li>
                                 <li>Mobile Apps</li>
                                 <li>E-commerce Marketing</li>
                                 <li>Product Analysis</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-info  iq-mtb-60" id="marketing">
                     <div class="container">
                        <div class="row flex-row-reverse">
                           <div class="col-lg-7">
                              <img src="{{url('front/it/images/offers/07.png')}}" class="img-fluid offer-info" alt="#">
                           </div>
                           <div class="col-lg-5 ">
                              <img src="{{url('front/it/images/others/icon.png')}}" class="img-fluid d-inline mr-4" alt="#">
                              <h4 class="title iq-fw-8 d-inline">Digital Marketing</h4>
                              <p class="mt-3">It's people who search, not computers. If there isn't a happy human at the end of the journey, it's not a real result. We create your customers & make them happy.</p>
                              <ul class="listing-mark mt-4">
                                 <li>Search Engine Optimization (SEO)</li>
                                 <li>Social Media Marketing</li>
                                 <li>SMS Marketing</li>
                                 <li>Email Marketing</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Solutions END -->
      </div>
         <!-- Choose From END -->

      </div>
      <!-- Main Content END -->
@endsection