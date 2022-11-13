@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection
@section('page')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hi, {{$profile->name}}!</h2>
            <p class="section-lead">Change information about yourself on this page.</p>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">                     
                            <img alt="image" src="{{url('backends/assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Posts</div>
                                    <div class="profile-widget-item-value">187</div>
                                </div>

                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Followers</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>

                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Following</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{$profile->name}} / {{$profile->designation}}</div>
                            {!! $profile->bio !!}
                        </div>
                    </div> 
                </div>

                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="{{url('user-profile/1')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">                               
                                    <div class="form-group col-6">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="txtName" class="form-control" value="{{$profile->name}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="txtEmail" class="form-control" value="{{$profile->email}}">
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        <input type="text" name="txtDesignation" class="form-control" value="{{$profile->designation}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="txtPhone" class="form-control" value="{{$profile->phone}}">
                                    </div>


                                    <div class="form-group col-12">
                                        <label>Bio</label>
                                        <textarea name="txtBio"class="form-control summernote-simple">{{$profile->bio}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@section('js')
<script src="{{url('backends/assets/modules/summernote/summernote-bs4.js')}}"></script>
@endsection
@endsection