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
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->

<section class="main_contact_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                @foreach ($contact as $val)
                    <div class="contact_about_seciton">
                        <div class="section_title">
                            <h4>{{ $val->header1 }}</h4>
                        </div>
                        <div class="contact_discription">
                            <p>{!! $val->detail !!}</p>
                        </div>
                        <div class="contact_address_section">
                            <div class="pg-contact-details">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="seciton_title">
                                            <div class="small-title">
                                                <h3>{{ $val->header2 }}</h3>
                                            </div>
                                        </div>
                                        <div class="contact_information">
                                            <a href="tel:{{ $val->phone }}"> <span class="icon"> <i class="fa fa-phone"></i></span> <span class="title"> Phone Number :</span> <span class="value">{{ $val->phone }}</span></a>
                                            <a href="mailto:{{ $val->email }}"> <span class="icon"> <i class="fa fa-envelope-o"></i></span> <span class="title"> Email :</span> <span class="value">{{ $val->email }}</span></a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="section_discription">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-8 col-sm-12">
                <div class="contact_waise_service">
                    <div class="section_title">
                        <h4>Choose the services you’re interested in a message</h4>
                    </div>
                    <div class="contact_waise_service_items">
                        <div class="row">
                            @foreach ($service as $val)
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                    <input  onclick="selectService('Vehicle service center software')" type="radio" id="radio1" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="{{ $val->icon }}"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>{{ $val->title }}</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            @endforeach                            
                        </div>
                    </div>
                </div>

                <div class="contact_form_seciton">
                    <div class="pg-contact-form">
                        <form method="POST" action="#" accept-charset="UTF-8" id="contactMail">
                        	<input name="_token" type="hidden" value="Hy9QERzs13BsnSCcHyVqh4sQ6V1zWq186eBwUlSS">
	                        <input type="hidden" id="serviceSelectt" name="title"/>
	                        <div class="row no-gutters">
	                            <div class="col-lg-6 col-md-6">
	                                <div class="single-input">
	                                    <input name="fullname" type="text" placeholder="Your Name*">
	                                </div>
	                            </div>
	                            <div class="col-lg-6 col-md-6">
	                                <div class="single-input">
	                                    <input type="email" name="email" id="contact_email" placeholder="Your E-mail*">
	                                </div>
	                            </div>
	                            <div class="col-lg-6 col-md-6">
	                                <div class="single-input">
	                                    <input type="text" name="phone" placeholder="Phone">
	                                </div>
	                            </div>
	                            <div class="col-lg-6 col-md-6">
	                                <div class="single-input">
	                                    <input type="text" name="subject" placeholder="Subject">
	                                </div>
	                            </div>
	                            <div class="col-lg-12">
	                                <div class="single-input">
	                                    <textarea name="message" id="contact_message" cols="10" rows="4"
	                                        placeholder="Your message"></textarea>
	                                </div>
	                            </div>
	                            <div class="col-lg-12">
	                                <div class="single-input form-group">
	                                    <script src="www.google.com/recaptcha/apifef7fef7.html?hl=en" async defer></script>
	                                    <div class="g-recaptcha" theme="light" id="buzzNoCaptchaId_e059b2b5a49624c476973c767c4572b0" data-sitekey="6LfwZMcUAAAAAE3l6C3pPXYIkjaM1ryIL4Bg8zL7"></div>
	                                </div>
	                            </div>

	                            <div class="col-lg-12">
	                                <div class="single-input">
	                                    <button class="btn" type="submit">
	                                        <span>Send Now</span>
	                                    </button>
	                                </div>
	                            </div>
	                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Map Section-->
<section class="map-section">
    <div class="map-outer">
        <div class="no-padding">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14594.133732833117!2d90.39164766945039!3d23.87069602479931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4399d7a5e37%3A0xc2a4ee5451f14290!2sSeeMove%20TrackingSolution!5e0!3m2!1sen!2sbd!4v1667901829865!5m2!1sen!2sbd" width="1340" height="500" style="border:0; min-width: 100%;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection