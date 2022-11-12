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
                    <h1>Terms & Conditions</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Terms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->

 <!-- content -->
<section class="services-area section-padding-lg bg-white">
    <div class="container"> 
        <div class="row">
        <!-- Signle Service -->
        @foreach ($terms as $val)
            <div class="col-lg-12">
                <div class="about-content"> 
                    <p>{!! $val->description !!}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
 <!-- //content -->


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