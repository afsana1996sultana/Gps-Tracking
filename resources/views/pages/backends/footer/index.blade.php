@extends('layout.backends.home')
@section('page')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Footer</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Footer</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('footer/1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                    <div class="form-group col-6">
                                        <label for="">Find Me</label>
                                        <div>
                                            <img src="{{asset('img/'.$footer->find_logo)}}" alt="" sizes="" srcset="" height="120px" width="150px"> 
                                        </div>

                                        <div>
                                            <label for="">Logo</label>
                                            <input type="file" name="filelogo" class="form-control-file">
                                        </div>
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="txtPhone" class="form-control" value="{{$footer->phone}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="txtEmail" class="form-control" value="{{$footer->email}}">
                                    </div>


                                    <div class="form-group col-6">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="txtAddress" class="form-control" value="{{$footer->address}}">
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