@extends('layout')
@section('content')
        <!-- home slider start -->
<section id="up" class="pos-rel section-bg-dark-1 js-home-slider fullscreen-slider">
  <!-- swiper-wrapper start -->
  <div class="swiper-wrapper">
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/main.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>
      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
                <span class="anim-slide tr-delay-02">Mataf Group</span>
            </span>
            <span class="hidden-box d-block">
                <span class="anim-slide tr-delay-03">Creative &</span>
            </span>
            <span class="hidden-box d-block">
                <span class="anim-slide tr-delay-04">Novation Ideas</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="{{url('about-us')}}" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/construction.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">We Provide</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">Best</span> Construction
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">Services</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="{{url('construction')}}" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/real-estate.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small text-center padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">Real Estate</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">Best</span> Deals &
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">Properties</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="{{url('real-estate')}}" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/hospitality.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small text-center padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">Hospitality</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">At Best</span> with
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">Care</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="{{url('hospitality')}}" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/it.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small text-center padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">We'r Provided</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">Best</span> IT & Digital
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">Services</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="{{url('it-marketing')}}" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/education.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small text-center padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">We Run</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">Educational</span> Entities
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">Passionaly</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="{{url('education')}}" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/it.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small text-center padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">We Work on</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">Innovative</span> Products such as
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">PhotoCoffee</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="#" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/recycling.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small text-center padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">We Care</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">Our</span> Planet
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">by Recycling</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="#" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{url('images/sliders/health.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small text-center padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">We provide</span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-03">
              <span class="text-color-red">Health</span> & Wellness
            </span>
            </span>
            <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-04 text-color-red">services & do events.</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="#" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div>
    <!-- swiper-slide end -->
    <!-- swiper-slide start -->
    <div class="swiper-slide">
      <!-- slide-bg -->
      <div class="js-parallax-slide-bg bg-img-cover" style="background-image:url('{{asset('images/projects/black-bike/josh-nuttall-pIwu5XNvXpk-unsplash.jpg')}}')"></div>
      <!-- bg-overlay -->
      <div class="bg-overlay-black"></div>

      <!-- content start -->
      <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
        <div class="container small padding-top-bottom-120">
          <h2 class="headline-xl">
            <span class="hidden-box d-block">
                <span class="anim-slide tr-delay-02">Best Solutions</span>
            </span>
            <span class="hidden-box d-block">
                <span class="anim-slide tr-delay-03">& Ideas for</span>
            </span>
            <span class="hidden-box d-block">
                <span class="anim-slide tr-delay-04">Your Business</span>
            </span>
          </h2>
          <div class="margin-top-30 anim-fade tr-delay-08">
            <a href="#" class="border-btn js-pointer-large">
              <span class="border-btn__inner">Read more</span>
              <span class="border-btn__lines-1"></span>
              <span class="border-btn__lines-2"></span>
            </a>
          </div>
        </div>
      </div><!-- content end -->
    </div><!-- swiper-slide end -->
  </div><!-- swiper-wrapper end -->

  <!-- swiper-button-prev start -->
  <div class="swiper-button-prev-box fullscreen-slider-arrow after-preloader-anim">
    <div class="anim-fade">
      <div class="swiper-button-prev"></div>
    </div>
  </div><!-- swiper-button-prev end -->
  <!-- swiper-button-next start -->
  <div class="swiper-button-next-box fullscreen-slider-arrow after-preloader-anim">
    <div class="anim-fade tr-delay-06">
      <div class="swiper-button-next"></div>
    </div>
  </div><!-- swiper-button-next end -->

  <!-- swiper-pagination start -->
  <div class="pagination-box fullscreen-slider-pagination after-preloader-anim">
    <div class="anim-fade tr-delay-03">
      <div class="swiper-pagination counter-pagination"></div>
    </div>
  </div><!-- swiper-pagination end -->
</section><!-- home slider end -->

<!-- about us start -->
<section id="down" class="pos-rel section-bg-dark-2">
  <!-- pos-rel start -->
  <div class="pos-rel padding-top-bottom-120">
    <!-- flex-container start -->
    <div class="container flex-container padding-bottom-70">
      <!-- column start -->
      <div class="four-columns padding-bottom-20">
        <!-- title start -->
        <h2 class="column-l-r-margin-10 headline-m js-scrollanim">
          <span class="hidden-box d-block">
              <span class="anim-slide">
                  About <span class="text-color-red">Us</span>
              </span>
          </span>
        </h2><!-- title end -->
        <p class="body-text-s anim-text-reveal js-scrollanim column-l-r-margin-10 mrgT10">
          Mataf Group is a major multifarious group established in 1998 based in Indore, India, and operating across other parts of the world. Over the past 12 years, Mataf Group built an outstanding reputation for delivering excellent service to our partners and customers. With great success in the market, our company is in the stage of expanding its business overseas. We combine commitment, our local and multinational market knowledge with the technical expertise and diverse product ranges of our overseas partners to forge enduring fruitful relationships.
        </p><a href="{{url('about-us')}}" class="border-btn js-pointer-large column-l-r-margin-10 mrgT10">
          <span class="border-btn__inner">Read more</span>
          <span class="border-btn__lines-1"></span>
          <span class="border-btn__lines-2"></span>
        </a>
      </div><!-- column end -->
      <div class="four-columns padding-bottom-20 about_mission">
        <img src = "images/about/mission.png">
        <h5>Mission</h5>
        <p class="body-text-s anim-text-reveal js-scrollanim">
          To be a total solution provider for all sorts of Engineering & Specialties Works in all over the world.
        </p>
      </div><!-- column end -->
      <div class="four-columns padding-bottom-20 about_mission">
        <!-- title start -->
        <img src = "images/about/vision.png">
        <h5>Vision</h5>
        <p class="body-text-s anim-text-reveal js-scrollanim">
          We are committed to continuously provide quality service/ high level job performance safety, maintain honorable relationship with clients as well as profitably meeting our business objectives.
        </p>
      </div><!-- column end -->

    </div><!-- flex-container end -->


  </div><!-- pos-rel end -->
</section><!-- about us end -->

<!-- portfolio start -->
<section class="pos-rel section-bg-light-2" data-midnight="black">
  <!-- pos-rel start -->
  <div class="pos-rel padding-top-bottom-120">
    <!-- title start -->
    <h2 class="headline-xxxl text-color-black text-center hidden-box js-scrollanim">
            <span class="anim-slide">
                Our <span class="text-color-red">Sectors</span>
            </span>
    </h2><!-- title end -->

    <!-- js-isotope-filter-grid-box start -->
    <div class="js-isotope-filter-grid-box container full">

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item branding">
        <a href="{{url('construction')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/construction.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Construction & Infrastructure</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
        <a href="{{url('real-estate')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/real-estate.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">

            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Real Estate</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
        <a href="{{url('property-sharing')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/property-sharing.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">

            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Property Sharing</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
        <a href="{{url('hospitality')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/hotels.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Hotels & Hospitality</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
        <a href="{{url('health-wellness')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/health.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Health & Wellness</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
        <a href="{{url('recycling')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/recycling.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">

            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Recycling</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item marketing">
        <a href="{{url('education')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/education.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Education</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
        <a href="{{url('it-marketing')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/marketing.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">IT & Marketing</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->
      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
        <a href="{{url('/decorate')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/innovative.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Innovative Products</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->

      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item photoshoot">
        <a href="{{url('/robotics-agriculture')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/robotics-agriculture.jpeg" alt="Robotic Agriculture">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Robotic Agriculture</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->
      <!-- grid-item start -->
      <div class="padding-top-60 grid-item-33-50-100 js-isotope-filter-grid-item branding">
        <a href="{{url('/consultation')}}" class="grid-margin-box hover-box js-animsition-link js-pointer-large">
          <div class="anim-img-scale anim-img-scale_hover js-img-scale">
            <img class="anim-img-scale__inner" src="images/sectors/consultation.jpg" alt="project">
          </div>
          <div class="margin-top-10 js-scrollanim">
            <h3 class="hidden-box">
              <span class="headline-xxxs text-color-black anim-slide tr-delay-02">Consultation</span>
            </h3>
          </div>
        </a>
      </div><!-- grid-item end -->
    </div><!-- js-isotope-filter-grid-box end -->
  </div><!-- pos-rel end -->
</section><!-- portfolio end -->

<!-- team start -->
<section class="pos-rel section-bg-dark-2">
  <!-- pos-rel start -->
  <div class="pos-rel padding-top-bottom-120">
    <!-- title start -->
    <h2 class="headline-xxl text-center js-scrollanim hidden-box">
        <span class="anim-slide">
            Our <span class="text-color-red">Recent</span> Projects
        </span>
    </h2><!-- title end -->
    <!-- js-3-view-slider start -->
    <div class="js-3-view-slider padding-top-bottom-90 hidden-box pos-rel">
      <!-- swiper-wrapper start -->
      <div class="swiper-wrapper js-slider-scroll-anim">
        <!-- swiper-slide start -->
        <div class="swiper-slide">
          <!-- anim-img-scale start -->
          <div class="anim-img-scale hover-box">
            <img class="anim-img-scale__inner" src="images/projects/34-Pavilion.jpg" alt="34 Pavilion">
          </div><!-- anim-img-scale end -->
          <!-- content start -->
          <div class="margin-top-20 margin-left-20">
            <h4 class="subhead-m anim-text-double-fill tr-delay-01" data-text="34 Pavilion">34 Pavilion</h4><br>
            <p class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Real Estate">Real Estate</p>
          </div><!-- content end -->
        </div>
        <!-- swiper-slide end -->
        <!-- swiper-slide start -->
        <div class="swiper-slide">
          <!-- anim-img-scale start -->
          <div class="anim-img-scale hover-box">
            <img class="anim-img-scale__inner" src="images/projects/North-Eye.jpg" alt="North Eye">
          </div><!-- anim-img-scale end -->
          <!-- content start -->
          <div class="margin-top-20 margin-left-20">
            <h4 class="subhead-m anim-text-double-fill tr-delay-01" data-text="North Eye">North Eye</h4><br>
            <p class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Real Estate">Real Estate</p>
          </div><!-- content end -->
        </div>
        <!-- swiper-slide end -->
        <!-- swiper-slide start -->
        <div class="swiper-slide">
          <!-- anim-img-scale start -->
          <div class="anim-img-scale hover-box">
            <img class="anim-img-scale__inner" src="images/projects/romano.jpg" alt="Romano">
          </div><!-- anim-img-scale end -->
          <!-- content start -->
          <div class="margin-top-20 margin-left-20">
            <h4 class="subhead-m anim-text-double-fill tr-delay-01" data-text="Romano">Romano</h4><br>
            <p class="headline-xxxxs margin-top-5 anim-text-double-fill invert tr-delay-03" data-text="Real Estate">Real Estate</p>
          </div><!-- content end -->
        </div>
        <!-- swiper-slide end -->
      </div><!-- swiper-wrapper end -->
      <!-- swiper-button-prev start -->
      <div class="swiper-button-prev-box">
        <div class="swiper-button-prev"></div>
      </div><!-- swiper-button-prev end -->
      <!-- swiper-button-next start -->
      <div class="swiper-button-next-box">
        <div class="swiper-button-next"></div>
      </div><!-- swiper-button-next end -->

      <!-- swiper-pagination start -->
      <div class="pagination-box">
        <div class="swiper-pagination counter-pagination"></div>
      </div><!-- swiper-pagination end -->
    </div><!-- js-3-view-slider end -->
  </div><!-- pos-rel end -->
</section><!-- team end -->

<!-- clients start -->
<section class="pos-rel section-bg-dark-1">
  <!-- pos-rel start -->
  <div class="pos-rel flex-min-height-100vh">
    <!-- container start -->
    <div class="padding-top-bottom-120 container">
      <!-- title start -->
      <h2 class="headline-l js-scrollanim">
        <span class="hidden-box d-block">
            <span class="anim-slide">
                <span class="text-color-red">Fine Folks</span>
            </span>
        </span>
        <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-01">We've Worked</span>
        </span>
        <span class="hidden-box d-block">
            <span class="anim-slide tr-delay-02">With</span>
        </span>
      </h2><!-- title end -->

      <!-- clients-lines start -->
      <div class="clients-lines padding-top-90">
        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/balancha.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/balancha-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/jorgo.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/jorgo-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/judoboy.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/judoboy-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/kizil-jindi.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/kizil-jindi-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/meyman.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/meyman-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/olchobay.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/olchobay-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/tamaktan.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/tamaktan-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/chayhana.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/chayhana-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/dongolok.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/dongolok-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/eptep-septep.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/eptep-septep-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <div class="clients-lines__column">
          <div class="clients-lines__inner hover-box pos-rel">
            <img class="client-logo client-hover-out pos-abs pos-center-center" src="images/clients/guldoyjan.png" alt="clients logo">
            <img class="client-logo client-hover-in pos-abs pos-center-center" src="images/clients/guldoyjan-red.png" alt="clients logo">
          </div>
        </div><!-- clients-lines__column end -->

        <!-- clients-lines__column start -->
        <a href="#" class="clients-lines__column js-pointer-large">
          <div class="clients-lines__inner hover-box pos-rel js-scrollanim">
            <div class="padding-left-right-20 subhead-xxs text-center pos-abs pos-center-center">
              <span class="anim-text-double-fill" data-text="This spot">This spot</span><br>
              <span class="anim-text-double-fill tr-delay-02" data-text="awaits">awaits</span><br>
              <span class="anim-text-double-fill tr-delay-04" data-text="You">You</span>
            </div>
            <div class="border-left-anim in-10px red"></div>
            <div class="border-top-anim in-10px red"></div>
            <div class="border-right-anim in-10px red"></div>
            <div class="border-bottom-anim in-10px red"></div>
          </div>
        </a><!-- clients-lines__column end -->
      </div><!-- clients-lines end -->
    </div><!-- container end -->
  </div><!-- pos-rel end -->
</section><!-- clients end -->

<!-- testimonials start -->
<section class="pos-rel section-bg-light-1" data-midnight="black">
  <!-- pos-rel start -->
  <div class="pos-rel flex-min-height-100vh">
    <!-- padding-top-bottom-120 start -->
    <div class="padding-top-bottom-120 width-100perc">
      <!-- title start -->
      <h2 class="headline-xxl text-color-black text-center hidden-box">
        <span class="anim-slide js-scrollanim">Testimonials</span>
      </h2><!-- title end -->

      <!-- js-2-view-slider start -->
      <div class="js-2-view-slider padding-top-bottom-90 hidden-box pos-rel">
        <!-- swiper-wrapper start -->
        <div class="swiper-wrapper js-slider-scroll-anim">
          <!-- swiper-slide start -->
          <div class="swiper-slide slide-scale-anim">
            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
              <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Pok pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan messenger bag raw.</p>
              <!-- anim-img-scale start -->
              <div class="anim-img-scale testimonials-author border-radius-50perc">
                <img class="anim-img-scale__inner" src="images/testimonials/woman-wearing-white-and-black-shirt-1388888.jpg" alt="author">
              </div><!-- anim-img-scale end -->
              <div class="margin-top-20 text-center">
                <span class="headline-xxxs text-color-black">Lucille Hatcher</span><br>
                <span class="subhead-xxs text-color-888888">Investor</span>
              </div>
            </div>
          </div><!-- swiper-slide end -->

          <!-- swiper-slide start -->
          <div class="swiper-slide slide-scale-anim">
            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
              <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Pitchfork vaporware hella, vice next level art party subway tile swag portland. Cliche authentic photo booth, seitan sartorial iPhone brooklyn bicycle rights whatever small batch selvage affogato yuccie adaptogen vinyl. Sartorial franzen tacos cardigan, offal gluten-free pour-over.</p>
              <!-- anim-img-scale start -->
              <div class="anim-img-scale testimonials-author border-radius-50perc">
                <img class="anim-img-scale__inner" src="images/testimonials/man-standing-near-building-white-black-turtleneck-shirt-874158.jpg" alt="author">
              </div><!-- anim-img-scale end -->
              <div class="margin-top-20 text-center">
                <span class="headline-xxxs text-color-black">Edward Jordan</span><br>
                <span class="subhead-xxs text-color-888888">Cytotechnologist</span>
              </div>
            </div>
          </div><!-- swiper-slide end -->

          <!-- swiper-slide start -->
          <div class="swiper-slide slide-scale-anim">
            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
              <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Chambray enamel pin synth shabby chic palo santo. Franzen 90's man bun wayfarers, put a bird on it twee four loko roof party shabby chic kale chips photo booth salvia mixtape lumbersexual. Pug kickstarter hammock unicorn, cardigan ennui celiac roof party. Ramps pitchfork direct.</p>
              <!-- anim-img-scale start -->
              <div class="anim-img-scale testimonials-author border-radius-50perc">
                <img class="anim-img-scale__inner" src="images/testimonials/informal-young-woman-listening-to-music-near-grunge-wall-3771823.jpg" alt="author">
              </div><!-- anim-img-scale end -->
              <div class="margin-top-20 text-center">
                <span class="headline-xxxs text-color-black">Mary Ross</span><br>
                <span class="subhead-xxs text-color-888888">Fashion designer</span>
              </div>
            </div>
          </div><!-- swiper-slide end -->

          <!-- swiper-slide start -->
          <div class="swiper-slide slide-scale-anim">
            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
              <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Copper mug vexillologist +1 prism iPhone fashion axe portland. Hella quinoa woke blog af umami tacos freegan vinyl snackwave microdosing. Fanny pack direct trade XOXO drinking vinegar. Live-edge kinfolk master cleanse brooklyn meh organic man braid. Actually humblebrag sriracha.</p>
              <!-- anim-img-scale start -->
              <div class="anim-img-scale testimonials-author border-radius-50perc">
                <img class="anim-img-scale__inner" src="images/testimonials/photography-of-guy-wearing-yellow-hoodie-1183266.jpg" alt="author">
              </div><!-- anim-img-scale end -->
              <div class="margin-top-20 text-center">
                <span class="headline-xxxs text-color-black">Dwight Bell</span><br>
                <span class="subhead-xxs text-color-888888">Banquet manager</span>
              </div>
            </div>
          </div><!-- swiper-slide end -->

          <!-- swiper-slide start -->
          <div class="swiper-slide slide-scale-anim">
            <div class="margin-left-right-20 padding-left-right-20 padding-top-bottom-40 content-bg-light-2 border-radius-10px">
              <p class="margin-bottom-30 quote quote_bottom body-text-m text-color-black text-center">Bushwick tumeric slow-carb photo booth letterpress franzen kombucha tumblr listicle cronut waistcoat mustache. Jean shorts tilde swag cray. Microdosing heirloom wayfarers YOLO, church-key tattooed cred blue bottle viral lyft tacos retro. Bespoke drinking vinegar single-origin.</p>
              <!-- anim-img-scale start -->
              <div class="anim-img-scale testimonials-author border-radius-50perc">
                <img class="anim-img-scale__inner" src="images/testimonials/man-standing-on-stairs-1254502.jpg" alt="author">
              </div><!-- anim-img-scale end -->
              <div class="margin-top-20 text-center">
                <span class="headline-xxxs text-color-black">Brian Amos</span><br>
                <span class="subhead-xxs text-color-888888">Health educator</span>
              </div>
            </div>
          </div><!-- swiper-slide end -->
        </div><!-- swiper-wrapper end -->

        <!-- swiper-button-prev start -->
        <div class="swiper-button-prev-box">
          <div class="swiper-button-prev black"></div>
        </div><!-- swiper-button-prev end -->
        <!-- swiper-button-next start -->
        <div class="swiper-button-next-box">
          <div class="swiper-button-next black"></div>
        </div><!-- swiper-button-next end -->

        <!-- swiper-pagination start -->
        <div class="pagination-box">
          <div class="swiper-pagination counter-pagination black"></div>
        </div><!-- swiper-pagination end -->
      </div><!-- js-2-view-slider end -->
    </div><!-- padding-top-bottom-120 end -->
  </div><!-- pos-rel end -->
</section><!-- testimonials end -->

<!-- video content start -->
<!--<div class="pos-rel bg-img-cover height-100vh" style="background-image:url(images/projects/neon-lights/woman-wearing-beige-and-gray-hoodie-portrait-2272855.jpg)">
  <div class="bg-overlay-black"></div>
  <div class="pos-rel height-100perc">
    <a href="https://www.youtube.com/watch?v=hitNXU4PoRU" class="play-button js-popup-youtube js-pointer-large">
      <span class="play-button__inner"></span>
    </a>
  </div>
</div>---><!-- video content end -->

<!-- latest news start -->
<section class="pos-rel section-bg-light-2" data-midnight="black">
  <!-- pos-rel start -->
  <div class="pos-rel padding-top-bottom-120">
    <!-- container start -->
    <div class="container small">
      <!-- title start -->
      <h2 class="headline-xxl text-color-black text-center hidden-box">
          <span class="anim-slide js-scrollanim">
              Our <span class="text-color-red">Products</span>
          </span>
      </h2><!-- title end -->

      <!-- blog-entry start -->
      <article class="flex-container flex-align-center padding-top-60">
        <div class="six-columns padding-top-30">
          <a href="post_dont-panic.html" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link">
            <div class="anim-img-reveal__hidden">
              <div class="anim-img-reveal__scale">
                <img class="img-hover-scale" src="images/products/product-1.png" alt="Post">
              </div>
            </div>
          </a>
        </div>
        <div class="six-columns padding-top-30">
          <div class="column-l-margin-40 anim-fade js-scrollanim">
            <a href="//matafgroup.com/decorate/?product=photocoffee/" class="margin-top-bottom-30 d-block js-pointer-large js-animsition-link">
              <h3 class="headline-xxxs text-color-black">
                PhotoCoffee
              </h3>
              <p class="body-text-xs margin-top-20 text-color-black">Enriches the beverage experience with gorgeous graphics, and personalized messages.</p>
            </a>
            <a href="//matafgroup.com/decorate/?product=photocoffee/" class="skew-btn js-pointer-large js-animsition-link">
              <span class="skew-btn__box">
                  <span class="skew-btn__content text-color-black">Continue reading</span>
                  <span class="skew-btn__arrow black"></span>
              </span>
            </a>
          </div>
        </div>
      </article><!-- blog-entry end -->

      <!-- blog-entry start -->
      <article class="flex-container reverse flex-align-center padding-top-60">
        <div class="six-columns padding-top-30">
          <div class="column-r-margin-40 anim-fade js-scrollanim">

            <a href="//matafgroup.com/decorate/product/foodnote/" class="margin-top-bottom-30 d-block js-pointer-large js-animsition-link">
              <h3 class="headline-xxxs text-color-black">
                FoodNote
              </h3>
              <p class="body-text-xs margin-top-20 text-color-black">Allows you to embrace consumer demands for personalisation, with endless possibilities.</p>
            </a>
            <a href="//matafgroup.com/decorate/product/foodnote/" class="skew-btn js-pointer-large js-animsition-link">
              <span class="skew-btn__box">
                  <span class="skew-btn__content text-color-black">Continue reading</span>
                  <span class="skew-btn__arrow black"></span>
              </span>
            </a>
          </div>
        </div>
        <div class="six-columns padding-top-30">
          <a href="post_good-morning.html" class="d-block hover-box anim-img-reveal js-scrollanim js-pointer-large js-animsition-link">
            <div class="anim-img-reveal__hidden">
              <div class="anim-img-reveal__scale">
                <img class="img-hover-scale" src="images/products/product-2.png" alt="Post">
              </div>
            </div>
          </a>
        </div>
      </article><!-- blog-entry end -->
    </div><!-- container end -->
  </div><!-- pos-rel end -->
</section><!-- latest news end -->
@endsection