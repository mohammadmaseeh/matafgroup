@extends('it.layout')
@section('content')
    <!-- Breadcrumb -->
    <section class="iq-breadcrumb">
        
         <div class="iq-breadcrumb-info">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-7 align-self-center">
                     <h2 class="iq-fw-8 mb-3">Portfolio</h2>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                     </nav>
                  </div>
                  <div class="col-md-5">
                     <img src="{{url('front/it/images/breadcrumb/portfolio.png')}}" class="img-fluid" alt="image">
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
        <div class="iq-portfolio-page overview-block-ptb overview-block-pb5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="isotope-filters isotope-tooltip ">
                  <button data-filter="" class="active">All </button>
                  <button data-filter=".creative">Creative</button>
                  <button data-filter=".digital">Digital Marketing</button>
                  <button data-filter=".business">Business</button>
                  <button data-filter=".seo">Seo</button>
                </div>
                <div class="isotope iq-columns-3  infinite-scrolling">
                  
                  <div class="iq-grid-item creative">
                    <div class="iq-portfolio">
                      <img src="{{url('front/it/images/project/1.png')}}" class="img-fluid" alt="image">
                      <div class="portfolio-info">
                        <a href="#"><span class="text-black">Design Concept</span></a>
                        <a href="#" class="text-uppercase text-gray float-right">Design</a>
                      </div>
                    </div>
                  </div>
                  <div class="iq-grid-item digital">
                    <div class="iq-portfolio">
                      <img src="{{url('front/it/images/project/2.png')}}" class="img-fluid" alt="image">
                      <div class="portfolio-info">
                        <a href="#"><span class="text-black">Design Concept</span></a>
                        <a href="#" class="text-uppercase text-gray float-right">Design</a>
                      </div>
                    </div>
                  </div>
                  <div class="iq-grid-item business">
                    <div class="iq-portfolio">
                      <img src="{{url('front/it/images/project/3.png')}}" class="img-fluid" alt="image">
                      <div class="portfolio-info">
                        <a href="#"><span class="text-black">Design Concept</span></a>
                        <a href="#" class="text-uppercase text-gray float-right">Design</a>
                      </div>
                    </div>
                  </div>
                  <div class="iq-grid-item seo business">
                    <div class="iq-portfolio">
                      <img src="{{url('front/it/images/project/4.png')}}" class="img-fluid" alt="image">
                      <div class="portfolio-info">
                        <a href="#"><span class="text-black">Design Concept</span></a>
                        <a href="#" class="text-uppercase text-gray float-right">Design</a>
                      </div>
                    </div>
                  </div><div class="iq-grid-item creative">
                  <div class="iq-portfolio">
                    <img src="{{url('front/it/images/project/1.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="iq-grid-item digital">
                  <div class="iq-portfolio">
                    <img src="{{url('front/it/images/project/2.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="iq-grid-item creative">
                  <div class="iq-portfolio">
                    <img src="{{url('front/it/images/project/3.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="iq-grid-item digital">
                  <div class="iq-portfolio">
                    <img src="{{url('front/it/images/project/4.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="iq-grid-item business">
                  <div class="iq-portfolio">
                    <img src="{{url('front/it/images/project/1.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="iq-grid-item seo business">
                  <div class="iq-portfolio">
                    <img src="{{url('front/it/images/project/2.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div><div class="iq-grid-item creative">
                <div class="iq-portfolio">
                  <img src="{{url('front/it/images/project/3.png')}}" class="img-fluid" alt="image">
                  <div class="portfolio-info">
                    <a href="#"><span class="text-black">Design Concept</span></a>
                    <a href="#" class="text-uppercase text-gray float-right">Design</a>
                  </div>
                </div>
              </div>
              <div class="iq-grid-item digital">
                <div class="iq-portfolio">
                  <img src="{{url('front/it/images/project/4.png')}}" class="img-fluid" alt="image">
                  <div class="portfolio-info">
                    <a href="#"><span class="text-black">Design Concept</span></a>
                    <a href="#" class="text-uppercase text-gray float-right">Design</a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
       </div>      
    </div>
    
    
    
    
  </div>
@endsection