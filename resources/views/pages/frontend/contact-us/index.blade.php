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
                <div class="contact_about_seciton">
                    <div class="section_title">
                        <h4>WORK WITH US</h4>
                        <h5>Tell us about your project</h5>
                    </div>
                    <div class="contact_discription">
                        <p>Over the course of 11+ years, we have completed over 1000 projects with remarkable success. More than 1000 satisfied customers and renowned brands are in our list.
                        Let us know about your project and leave the rest upon us. We assure you the most feasible, practical and innovative solution to your identified problem.</p>
                    </div>
                    <div class="contact_address_section">
                        <div class="pg-contact-details">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="seciton_title">
                                        <div class="small-title">
                                            <h3>
                                                Our branches
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="contact_information">
                                        <a href="tel:+880 1622233333"> <span class="icon"> <i class="fa fa-phone"></i></span> <span class="title"> Phone Number :</span> <span class="value">+880 1622233333</span></a>
                                        <a href="mailto://info@seemove.com.bd"> <span class="icon"> <i class="fa fa-envelope-o"></i></span> <span class="title"> Email :</span> <span class="value">info@seemove.com.bd</span></a>
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
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="contact_waise_service">
                    <div class="section_title">
                        <h4>Choose the services you’re interested in a message</h4>
                    </div>
                    <div class="contact_waise_service_items">
                        <div class="row">
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Vehicle service center software')" type="radio" id="radio1" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Super shop e-Commerce')" type="radio" id="radio2" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Apartment Management Software')" type="radio" id="radio3" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Publication Management Software')" type="radio" id="radio4" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Interior Design Website')" type="radio" id="radio5" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('e-Commerce Apps')" type="radio" id="radio6" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Restaurant e-Commerce')" type="radio" id="radio7" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Grocery e-Commerce')" type="radio" id="radio8" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Publication e-Commerce')" type="radio" id="radio9" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Real Estate Management')" type="radio" id="radio10" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Prescription Software')" type="radio" id="radio11" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label class="full-width radio-label">
                                <input  onclick="selectService('Diagnostic Center Software')" type="radio" id="radio12" class="radio_name"  >
                                        <div class="contact_waise_service_items_box">
                                            <div class="service_icon">
                                                <i class="fa fa-code"></i>
                                            </div>
                                            <div class="service_title">
                                                <h4>GPS TRACKER</h4>
                                            </div>
                                        </div>
                                    </input>
                                </label>
                            </div>
                                                    
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

<section class="container_map_and_address_section">
    <div class="container-fluid">
        <div class="contact_map_and_address">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_map_section">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h3>Map &amp; Location</h3>
                                    <p>Welcome to our office all time</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d500.92153483474306!2d90.39829970811854!3d23.877597129497193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c573f4be7859%3A0xfe148d927ed0353a!2sClassic%20IT%20%26%20Sky%20Mart%20Ltd.!5e0!3m2!1sen!2sbd!4v1665816257231!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection