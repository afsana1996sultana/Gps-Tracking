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
            <a href="{{url('add-pricing')}}" class="btn btn-primary"><i class="fas fa-list"></i>Pricing</a>
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
                                    <label>Service-1</label>
                                    <input type="text" class="form-control" id="txtService1" name="txtService1" value="{{$pricing->service1}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-2</label>
                                    <input type="text" class="form-control" id="txtService2" name="txtService2" value="{{$pricing->service2}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-3</label>
                                    <input type="text" class="form-control" id="txtService3" name="txtService3" value="{{$pricing->service3}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-4</label>
                                    <input type="text" class="form-control" id="txtService4" name="txtService4" value="{{$pricing->service4}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-5</label>
                                    <input type="text" class="form-control" id="txtService5" name="txtService5" value="{{$pricing->service5}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-6</label>
                                    <input type="text" class="form-control" id="txtService6" name="txtService6" value="{{$pricing->service6}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-7</label>
                                    <input type="text" class="form-control" id="txtService7" name="txtService7" value="{{$pricing->service7}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-8</label>
                                    <input type="text" class="form-control" id="txtService8" name="txtService8" value="{{$pricing->service8}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-9</label>
                                    <input type="text" class="form-control" id="txtService9" name="txtService9" value="{{$pricing->service9}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-10</label>
                                    <input type="text" class="form-control" id="txtService10" name="txtService10" value="{{$pricing->service10}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-11</label>
                                    <input type="text" class="form-control" id="txtService11" name="txtService11" value="{{$pricing->service11}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-12</label>
                                    <input type="text" class="form-control" id="txtService12" name="txtService12" value="{{$pricing->service12}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-13</label>
                                    <input type="text" class="form-control" id="txtService13" name="txtService13" value="{{$pricing->service13}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-14</label>
                                    <input type="text" class="form-control" id="txtService14" name="txtService14" value="{{$pricing->service14}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-15</label>
                                    <input type="text" class="form-control" id="txtService15" name="txtService15" value="{{$pricing->service15}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-16</label>
                                    <input type="text" class="form-control" id="txtService16" name="txtService16" value="{{$pricing->service16}}">
                                </div>

                                <div class="form-group col-4">
                                    <label>Service-17</label>
                                    <input type="text" class="form-control" id="txtService17" name="txtService17" value="{{$pricing->service17}}">
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