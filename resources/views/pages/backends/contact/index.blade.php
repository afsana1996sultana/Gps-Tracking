@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection
@section('page')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Contact Us</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">HeadeContact Usr</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('contact/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                    <div class="form-group col-6">
                                        <label>Header-1 <span class="text-danger">*</span></label>
                                        <input type="text" name="txtHeader1" class="form-control" value="{{$contact->header1}}">
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Header-2 <span class="text-danger">*</span></label>
                                        <input type="text" name="txtHeader2" class="form-control" value="{{$contact->header2}}">
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="txtPhone" class="form-control" value="{{$contact->phone}}">
                                    </div>

                                    <div class="form-group col-6">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input type="email" name="txtEmail" class="form-control" value="{{$contact->email}}">
                                    </div>

                                    <div class="form-group col-12 mb-4">
                                        <label>Detail <span class="text-danger">*</span></label>
                                        <textarea name="txtDetail" class="summernote">{{$contact->detail}}</textarea>
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