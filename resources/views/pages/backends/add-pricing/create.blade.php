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
                                        <label>Service-1</label>
                                        <input type="text" class="form-control" id="txtService1" name="txtService1" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-2</label>
                                        <input type="text" class="form-control" id="txtService2" name="txtService2" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-3</label>
                                        <input type="text" class="form-control" id="txtService3" name="txtService3" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-4</label>
                                        <input type="text" class="form-control" id="txtService4" name="txtService4" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-5</label>
                                        <input type="text" class="form-control" id="txtService5" name="txtService5" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-6</label>
                                        <input type="text" class="form-control" id="txtService6" name="txtService6" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-7</label>
                                        <input type="text" class="form-control" id="txtService7" name="txtService7" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-8</label>
                                        <input type="text" class="form-control" id="txtService8" name="txtService8" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-9</label>
                                        <input type="text" class="form-control" id="txtService9" name="txtService9" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-10</label>
                                        <input type="text" class="form-control" id="txtService10" name="txtService10" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-11</label>
                                        <input type="text" class="form-control" id="txtService11" name="txtService11" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-12</label>
                                        <input type="text" class="form-control" id="txtService12" name="txtService12" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-13</label>
                                        <input type="text" class="form-control" id="txtService13" name="txtService13" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-14</label>
                                        <input type="text" class="form-control" id="txtService14" name="txtService14" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-15</label>
                                        <input type="text" class="form-control" id="txtService15" name="txtService15" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-16</label>
                                        <input type="text" class="form-control" id="txtService16" name="txtService16" required>
                                    </div>

                                    <div class="form-group col-4">
                                        <label>Service-17</label>
                                        <input type="text" class="form-control" id="txtService17" name="txtService17" required>
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