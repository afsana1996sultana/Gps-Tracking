@extends('layout.backends.home')
@section('page')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Main Video-Content</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Video-Content</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('content/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                    <div class="form-group col-6">
                                        <label for="">Existing Video</label>
                                        <div class="">
                                            <iframe width="70%" height="215" src="{{asset('video/'.$content->video_url)}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>

                                        <div>
                                            <label for="">Video</label>
                                            <input type="file" name="video_url">
                                        </div>
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="txtName" class="form-control" value="{{$content->name}}">
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
@endsection