@extends('layout.frontend.master')
@section('main_content')
<!-- Breacrumb Area -->
<div class="breadcrumb-option"  style="background:url(frontend/image/web-dev-banner-classic-it.jpg); no-repeat scroll center center;background-repeat: no-repeat; background-attachment: scroll; background-size: cover;" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Testimonial</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Testimonial</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->

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

@endsection