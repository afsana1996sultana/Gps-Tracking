@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection
@section('page')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>About Us</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">About Us</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('about/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                    <div class="form-group col-6">
                                        <label for="">Existing Video</label>
                                        <div class="">
                                            <iframe width="70%" height="215" src="{{asset('video/'.$about->about_video_url)}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>

                                        <div>
                                            <label for="">Video</label>
                                            <input type="file" name="about_video_url">
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="">Existing Image</label>
                                        <div>
                                            <img src="{{asset('img/'.$about->img)}}" alt="" sizes="" srcset="" height="170px" width="350px"> 
                                        </div>

                                        <div class="pt-3">
                                            <label for="">Image</label>
                                            <input type="file" name="img">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="">Existing Icon Image-1</label>
                                        <div class="">
                                            <img src="{{asset('img/'.$about->icon_img1)}}" alt="" sizes="" srcset="" height="50px" width="50px"> 
                                        </div>

                                        <div>
                                            <label for="">Icon Image-1</label>
                                            <input type="file" name="icon_img1">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="">Existing Icon Image-2</label>
                                        <div class="">
                                            <img src="{{asset('img/'.$about->icon_img2)}}" alt="" sizes="" srcset="" height="50px" width="50px"> 
                                        </div>

                                        <div>
                                            <label for="">Icon Image-2</label>
                                            <input type="file" name="icon_img2">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="">Existing Icon Image-3</label>
                                        <div class="">
                                            <img src="{{asset('img/'.$about->icon_img3)}}" alt="" sizes="" srcset="" height="50px" width="50px"> 
                                        </div>

                                        <div>
                                            <label for="">Icon Image-3</label>
                                            <input type="file" name="icon_img3">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" name="txtTitle" class="form-control" value="{{$about->title}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Mission Title <span class="text-danger">*</span></label>
                                        <input type="text" name="txtMissionTitle" class="form-control" value="{{$about->mission_title}}">
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Vission Title <span class="text-danger">*</span></label>
                                        <input type="text" name="txtVissionTitle" class="form-control" value="{{$about->vission_title}}">
                                    </div>

                                    <div class="form-group col-12 mb-4">
                                        <label>Detail <span class="text-danger">*</span></label>
                                        <textarea name="txtDetail" class="summernote">{{$about->detail}}</textarea>
                                    </div>

                                    <div class="form-group col-12 mb-4">
                                        <label>Mission Detail <span class="text-danger">*</span></label>
                                        <textarea name="txtMissionDetail" class="summernote">{{$about->mission_detail}}</textarea>
                                    </div>

                                    <div class="form-group col-12 mb-4">
                                        <label>Vission Detail <span class="text-danger">*</span></label>
                                        <textarea name="txtVissionDetail" class="summernote">{{$about->vission_detail}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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