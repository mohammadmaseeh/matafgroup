<div class="nav-wrapper nav-wrapper--alt nav-wrapper-5">
    <nav class="navbar navbar-area navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}" class="logo">
                        <img src="{{url('images/logo.png')}}" alt="logo" />
                    </a>
                </div>
                <ul class="mobile-toggler">
                    <li class="search">
                        <i class="ti-search"></i>
                    </li>
                    <li class="t-toggle mr-0">
                        <a href="#" data-target="#quray_main_menu" aria-label="Toggle navigation" data-toggle="collapse">
                            <span class="ti-menu qry-menu"></span>
                            <span class="ti-close qry-close"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="quray_main_menu">
                <ul class="navbar-nav navbar-nav--alt">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="{{request()->path() == 'consultation'?'current-menu-item':''}}">
                        <a href="{{url('/consultation')}}">Consultation</a>
                    </li>
                    <li class="{{request()->path() == 'consultation/services'?'current-menu-item':''}}">
                        <a href="{{url('/consultation/services')}}">Services</a>
                    </li>
                    <li class="{{request()->path() == 'consultation/projects'?'current-menu-item':''}}">
                        <a href="{{url('/consultation/projects')}}">Projects</a>
                    </li>
                    <li><a href="{{url('/contact-us')}}" class="menu--alt">Contact</a></li>
                </ul>
            </div>
            <div class="nav-right-content nav-right-content--alt">
                <ul>
                    <li class="search">
                        <i class="ti-search"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
