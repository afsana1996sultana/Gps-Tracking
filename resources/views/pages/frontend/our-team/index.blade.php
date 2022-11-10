@extends('layout.frontend.master')
@section('main_content')
<style>
</style>
<!-- Breacrumb Area -->
<div class="breadcrumb-option"  style="background:url(frontend/image/web-dev-banner-classic-it.jpg); no-repeat scroll center center;background-repeat: no-repeat; background-attachment: scroll; background-size: cover;" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Our Team</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->

<!-- Team Area -->
<section class="team-area section-padding-lg bg-grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="pkg-pricing-title text-center">
                    <h3>Our Supporting Team</h3>
                </div>
            </div>
        </div>

        <div class="row team-wrap">
            <!-- Single Team -->
            @foreach ($team as $val)
                <div class="col-lg-2 col-md-3 col-sm-12 col-12">
                    <div class="single-team single-team-style-2">
                        <div class="team-thumb">
                            <a href="">
                                <img src="frontend/image/no-img.png" alt="no-img.png">
                            </a>
                        </div>
                        <div class="team-content text-center">
                            <div class="team-conetnt-info">
                                <h5>
                                    <a href="">{{ $val->name }}</a>
                                </h5>
                                <h6>{{ $val->email }}</h6>
                                <h6 style="font-weight: 900;">{{ $val->designation }}</h6>
                            </div>
                            <div class="team-social-icons">
                                <ul>
                                    <li class="facebook">
                                        <a target="_blank" href="{{ $val->facebook_url }}">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>					 							
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--// Single Team -->
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
@endsection