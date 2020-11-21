@extends('robotics-agriculture.layout')
@section('content')
        <!-- Banner Section -->
        <section class="banner-section banner-one">

            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url('{{url('front/robotic/images/sliders/slide1.jpg')}}');">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">The Future is Now</div>
                                    <h1>Robotics<br> Agriculture</h1>
                                    <div class="link-box">
                                        <a href="{{url('/robotics-agriculture/services')}}" class="thm-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url('{{url('front/robotic/images/sliders/slide2.jpg')}}');">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">Introducing New World</div>
                                    <h1>FARMING & AGRICULTURE ROBOTS</h1>
                                    <div class="link-box">
                                        <a href="{{url('/robotics-agriculture/services')}}" class="thm-btn">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->
        <section class="about_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about1_img">
                            <div class="about1_shape_1"></div>
                            <img src="{{url('front/robotic/images/about/about-1-img-1.jpg')}}" alt="About-Img">
                            <div class="about1_icon-box">
                                <div class="circle">
                                    <span class="icon-focus"></span>
                                </div>
                            </div>
                            <div class="about_img_2">
                                <img src="{{url('front/robotic/images/about/about-1-img-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="block-title text-left">
                            <p>About</p>
                            <h3>Robotics Agriculture</h3>
                            <div class="leaf">
                                <img src="{{url('front/robotic/images/resources/leaf.png')}}" alt="">
                            </div>
                        </div>
                        <div class="about_content">
                            <div class="text">
                                <p>
                                    Agriculture is quickly becoming an exciting high-tech industry, drawing new professionals, new companies and new investors. The technology is developing rapidly, not only advancing the production capabilities of farmers but also advancing robotics and automation technology as we know it.
                                </p>
                                <p>
                                    Agricultural robots are increasing production yields for farmers in various ways. From drones to autonomous tractors to robotic arms, the technology is being deployed in creative and innovative applications.
                                </p>
                            </div>
                            <div class="about1_icon_wrap">
                                <div class="about1_icon_single">
                                    <div class="about1_icon">
                                        <span class="icon-temperature"></span>
                                    </div>
                                    <p>Agricultural Robot Applications</p>
                                </div>
                            </div>
                            <div class="bottom_text">
                                <p>
                                    Agricultural robots automate slow, repetitive and dull tasks for farmers, allowing them to focus more on improving overall production yields. Some of the most common robots in agriculture are used for:
                                </p>
                                <ul>
                                    <li>Harvesting and picking</li>
                                    <li>Weed control</li>
                                    <li>Autonomous mowing, pruning, seeding, spraying and thinning</li>
                                    <li>Phenotyping</li>
                                    <li>Sorting and packing</li>
                                    <li>Utility platforms</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .services_row>div{
                margin-bottom: 10px;
            }
        </style>
        <section class="service_one">
            <div class="container">
                <div class="block-title text-center">
                    <p>What we do</p>
                    <h3>Services We Offer</h3>
                    <div class="leaf">
                        <img src="{{url('front/robotic/images/resources/leaf.png')}}" alt="">
                    </div>
                </div>
                <div class="row services_row">
                    <div class="col-md-4">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content">
                                <h3>ROBOTIC<br>PLATFORMS</h3>
                                <p>
                                    Agricultural platforms can be divided into domain- and
                                    task-specific robots designed to perform a specific task on
                                    a given crop in a pre-defined domain, and generic platforms
                                    designed to perform several tasks in different <domains class=""></domains>
                                </p>
                            </div>
                            <div class="service_1_img">
                                <img src="{{url('front/robotic/images/service/1.JPG')}}" alt="Service Image">
                                <div class="hover_box">
                                    <a href="{{url('robotics-agriculture/services')}}"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content">
                                <h3> SENSING AND <br> PERCEPTION</h3>
                                <p>
                                    The integration of sensor systems within autonomous
                                    robotic systems offers the significant potential for new
                                    measurements that would otherwise be unobtainable.
                                </p>
                            </div>
                            <div class="service_1_img">
                                <img src="{{url('front/robotic/images/service/2.JPG')}}" alt="Service Image">
                                <div class="hover_box">
                                    <a href="{{url('robotics-agriculture/services')}}"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content">
                                <h3>PLANNING AND<br>COORDINATION</h3>
                                <p>
                                    The true potential of robotics in agriculture will be harnessed
                                    when different types of robots and autonomous systems
                                    are brought together in a systemic approach.
                                </p>
                            </div>
                            <div class="service_1_img">
                                <img src="{{url('front/robotic/images/service/3.JPG')}}" alt="Service Image">
                                <div class="hover_box">
                                    <a href="{{url('robotics-agriculture/services')}}"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content">
                                <h3>MANIPULATION</h3>
                                <p>
                                    Automated manipulation and grasping of food items
                                    presents a series of unique challenges compared to
                                    other sectors. These include significant natural size and
                                    shape variations between examples of the same product,
                                    heterogeneous positioning of products (e.g. during
                                    harvesting) and the fragile nature of food products.
                                </p>
                            </div>
                            <div class="service_1_img">
                                <img src="{{url('front/robotic/images/service/4.JPG')}}" alt="Service Image">
                                <div class="hover_box">
                                    <a href="{{url('robotics-agriculture/services')}}"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content">
                                <h3>HUMAN-ROBOT<br>INTERACTION</h3>
                                <p>
                                    The challenges for interaction range from domainindependent aspects such as intuitive designs, immersive
                                    displays (e.g. Virtual and Augmented Reality) and tactile
                                    feedback, to very specific challenges stemming from the
                                    in-field conditions.
                                </p>
                            </div>
                            <div class="service_1_img">
                                <img src="{{url('front/robotic/images/service/5.JPG')}}" alt="Service Image">
                                <div class="hover_box">
                                    <a href="{{url('robotics-agriculture/services')}}"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_1_single wow fadeInUp">
                            <div class="content">
                                <h3>LEARNING AND <br>ADAPTATION</h3>
                                <p>
                                    Artificial intelligence technologies, especially in machine
                                    learning, are expected to play a major role in most of the
                                    above technology areas, and will be essential enablers for
                                    agricultural robots. Agricultural environments are subject
                                    to changes throughout the lifetime of a robotic system.
                                </p>
                            </div>
                            <div class="service_1_img">
                                <img src="{{url('front/robotic/images/service/6.JPG')}}" alt="Service Image">
                                <div class="hover_box">
                                    <a href="{{url('robotics-agriculture/services')}}"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="brand-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-one-carousel owl-carousel">
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-1.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-2.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-3.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-4.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-5.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-1.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-2.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-3.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-4.png')}}" alt="brand"></a>
                            </div>
                            <div class="single_brand_item">
                                <a href="#"><img src="{{url('front/robotic/images/resources/brand-1-5.png')}}" alt="brand"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="featured-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms">
                        <div class="single_featured_box">
                            <img src="{{url('front/robotic/images/resources/featured-leaf.png')}}" alt=""><span>We Deal in Best Agriculture Robots
                                Products</span><img src="{{url('front/robotic/images/resources/featured-leaf.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms">
                        <div class="single_featured_box">
                            <img src="{{url('front/robotic/images/resources/featured-leaf.png')}}" alt=""><span>We’ve 10 years experience
                                in field</span><img src="{{url('front/robotic/images/resources/featured-leaf.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-one" style="background-image:url('{{url('front/robotic/images/resources/video-bg-1.jpg')}}');">
            <div class="container text-center">
                <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="video-one__btn video-popup"><i
                        class="fa fa-play"></i></a>
                <p>Modern agriculture types</p>
                <h3>Agriculture matters to the<br>future of development</h3>
            </div>
        </section>

        <section class="testimonials-one" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonials_one_left">
                            <div class="block-title text-left">
                                <p>testimonails</p>
                                <h3>What our customers are<br>talking about</h3>
                                <div class="leaf">
                                    <img src="{{url('front/robotic/images/resources/leaf.png')}}" alt="">
                                </div>
                            </div>
                            <div class="testimonials_one_text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable.</p>
                            </div>
                            <div class="project_counted wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon_box">
                                    <span class="icon-farmer"></span>
                                </div>
                                <div class="project-content">
                                    <h3 class="counter">4,850000</h3>
                                    <p>Agriculture projects are completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonials_one_content">
                            <div class="testimonials_one_carousel owl-theme owl-carousel">
                                <div class="testimonials_one_single_item">
                                    <div class="text">
                                        <p>This is due to their excellent service, and augue homero consectetuer in nam.
                                            Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</p>
                                    </div>
                                    <div class="client_thumbnail">
                                        <div class="client_img">
                                            <img src="{{url('front/robotic/images/testimonials/testimonial-1-img-1.png')}}"
                                                alt="testimonial1-img">
                                        </div>
                                        <div class="client_title">
                                            <h4>Kevin Hardson</h4>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials_one_single_item">
                                    <div class="text">
                                        <p>This is due to their excellent service, and augue homero consectetuer in nam.
                                            Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</p>
                                    </div>
                                    <div class="client_thumbnail">
                                        <div class="client_img">
                                            <img src="{{url('front/robotic/images/testimonials/testimonial-1-img-1.png')}}"
                                                alt="testimonial1-img">
                                        </div>
                                        <div class="client_title">
                                            <h4>Kevin Hardson</h4>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials_one_single_item">
                                    <div class="text">
                                        <p>This is due to their excellent service, and augue homero consectetuer in nam.
                                            Eu quo laoreet propriae, malis exerci habemus has vocent persius eum ea.</p>
                                    </div>
                                    <div class="client_thumbnail">
                                        <div class="client_img">
                                            <img src="{{url('front/robotic/images/testimonials/testimonial-1-img-1.png')}}"
                                                alt="testimonial1-img">
                                        </div>
                                        <div class="client_title">
                                            <h4>Kevin Hardson</h4>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="recent-project">
            <div class="container">
                <div class="block-title text-center">
                    <p>explore us</p>
                    <h3>our Values</h3>
                    <div class="leaf">
                        <img src="{{url('front/robotic/images/resources/leaf.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="recent_project_single wow fadeInUp" data-wow-delay="300ms">
                            <div class="project_img_box">
                                <img src="{{url('front/robotic/images/project/recent-pro-img-1.jpg')}}" alt="Recent Project Img">
                                <div class="project_content">
                                    <h3>organic<br>solutions</h3>
                                </div>
                                <div class="hover_box">
                                    <a href="projects_detail.html"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="recent_project_single wow fadeInUp" data-wow-delay="600ms">
                            <div class="project_img_box">
                                <img src="{{url('front/robotic/images/project/recent-pro-img-2.jpg')}}" alt="Recent Project Img">
                                <div class="project_content">
                                    <h3>Harvest<br>Innovations</h3>
                                </div>
                                <div class="hover_box">
                                    <a href="projects_detail.html"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="900ms">
                        <div class="recent_project_single">
                            <div class="project_img_box">
                                <img src="{{url('front/robotic/images/project/recent-pro-img-3.jpg')}}" alt="Recent Project Img">
                                <div class="project_content">
                                    <h3>Agriculture<br>farming</h3>
                                </div>
                                <div class="hover_box">
                                    <a href="projects_detail.html"><span class="icon-left-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits">
            <div class="benefits_bg" style="background-image: url('{{url('front/robotic/images/resources/benifits_bg.png')}}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="block-title text-left">
                            <p>Our benefits</p>
                            <h3>Agriculture & AI<br>Robots</h3>
                            <div class="leaf">
                                <img src="{{url('front/robotic/images/resources/leaf.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 d-flex">
                        <div class="my-auto">
                            <div class="benefits_text">
                                <p>
                                    Thus the agricultural industry is in transition. And that transition differs country by country, state by state, region by region as well as by type of farming practiced: from primitive to conventional to precision to experimental. A little bit of everything is going on everywhere but the general trend worldwide is toward precision agriculture supplemented by advanced technologies including robotics.
                                </p>
                            </div>
                        </div><!-- /.my-auto -->
                    </div>
                </div>
                <div class="benefits_bottom_part">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="benefits_single wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon-box">
                                    <span class="icon-tractor"></span>
                                </div>
                                <h3>We Use New technology</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="benefits_single wow fadeInUp" data-wow-delay="600ms">
                                <div class="icon-box">
                                    <span class="icon-cart"></span>
                                </div>
                                <h3>professional farmers</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="benefits_single wow fadeInUp" data-wow-delay="900ms">
                                <div class="icon-box">
                                    <span class="icon-watering-can"></span>
                                </div>
                                <h3>We’re certified company</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="benefits_single wow fadeInUp" data-wow-delay="1200ms">
                                <div class="icon-box">
                                    <span class="icon-log"></span>
                                </div>
                                <h3>We deliver everywhere</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="product_img">
                            <img src="{{url('front/robotic/images/resources/product-1-img-1.jpg')}}" alt="Product One Img">
                            <div class="experience_box">
                                <h2>10 Year</h2>
                                <p>Of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="growing_product">
                            <div class="block-title text-left">
                                <p>new technology</p>
                                <h3>Growing Industry</h3>
                                <div class="leaf">
                                    <img src="{{url('front/robotic/images/resources/leaf.png')}}" alt="">
                                </div>
                            </div>
                            <div class="growing_product_text">
                                <p>Robotics and Autonomous Systems (RAS) are set to
                                    transform global industries. These technologies will
                                    have greatest impact on large sectors of the economy
                                    with relatively low productivity such as Agri-Food
                                    (food production from the farm through to and including
                                    manufacturing to the retail shelf). The UK Agri-Food chain,
                                    from primary farming through to retail, generates over
                                    £108bn p.a., with 3.7m employees in a truly international
                                    industry yielding £20bn of exports in 2016.
                                </p>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="text">Robotic Agriculture Growing</div>
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="20">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="20"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="text">Orthodocs Agriculture</div>
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="80">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="80"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>from the blog</p>
                    <h3>News & Articles</h3>
                    <div class="leaf">
                        <img src="{{url('front/robotic/images/resources/leaf.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog_one_image">
                                <div class="blog_image">
                                    <img src="{{url('front/robotic/images/blog/blog-1-img-1.jpg')}}" alt="Blog One Image">
                                    {{--<div class="blog_one_date_box">--}}
                                        {{--<p>30 Oct, 2019</p>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="blog-one__content">
                                    {{--<ul class="list-unstyled blog-one__meta">--}}
                                        {{--<li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>--}}
                                        {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    <h3><a href="#">ECONOMIC AND SOCIETAL FACTORS</a></h3>
                                    <div class="blog_one_text">
                                        <p>
                                            Robotics and Autonomous Systems (RAS) are set to
                                            transform many global industries. These technologies will
                                            have greatest impact on large sectors of the economy
                                            with relatively low productivity such as Agri-Food (food
                                            production from the farm through to and including
                                            manufacturing to the retail shelf).
                                        </p>
                                    </div>
                                    {{--<div class="read_more_btn">--}}
                                        {{--<a href="#"><i class="fa fa-angle-right"></i>Read More</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="600ms">
                            <div class="blog_one_image">
                                <div class="blog_image">
                                    <img src="{{url('front/robotic/images/blog/blog-1-img-2.jpg')}}" alt="Blog One Image">
                                    {{--<div class="blog_one_date_box">--}}
                                        {{--<p>30 Oct, 2019</p>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="blog-one__content">
                                    {{--<ul class="list-unstyled blog-one__meta">--}}
                                        {{--<li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>--}}
                                        {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    <h3><a href="#">ENVIRONMENTAL BENEFITS</a></h3>
                                    <div class="blog_one_text">
                                        <p>
                                            As well as delivering economic benefits, such as increasing
                                            productivity and reducing waste throughout the food supply
                                            chain, developing a new focus for RAS within Agri-Food
                                            will have significant societal and environmental benefits.
                                        </p>
                                    </div>
                                    {{--<div class="read_more_btn">--}}
                                        {{--<a href="#"><i class="fa fa-angle-right"></i>Read More</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="900ms">
                            <div class="blog_one_image">
                                <div class="blog_image">
                                    <img src="{{url('front/robotic/images/blog/blog-1-img-3.jpg')}}" alt="Blog One Image">
                                    {{--<div class="blog_one_date_box">--}}
                                        {{--<p>30 Oct, 2019</p>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="blog-one__content">
                                    {{--<ul class="list-unstyled blog-one__meta">--}}
                                        {{--<li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>--}}
                                        {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    <h3><a href="#">PRECISION AGRICULTURE</a></h3>
                                    <div class="blog_one_text">
                                        <p>
                                            Also known as ‘smart farming’, precision agriculture
                                            has its origins in developments first applied in industrial
                                            manufacturing as far back as the 1970s and 80s. It concerns
                                            the use of monitoring and intervention techniques to improve
                                            efficiency, realised in application through the deployment
                                            of sensing technologies and automation.
                                        </p>
                                    </div>
                                    {{--<div class="read_more_btn">--}}
                                        {{--<a href="#"><i class="fa fa-angle-right"></i>Read More</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-one" style="background-image: url('{{url('front/robotic/images/resources/cta_one_bg-1.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta_one_content">
                            <h1>Provide you the Highest Quality products<br>that Meets your Expectation</h1>
                            <div class="cta_one__button-block">
                                <a href="{{url('contact-us')}}" class="thm-btn cta_one__btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
