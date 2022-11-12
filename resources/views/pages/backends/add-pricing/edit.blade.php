@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Edit Pricing</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Edit Pricing</div>
            </div>
		</div>
        <div class="section-body">
            <a href="{{url('add-pricing')}}" class="btn btn-primary"><i class="fas fa-list"></i> Add Pricing</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{url('add-pricing/'.$pricing->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')                        
                            <div class="row">
                                <div class="form-group col-4">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" id="txtTitle" class="form-control"  name="txtTitle" value="{{$pricing->title}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Price <span class="text-danger">*</span></label>
                                    <input type="text" id="txtPrice" class="form-control"  name="txtPrice" value="{{$pricing->price}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Renew: <span class="text-danger">*</span></label>
                                    <input type="text" id="txtRenew" class="form-control"  name="txtRenew" value="{{$pricing->renew}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Design</label>
                                    <input type="text" class="form-control" id="txtDesign" name="txtDesign" value="{{$pricing->design}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Information <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="txtInformation" id="txtInformation" value="{{$pricing->information}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Form</label>
                                    <input type="text" class="form-control" name="txtForm" id="txtForm" value="{{$pricing->form}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Loading</label>
                                    <input type="text" class="form-control" name="txtLoading" id="txtLoading" value="{{$pricing->loading}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Media</label>
                                    <input type="text" class="form-control" name="txtMedia" id="txtMedia" value="{{$pricing->media}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Update</label>
                                    <input type="text" class="form-control" name="txtUpdate" id="txtUpdate" value="{{$pricing->update}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Slider</label>
                                    <input type="text" class="form-control" name="txtSlider" id="txtSlider" value="{{$pricing->slider}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Page</label>
                                    <input type="text" class="form-control" name="txtPage" id="txtPage" value="{{$pricing->page}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Sample</label>
                                    <input type="text" class="form-control" name="txtSample" id="txtSample" value="{{$pricing->sample}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Affordable</label>
                                    <input type="text" class="form-control" name="txtAffordable" id="txtAffordable" value="{{$pricing->affordable}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Security</label>
                                    <input type="text" class="form-control" name="txtSecurity" id="txtSecurity" value="{{$pricing->security}}">
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-12">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection