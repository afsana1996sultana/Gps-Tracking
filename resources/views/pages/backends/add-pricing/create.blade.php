@extends('layout.backends.home')
@section('page')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Create Pricing List</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Create Pricing List</div>
            </div>
        </div>

        <div class="section-body">
            <a href="{{url('add-pricing')}}" class="btn btn-primary"><i class="fas fa-list"></i> Pricing</a>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('add-pricing.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-4">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input type="text" id="txtTitle" class="form-control"  name="txtTitle" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Price <span class="text-danger">*</span></label>
                                        <input type="text" id="txtPrice" class="form-control"  name="txtPrice" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Renew: <span class="text-danger">*</span></label>
                                        <input type="text" id="txtRenew" class="form-control"  name="txtRenew" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Design</label>
                                        <input type="text" class="form-control" id="txtDesign" name="txtDesign" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Information <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="txtInformation" id="txtInformation" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Form</label>
                                        <input type="text" class="form-control" name="txtForm" id="txtForm" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Loading</label>
                                        <input type="text" class="form-control" name="txtLoading" id="txtLoading" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Media</label>
                                        <input type="text" class="form-control" name="txtMedia" id="txtMedia" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Update</label>
                                        <input type="text" class="form-control" name="txtUpdate" id="txtUpdate" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Slider</label>
                                        <input type="text" class="form-control" name="txtSlider" id="txtSlider" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Page</label>
                                        <input type="text" class="form-control" name="txtPage" id="txtPage" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Sample</label>
                                        <input type="text" class="form-control" name="txtSample" id="txtSample" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Affordable</label>
                                        <input type="text" class="form-control" name="txtAffordable" id="txtAffordable" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Security</label>
                                        <input type="text" class="form-control" name="txtSecurity" id="txtSecurity" required>
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
@endsection