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
        <h1 class="text-light mb-0">International Trading<span class="h2 d-inline-block bg-faded-primary text-primary px-3 py-2 rounded-lg ml-3">Categories</span></h1>
    </div>
</section>
<section class="container pt-5 pt-md-6 pt-lg-7">
    <h2 class="text-center pt-3 pt-md-2 pb-4">Our Services/Categories</h2>
    <p class="text-center">We are importer & exporter of many products/categories as following:<br><br></p>
    <div class="cs-masonry-filterable mb-3">
        <div class="cs-masonry-grid" data-columns="4">
            <div class="cs-grid-item" data-groups="[&quot;3d&quot;]">
                <div class="card card-flip">
                    <div class="card-flip-inner">
                        <div class="card-flip-front">
                            <img class="card-img" src="{{url('images/trading/categories/metal.jpg')}}" alt="Portfolio thumb"/>
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
                            <img class="card-img" src="{{url('images/trading/categories/polymer.jpg')}}" alt="Portfolio thumb"/>
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
                            <img class="card-img" src="{{url('images/trading/categories/health.jpg')}}" alt="Portfolio thumb"/>
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
                            <img class="card-img" src="{{url('images/trading/categories/veg.jpg')}}" alt="Portfolio thumb"/>
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
                            <img class="card-img" src="{{url('images/trading/categories/agro-commodities.jpg')}}" alt="Portfolio thumb"/>
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
                            <img class="card-img" src="{{url('images/trading/categories/surgical.jpg')}}" alt="Portfolio thumb"/>
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
                            <img class="card-img" src="{{url('images/trading/categories/grow.jpg')}}" alt="Portfolio thumb"/>
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
                            <img class="card-img" src="{{url('images/trading/categories/other.jpg')}}" alt="Portfolio thumb"/>
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
</section>

@endsection