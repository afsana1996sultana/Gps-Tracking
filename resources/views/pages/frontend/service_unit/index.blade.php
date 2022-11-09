@extends('layout.frontend.master')
@section('main_content')
<style>
    .about_company_img{
        padding-top: 60px;
    }
</style>
<!-- Breacrumb Area -->
<div class="breadcrumb-option"  style="background:url('/frontend/image/web-dev-banner-classic-it.jpg'); no-repeat scroll center center;background-repeat: no-repeat; background-attachment: scroll; background-size: cover;" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>{{$ServiceData->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->

<div class="about_our_company">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="about_company_contant">
                    <div class="seciton_title">
                        <h4>{{$ServiceData->heading}}</h4>
                    </div>
                    <div class="company_contant">
                        <p style="text-align: justify;">{!! $ServiceData->details !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="about_company_img">
                    <img src="{{ asset('img/' . $ServiceData->image) }}" alt="SeeMove Services">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="order_now_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="section_title">
                    <h4>Best GPS Traker Company In Bangladesh</h4>
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

<div class="software_feature_section_home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h4>Why Choose SeeMove Gps Tracking Solution Ltd.?</h4>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($section as $val)
                <div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="software_feature_box_home">
                        <div class="card">
                            <div class="media">
                            <i class="{{ $val->icon }}"></i>
                            <div class="media-body">
                                <h4>{{ $val->title }}</h4>
                            </div>
                            </div>
                            <div class="card-body">
                            <p class="card-text">{{ $val->detail }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection