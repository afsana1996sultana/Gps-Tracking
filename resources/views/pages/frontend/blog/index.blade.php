@extends('layout.frontend.master')
@section('main_content')
<!-- Breacrumb Area -->
<div class="breadcrumb-option"  style="background:url(frontend/image/web-dev-banner-classic-it.jpg); no-repeat scroll center center;background-repeat: no-repeat; background-attachment: scroll; background-size: cover;" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->

<div class="our_live_project_seciton">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section_title">
                    <h4> Our Blogs</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="live_project_box">
                    <div class="owl-carousel owl-theme live_project_items_active">
                        @foreach ($blog as $val)
                        <div class="item">
                            <div class="portfolio_section_box">
                                <div class="portfolio_section_items" style=" background-image: url('{{ asset('img/' . $val->blog_img) }}');">
                                    <div class="portfolio_bg_overlay">
                                        <div class="portfolio_section_contant">
                                            <h4>{{ $val->name }}</h4>
                                            <div class="work_list">
                                                <ul>
                                                    <li><a href="{{ $val->slug }}">{{ $val->title }}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio_section_items_overlay">
                                    <a href="{{ $val->slug }}">
                                        <div class="company_status">
                                            <div class="company_title">
                                                <h4>{{ $val->name }}</h4>
                                            </div>
                                            <div class="company_discription">
                                                <p>{!! $val->discription !!}</p>
                                            </div>
                                            <div class="more_btn">
                                                <a href="{{ $val->slug }}" class="btn btn_sm"> Read the blog </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- //content -->
@endsection