@extends('layout.frontend.master')
@section('main_content')
<style>
    .about_img_section{
        padding-top: 90px;
    }
</style>
<!-- Breacrumb Area -->
<div class="breadcrumb-option"  style="background:url(frontend/image/web-dev-banner-classic-it.jpg); no-repeat scroll center center;background-repeat: no-repeat; background-attachment: scroll; background-size: cover;" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                    <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->

<!-- About Area -->
<section class="services-area section-padding-lg bg-white">
    @foreach ($about as $val)
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-content" style="margin-bottom: 40px;">
                        <div class="ab-mis-icon">
                            <img src="{{ asset('img/' . $val->icon_img1) }}" alt="about SeeMove Ltd">
                            <h2>{{ $val->title }}</h2>
                        </div>
                        <p class="plead">{!! $val->detail !!}</p>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="about_img_section">
                        <img src="{{ asset('img/' . $val->img) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="about_page_background_img">
            <div class="about_page_background_color">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-mission">
                                <div class="ab-mis-icon">
                                    <img src="{{ asset('img/' . $val->icon_img2) }}" alt="Mission SeeMove Ltd">
                                    <h2>{{ $val->mission_title }}</h2>
                                </div>
                                <p style="text-align:justify">{!! $val->mission_detail !!}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="about-mission">
                                <div class="ab-mis-icon">
                                    <img src="frontend/image/icon2.png" alt="Vision SeeMove Ltd">
                                    <h2>{{ $val->vission_title }}</h2>
                                </div>
                                <p style="text-align:justify">{!! $val->vission_detail !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
<!-- //About Area -->

<!--- Counter Area --->
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
<!--- //Counter Area --->

<!--- Brand Area --->
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
<!--- //Brand Area --->

@endsection