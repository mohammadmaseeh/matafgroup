@extends('robotics-agriculture.layout')
@section('content')
    <style>
        .services_row>div{
            margin-bottom: 10px;
        }
    </style>
    <section class="page-header" style="background-image: url('{{url('front/robotic/images/backgrounds/page-header-contact.jpg')}}');">
        <div class="container">
            <h2>Services</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{url('robotics-agriculture')}}">Home (Robotics Agriculture)</a></li>
                <li><span>Services</span></li>
            </ul>
        </div>
    </section>
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

@endsection
