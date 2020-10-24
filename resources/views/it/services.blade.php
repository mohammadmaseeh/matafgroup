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
                     <h2 class="title iq-fw-8">Digital Marketing Services</h2>
                  </div>
               </div>
            </div>
         </div>
         <!-- Choose From  -->
         <div class="iq-choose-info pt-0  position-relative">
            <div class="container">
               <div class="row flex-row-reverse ">
                  <div class="col-lg-6 align-self-center mb-5">
                     
                     <div class="iq-accordion">
                        <div class="iq-ad-block ">
                           <a href="javascript:void(0)" class="ad-title iq-fw-6 ">Why do we use it?</a>
                           <div class="ad-details">
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                              </p>
                           </div>
                        </div>
                        <div class="iq-ad-block ">
                           <a href="javascript:void(0)" class="ad-title iq-fw-6 ">Where does it come from?</a>
                           <div class="ad-details">
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                              </p>
                           </div>
                        </div>
                        <div class="iq-ad-block ">
                           <a href="javascript:void(0)" class="ad-title iq-fw-6 ">There are many variationof passages?</a>
                           <div class="ad-details">
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                              </p>
                           </div>
                        </div>
                        <div class="iq-ad-block ">
                           <a href="javascript:void(0)" class="ad-title iq-fw-6 ">Standard chunk of Lorem Ipsum used since the 1500s?</a>
                           <div class="ad-details">
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 pt-5">
                     <img src="{{url('front/it/images/others/2.jpg')}}" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
            <div class="scrollme">
               <img src="{{url('front/it/images/service/3.png')}}"  class="img-fluid service-three animateme"
                  data-when="enter"
                  data-from="0.5"
                  data-to="0"
                  data-translatex="100" alt="image">
            </div>
            
         </div>
      </div>
         <!-- Choose From END -->
         <!--Solutions From  -->
         <section class="iq-solutions position-relative pt-0">
            <div class="container">
               <div class="row no-gutters">
                  <div class="col-lg-6 align-self-center">
                     <h2 class="iq-fw-8 mb-2">Our Best Marketing Solutions</h2>
                     <p class="mb-3">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,Lorem Ipsum.lorem quis bibendum auctor.</p>
                    <ul class="listing-mark">
                                <li>Simply dummy text of the Lorem Ipsum is printing.</li>
                                <li>Dummy text of the printing and typesetting industry.</li>
                                <li>Text of the printing and typesetting industry.</li>
                                <li>Ipsum has been the industry's standard dummy. </li>
                            </ul>
                  </div>
                  <div class="col-lg-6">
                     <img src="{{url('front/it/images/others/1.png')}}" class="img-fluid" alt="">
                  </div>
               </div>
            </div>
         </section>
         <!-- Solutions END -->
         <!-- Services END -->
         <!-- Works -->
         <section class="iq-works position-relative pt-0">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <div class="section-title">
                        <p class="mb-0 text-uppercase iq-fw-5 iq-ls-2">Best Ever Services</p>
                        <h2 class="title iq-fw-8">Best Services</h2>
                     </div>
                  </div>
               </div>
         <div class="row">
            <div class="col-lg-6">
              <div class="services purple">
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-cloud-download-outline"></i></div>
                  <h5 class="float-left mt-4">Data Analysis</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services purple">
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-bookmarks-outline"></i></div>
                  <h5 class="float-left mt-4">PPC Marketing</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services purple mb-lg-0">
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-pie-outline"></i></div>
                  <h5 class="float-left mt-4">Business Analytics</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services purple mb-lg-0">
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-world-outline"></i></div>
                  <h5 class="float-left mt-4">Social media marketing</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
          </div>
            </div>
            <div class="scrollme">
               <img src="{{url('front/it/images/service/1.png')}}"  class="img-fluid service-one animateme"
                  data-when="enter"
                  data-from="0.5"
                  data-to="0"
                  data-translatey="500" alt="image">
            </div>
         </section>
         <!-- Works END -->
         <!-- Our Blog -->
         <section class="iq-blogs position-relative pt-0">
            <div class="container">
               <div class="col-sm-12 text-center">
                  <div class="section-title">
                     <p class="mb-0 text-uppercase iq-fw-5 iq-ls-2">Latest Articles</p>
                     <h2 class="title iq-fw-8">Our Stories Post</h2>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1">
                        <div class="item">
                           <div class="main-blog">
                              <div class="blog-img">
                                 <img src="{{url('front/it/images/blog/01.jpg')}}" class="img-fluid" alt="image">
                              </div>
                              <div class="blog-detail">
                                 <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                                 <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Fully dedicated finding.</h5></a>
                                 <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                                 <div class="blog-info">
                                    <a href="#"><img src="{{url('front/it/images/blog/clients/01.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">John Deo</span></a>
                                    <ul class="d-inline-block float-right">
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="main-blog">
                              <div class="blog-img">
                                 <img src="{{url('front/it/images/blog/02.jpg')}}" class="img-fluid" alt="image">
                              </div>
                              <div class="blog-detail">
                                 <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                                 <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Progravida nibh vel.</h5></a>
                                 <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                                 <div class="blog-info">
                                    <a href="#"><img src="{{url('front/it/images/blog/clients/02.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">Kips Leo</span></a>
                                    <ul class="d-inline-block float-right">
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="main-blog">
                              <div class="blog-img">
                                 <img src="{{url('front/it/images/blog/03.jpg')}}" class="img-fluid" alt="image">
                              </div>
                              <div class="blog-detail">
                                 <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                                 <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Auctor alinean.</h5></a>
                                 <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                                 <div class="blog-info">
                                    <a href="#"><img src="{{url('front/it/images/blog/clients/03.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">Glen Jax</span></a>
                                    <ul class="d-inline-block float-right">
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="main-blog">
                              <div class="blog-img">
                                 <img src="{{url('front/it/images/blog/04.jpg')}}" class="img-fluid" alt="image">
                              </div>
                              <div class="blog-detail">
                                 <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                                 <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Alinean sollicitudin.</h5></a>
                                 <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                                 <div class="blog-info">
                                    <a href="#"><img src="{{url('front/it/images/blog/clients/04.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">Nik Jorden</span></a>
                                    <ul class="d-inline-block float-right">
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="main-blog">
                              <div class="blog-img">
                                 <img src="{{url('front/it/images/blog/01.jpg')}}" class="img-fluid" alt="image">
                              </div>
                              <div class="blog-detail">
                                 <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                                 <a href="blog-details-left-sidebar-2.html"><h5 class="mt-1 iq-fw-8">Fully dedicated finding.</h5></a>
                                 <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                                 <div class="blog-info">
                                    <a href="#"><img src="{{url('front/it/images/blog/clients/02.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">John Deo</span></a>
                                    <ul class="d-inline-block float-right">
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                                       <li class="d-inline-block"><a href="javascript:void(0)"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <img src="{{url('front/it/images/blog/05.png')}}" class="img-fluid blog-one" alt="image">
         </section>
         <!-- Our Blog END -->
      </div>
      <!-- Main Content END -->
@endsection