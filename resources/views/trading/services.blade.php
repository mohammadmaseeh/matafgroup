@extends('trading.layout')
@section('content')
<style>
    @media all and (min-width: 767px){
        .card-img-top{
            max-width: 300px;
        }
    }
</style>
<!-- Page title-->
<section class="position-relative bg-dark pt-7 pb-5 pb-md-7 bg-size-cover bg-fixed" style="background-image: url('{{url('images/trading/cubes-bg.jpg')}}');">
    <div class="cs-shape cs-shape-bottom cs-shape-curve bg-body">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
        </svg>
    </div>
    <div class="container bg-overlay-content text-center pt-md-6 pt-lg-7 py-5 my-lg-3">
        <h1 class="text-light mb-0">International Trading<span class="h2 d-inline-block bg-faded-primary text-primary px-3 py-2 rounded-lg ml-3">Categories</span></h1>
    </div>
</section>
<section class="container pt-5 pt-md-6 pt-lg-7">
    <h2 class="text-center pt-3 pt-md-2 pb-4">Our Services/Categories</h2>
    <p class="text-center">We are importer & exporter of many products/categories as following:<br><br></p>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top" style="background-image: url('{{url('images/trading/categories/metal.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Metal Import/Export</h2>
                    <p>Mineral is a naturally occurring, solid, inorganic element or compound having a uniform composition and a regularly repeating internal structure. We offer multiple types of Minerals and Ore in bulk quantity.</p>
                </div>
            </div>
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top order-sm-2" style="background-image: url('{{url('images/trading/categories/polymer.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Polymer Import/Export</h2>
                    <p>We deal with polymer products. Visit us to get your chance.</p>
                </div>
            </div>
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top" style="background-image: url('{{url('images/trading/categories/health.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Health Supplements Import/Export</h2>
                    <p>Health suppliments are tranding products for modern era of fitness. We deal with best entities all around the world.</p>
                </div>
            </div>
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top order-sm-2" style="background-image: url('{{url('images/trading/categories/veg.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Fruits & Vegetables Import/Export</h2>
                    <p>Fruits & Vegetables are necessary daily usage products. We export many products to many countries & import some fruits as well.</p>
                </div>
            </div>
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top" style="background-image: url('{{url('images/trading/categories/surgical.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Surgical Equipment Import/Export</h2>
                    <p>India is making cheap & best qualtiy surgical products to fulfill the needs of worlds and we deal in it.</p>
                </div>
            </div>
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top order-sm-2" style="background-image: url('{{url('images/trading/categories/agro-commodities.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Agro Commodities Import/Export</h2>
                    <p>he major agro products can be broadly grouped into foods, fibers, fuels, and raw materials. We cater for ALL types of Agriculture Products in any quantity required.</p>
                </div>
            </div>
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top" style="background-image: url('{{url('images/trading/categories/other.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Other Products</h2>
                    <p>Our product team always search & achive new opportunities to deal with different kind of products. You can contact us regarding your idea.</p>
                </div>
            </div>
            <div class="card card-horizontal card-hover mb-grid-gutter">
                <div class="card-img-top order-sm-2" style="background-image: url('{{url('images/trading/categories/grow.jpg')}}');"></div>
                <div class="card-body">
                    <h2>Grow with us</h2>
                    <p>We always welcome startups & new ideas to work all over the world and grow with us.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection