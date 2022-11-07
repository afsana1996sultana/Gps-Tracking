@extends('layout.frontend.master')
@section('main_content')
<style type="text/css">
    .ab-single-organic-head img {
    display: none;
    }
    
    video {
        width: 100%;
        height: auto;
    }

    .responsive {
        width: 100%;
        height: auto;
    }

</style>
<!-- Main content Start-->        
<div class="main_slider_seciton">
    <div class="slider_img_box">
        <video autoplay muted loop id="myVideo">
            @foreach ($videocontent as $val)
                <source src="{{ asset('video/' . $val->video_url) }}" type="video/mp4">
            @endforeach
        </video>
    </div>
</div>

<main class="page-content">
    <!--- about section include --->
    <section id="about_section_area" class="about_content_homepage about-area bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <div class="section_title">
                            <h4>Who We are</h4>
                        </div>
                        <p style="text-align:justify">See Move Ltd. is a&nbsp;results-driven IT agency creating visually refined, unique and tailored digital experiences that&nbsp;are committed to providing quality IT solutions like software solutions, website design &amp; development, mobile apps development, digital marketing, SEO services&nbsp;etc. through an experienced IT team.&nbsp;</p>
                        <p style="text-align:justify">The company is constituted by a solid and experienced IT team, a technical service team, a digital marketing team.&nbsp;We have about 600+ active customers and 50+ running projects.</p>
                        <a href="about.html" class="btn">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section_title">
                        <h4>Watch the Intro</h4>
                    </div>

                    <div class="video_section">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/-4pFI8psSI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- services section include --->
    <section class="services-area_section services_area_section_img">
        <div class="services_area_seciton_img_overlay">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h4>Our Services</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="services/website.html">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-globe"></i>
                                    </div>

                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Fleet Tracker</h4>
                                        </div>

                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car....</p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service_hover_content">
                                    <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-code"></i>
                                    </div>

                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Car Tracker</h4>
                                        </div>

                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car....</p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service_hover_content">
                                    <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>

                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Fleet Tracker</h4>
                                        </div>

                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car.. </p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service_hover_content">
                                    <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="services/mobile-apps-optimization.html">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-mobile"></i>
                                    </div>

                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Fleet Tracker</h4>
                                        </div>

                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car....</p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service_hover_content">
                                    <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="services/digital-marketing.html">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>

                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Fleet Tracker</h4>
                                        </div>

                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car..</p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service_hover_content">
                                    <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="services/search-engine-optimization.html">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                
                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Fleet Tracker</h4>
                                        </div>

                                        <div class="service_hover_content">
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        
                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car...</p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="services/domain-hosting.html">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-server"></i>
                                    </div>

                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Fleet Tracker</h4>
                                        </div>

                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car..</p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service_hover_content">
                                    <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="service_section_box">
                                <div class="service-items">
                                    <div class="service_icon">
                                        <i class="fa fa-edit"></i>
                                    </div>

                                    <div class="service_containt">
                                        <div class="section_header">
                                            <h4>GPS Fleet Tracker</h4>
                                        </div>

                                        <div class="section_contant">
                                            <p>If you want to make sure your car is tracked accurately and powerfully – but yet simply – you’ll need the best GPS tracker for the car..</p>
                                            <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service_hover_content">
                                    <a href="#" class="btn btn-sm"> View More <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Ready_software_area_section">
        <div class="container-fluid" style="background-color:DarkSlateBlue;">    
            <img src="{{url('frontend/image/map.jpg')}}" class="responsive" alt="Cinque Terre" >
        </div>
    </section>

    <!--- testimonial section include --->
    <section class="testimonial-area_section services_area_section_img" style="background-image: url('frontend/image/clinet-pay.jpg');">
        <div class="testimonial_area_bg_overlay">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                <h4>Our Testimonial</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_section_box">
                                    <div class="owl-carousel owl-theme testimonial_section_box_active">
                                        @foreach ($testimonial as $val)
                                            <div class="item">
                                                <div class="testimonial_section_item">
                                                    <div class="testimonial_img">
                                                        <img src="{{ asset('img/' . $val->img) }}" alt="SeeMove">
                                                    </div>
                                                    <p>{{ $val->company_name }}</p>
                                                    <h4>{{ $val->header }}</h4>
                                                    <div class="testimonial_contant">
                                                        <p>{!! $val->detail !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="software_technology_section_home">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h4>Car Used GPS Traker</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel owl-theme software_technology_active">
                                        @foreach ($cartraker as $val)
                                            <div class="item">
                                                <div class="technology_logo">
                                                    <img src="{{ asset('img/' . $val->img1) }}" alt="SeeMove">
                                                    <p>{{ $val->name }}</p>
                                                </div>
                                                <div class="technology_logo">
                                                    <img src="{{ asset('img/' . $val->img2) }}" alt="SeeMove">
                                                    <p>{{ $val->name }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- counter section include --->
    <div class="counter-area section-padding-lg bg-grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h4>Our Achievements</h4>
                    </div>
                </div>
            </div>

            <div class="counter-area-inner counter-style-2">
                <div class="row no-gutters align-items-center">
                    @foreach ($achievement as $val)
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="counter text-center">
                                <h1 class="plus_counter counter-active">{{ $val->count }}</h1>
                                <h6>{{ $val->name }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!--- brand section include --->
    <div class="brand-logo-area_section" id="brand-logo-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Valuable Clients</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="brand_logos_item">
                        <div class="owl-carousel owl-theme brand_logos_item_active">
                            @foreach ($client as $val)
                                <div class="item">
                                    <div class="brand_logo_item_box">
                                        <a href="">
                                            <img src="{{ asset('img/' . $val->client_logo) }}" alt="client_logo">
                                        </a>
                                    </div>

                                    <div class="brand_logo_item_box">
                                        <a href="">
                                            <img src="{{ asset('img/' . $val->client_logo) }}" alt="client_logo">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection