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
            <h1>Create Blogs</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Create Blogs</div>
            </div>
        </div>

        <div class="section-body">
            <a href="{{url('blog-list')}}" class="btn btn-primary"><i class="fas fa-list"></i> Blog</a>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('blog-list.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Thumbnail Image Preview</label>
                                        <div>
                                            <img id="preview-img" class="admin-img" src="{{url('backends/assets/image/preview.png')}}" alt="" height="120px" width="160px">
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Thumnail Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file"  id="fileblogPhoto" name="fileblogPhoto" onchange="previewThumnailImage(event)">
                                    </div>


                                    <div class="form-group col-12">
                                        <label>Banner Image Preview</label>
                                        <div>
                                            <img id="preview-banner-img" class="admin-banner-img" src="{{url('backends/assets/image/preview.png')}}" alt="" height="120px" width="160px">
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Banner Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file"  id="filebannerPhoto" name="filebannerPhoto"onchange="previewBannerImage(event)">
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" id="txtName" class="form-control"  name="txtName" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" id="txtTitle" class="form-control"  name="txtTitle" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Slug <span class="text-danger">*</span></label>
                                        <input type="text" id="txtSlug" class="form-control"  name="txtSlug" required>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Published Date&nbsp;</label>
                                        <input type="datetime-local" name="txtPublishedDate" id="txtPublishedDate" class="form-control">
                                    </div>
                                    
                                    <div class="form-group col-12">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea name="txtDescription" id="txtDescription" class="summernote"></textarea>
                                    </div>
                                </div>
  
                                <div class="row pt-4">
                                    <div class="col-12">
                                        <button class="btn btn-primary">Save</button>
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
<script>
    function previewThumnailImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview-img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };

    function previewBannerImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview-banner-img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
@endsection