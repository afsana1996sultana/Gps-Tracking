@extends('layout.frontend.master')
@section('main_content')
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
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-lg-8">
                <div class="about-content" style="margin-bottom: 40px;">
                    <div class="ab-mis-icon">
                        <img src="frontend/image/who_we_are.png" alt="about classic it & syk mart ltd">
                        <h2>Who we are</h2>
                    </div>
                    <p class="plead">We Deliver What We Promise</p>
                    <p style="text-align:justify">Classic IT & Sky Mart Ltd. is a global provider of full-spectrum software services, Classic IT & Sky Mart Ltd. is known the world over for delivering forward-looking, scalable, robust and cost-efficient solutions to its clients. The solutions provided by Classic IT & Sky Mart Ltd. help its global clientele to add unprecedented value to their businesses.</p>

                    <p style="text-align:justify">From concept to effectuation, Classic IT & Sky Mart Ltd. is the answer to the most complex software problems that diverse industry segments face today, &amp; will continue to face in the future. Classic IT & Sky Mart Ltd. represents an amalgamation of a culture of refined innovation and vastly experienced people.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_img_section">
                    <img src="frontend/image/technology-wallpaper.jpg">
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
                                <img src="frontend/image/icon1.png" alt="Mission of Classic It & Sky Mart ltd">
                                <h2>Our Mission</h2>
                            </div>
                            <p>
                                <p style="text-align:justify">We have no regrets admitting that we are not like a large organization that sets dozens of missions to accomplish. We are not engaged in seeking profits all the time. But, we have a very particular mission that, we believe, helps and will aid us in thriving.</p>

                                <p style="text-align:justify">We dream of contributing to the digital marketing landscape as a dynamic world where businesses will start, grow and become a brand that has a supreme focus on improving people&rsquo;s lives by providing them with value, insights, opportunities, and opportunities.</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-mission">
                                <div class="ab-mis-icon">
                                    <img src="frontend/image/icon2.png" alt="Mission of Classic It & Sky Mart ltd">
                                    <h2>Our Vision</h2>
                                </div>
                                <p>
                                    <p style="text-align:justify">We envision the world of digital marketing as a place for those who look forward to serving others and make a living by honest means.</p>

                                    <p style="text-align:justify">We do possess no hatred for squalid professionals whose only mission is to play false the search engines and spread sweet talks with stories of some instant success to take advantage of disappointed entrepreneurs. We reiterate our vision vividly as we welcome a new member to our family, so the new person has the chance to share a common interest.</p>

                                    <p style="text-align:justify">We are proud that we have the only mission and one vision that has been a very influential tie with us together towards a common goal, SUCCESS we call it.</p>
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
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