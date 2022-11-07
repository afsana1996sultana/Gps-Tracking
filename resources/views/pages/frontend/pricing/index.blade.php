@extends('layout.frontend.master')
@section('main_content')
<style>
    .ab-single-organic-head h1 {
        font-size: 22px;
    }

    .ab-single-organic-head {
        padding: 20px 0px 1px;
    }

    .pkg-pricing-title{
        padding-top: 25px;
    }

    .section-title{
        padding-top: 20px; 
    }
</style>
<!-- Breacrumb Area -->
<div class="breadcrumb-option"  style="background:url(frontend/image/web-dev-banner-classic-it.jpg); no-repeat scroll center center;background-repeat: no-repeat; background-attachment: scroll; background-size: cover;" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Pricing</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->


<!--Pricing Area -->
<div id="mrks_package_content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="pkg-pricing-title">
                    <h3>Our Package List</h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="ab-single-organic-package">
                    <div class="ab-single-organic-head p-padding0 text-center">
                        <h3>BASIC</h3>
                        <h1>BDT 3500 /MONTH</h1>
                        <p> Yearly Renew Fee BDT 3,000 </p>
                    </div>
                    <div class="organic-phage-content text-center">
                        <h4 class="phage-title"></h4>
                        <p> Responsive Design </p>
                        <p> Basic Information Pages </p>
                        <p> Contact Form </p>
                        <p> Fast loading </p>
                        <p> Social media integration </p>
                        <p> Easy to Update </p>
                        <p> Slider: 5 Sliders </p>
                        <p> Pages: Unlimited </p>
                        <p> Design: 2 Sample Design </p>
                        <p> Affordable to improve </p>
                        <p> Security Features </p>
                    </div>
                    <div class="organic-phage-content text-center">
                        <h4 class="phage-title">GPS Traker </h4>
                    </div>
                    <div class="pkg-button ab-organic-btn text-center">
                        <button type="button" value="247" class="loginFromOpenBtn doddle-btn fill">
                            <span></span>
                            <b></b>Order Now 
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4">
                <div class="ab-single-organic-package ab-single-organic-package-second">
                    <div class="ab-single-organic-head p-padding0 text-center">
                        <h3>STANDARD</h3>
                        <h1>BDT 4500 /MONTH</h1>
                        <!-- <h1>$50000</h1> -->
                        <p>Yearly Renew Fee BDT 4,000 </p>
                    </div>
                    <div class="organic-phage-content text-center">
                        <h4 class="phage-title"></h4>
                        <p> Responsive Design </p>
                        <p> Basic Information Pages </p>
                        <p> Contact Form </p>
                        <p> Fast loading </p>
                        <p> Social media integration </p>
                        <p> Easy to Update </p>
                        <p> Slider: 8 Sliders </p>
                        <p> Pages: Unlimited </p>
                        <p> Design: 3 Sample Design </p>
                        <p> Affordable to improve </p>
                        <p> Security Features </p>
                    </div>
                    <div class="organic-phage-content text-center">
                        <h4 class="phage-title">GPS Traker</h4>
                    </div>
                    <div class="pkg-button ab-organic-btn text-center">
                        <button type="button" value="248" class="loginFromOpenBtn doddle-btn fill">
                            <span></span>
                            <b></b>Order Now 
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4">
                <div class="ab-single-organic-package ab-single-organic-package-third">
                    <div class="ab-single-organic-head p-padding0 text-center">
                        <h3>ADVANCED</h3>
                        <h1>BDT 5900 /MONTH</h1>
                        <p>Yearly Renew Fee BDT 5,000</p>
                    </div>
                    <div class="organic-phage-content text-center">
                        <h4 class="phage-title"></h4>
                        <p> Responsive Design </p>
                        <p> Basic Information Pages </p>
                        <p> Contact Form </p>
                        <p> Fast loading </p>
                        <p> Social media integration </p>
                        <p> Easy to Update </p>
                        <p> Slider: 12 Sliders </p>
                        <p> Pages: Unlimited </p>
                        <p> Design: 5 Sample Design </p>
                        <p> Affordable to improve </p>
                        <p> Security Features </p>
                    </div>
                    <div class="organic-phage-content text-center">
                        <h4 class="phage-title">GPS Traker</h4>
                    </div>
                    <div class="pkg-button ab-organic-btn text-center">
                        <button type="button" value="249" class="loginFromOpenBtn doddle-btn fill">
                            <span></span>
                            <b></b>Order Now 
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!--//Pricing Area -->

<div class="order_now_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="section_title">
                    <h4> Best GPS Traker Company in bangladesh </h4>
                </div>
            </div>
            <div class="col-md-4">
                <a href="{{url('/contact-us')}}">
                    <div class="order_now_btn">
                        <span>get a quote</span>
                    </div>
                </a>
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