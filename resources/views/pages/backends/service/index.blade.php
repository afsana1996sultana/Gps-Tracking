@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/summernote/summernote-bs4.css')}}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>All Services</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">All Services</div>
            </div>
		</div>
    </section>
	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_service"><i class="fa fa-plus"></i>Add New</a> 
		<div class="row mt-4">                           
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
									<th class="sorting sorting_asc">SN</th>
                                    <th class="sorting">Image</th>
									<th class="sorting">Service Name</th>
									<th class="sorting">Title</th>
									<th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($service as $service)
									<tr class="odd">
										<td>{{$service-> id}}</td>
                                        <td><img src="{{asset('img/'.$service->image)}}" height="80px" width="150px" alt=""></td>
										<td>{{$service-> submenu_name}}</td>
										<td>{{$service-> title}}</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$service->id}}" class="btn btn-primary" id="editservice" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$service->id}}" class="btn btn-danger" id="serviceDbtn" ><i class="fas fa-trash"></i> </button>
											</div>
										</td>   
									</tr>
									@empty
										<div colspan="14">No records found</div>
									@endforelse  
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Add Service Modal -->
<div id="add_service" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Service</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Service Image Preview</label>
                            <div>
                                <img id="preview-img" class="admin-img" src="{{url('backends/assets/image/av.jpg')}}" alt="" height="100px" width="100px">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Service Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto" onchange="previewThumnailImage(event)">
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Service Name:&nbsp;</label>
								<select id="txtServiceName" class="form-control" name="txtServiceName" required>
									<option selected><-----Service----></option>
									@foreach ($submenu as $val)
									<option value="{{ $val->id }}">{{ $val->submenu_name }}</option>
									@endforeach
								</select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Slug:&nbsp;</label>
                                <input type="text" class="form-control" id="txtSlug" name="txtSlug"required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Icon:&nbsp;</label>
                                <input type="text" class="form-control" id="txtIcon" name="txtIcon"required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Title:&nbsp;</label>
                                <input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Other Title:&nbsp;</label>
                                <input type="text" class="form-control" id="txtOtherTitle" name="txtOtherTitle"required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Heading:&nbsp;</label>
                                <input type="text" class="form-control" id="txtHeading" name="txtHeading"required>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Other Heading:&nbsp;</label>
                                <input type="text" class="form-control" id="txtOtherHeading" name="txtOtherHeading"required>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Details <span class="text-danger">*</span></label>
                            <textarea name="txtDetails" id="txtDetails" class="summernote"></textarea>
                        </div>
                    </div>

                    <div class="submit-section float-right">
                        <button type="button" class="btn btn-info" style="width:80px;" data-dismiss="modal">Close</button>
                        <input class="btn btn-primary submit-btn" type="submit" name="btnCreate" style="width:80px;" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Service Modal -->
<!-- Edit Service Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Service</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('service-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" value="" id="cmbServiceId" name="cmbServiceId" >
							<label class="form-label">Service Image Preview:&nbsp;</label>
							<div class="input-group mb-3" id="eFileimg" alt=""></div>	
						</div>

                        <div class="form-group col-12">
                            <label>Service Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto">
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Service Name:&nbsp;</label>
								<select id="eServiceName" class="form-control" name="txtServiceName" required>
									<option selected><-----Service----></option>
									@foreach ($submenu as $val)
									<option value="{{ $val->id }}">{{ $val->submenu_name }}</option>
									@endforeach
								</select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Slug:&nbsp;</label>
                                <input type="text" class="form-control" id="eSlug" name="txtSlug"required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Icon:&nbsp;</label>
                                <input type="text" class="form-control" id="eIcon" name="txtIcon"required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Title:&nbsp;</label>
                                <input type="text" class="form-control" id="eTitle" name="txtTitle"required>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Other Title:&nbsp;</label>
                                <input type="text" class="form-control" id="eOtherTitle" name="txtOtherTitle"required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Heading:&nbsp;</label>
                                <input type="text" class="form-control" id="eHeading" name="txtHeading"required>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Other Heading:&nbsp;</label>
                                <input type="text" class="form-control" id="eOtherHeading" name="txtOtherHeading"required>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Details <span class="text-danger">*</span></label>
                            <textarea name="txtDetails" id="eDetails" class="summernote"></textarea>
                        </div>
					</div>
                    <div class="submit-section float-right">
                        <button type="button" class="btn btn-info" style="width:80px;" data-dismiss="modal">Cancle</button>
                        <input class="btn btn-primary submit-btn" type="submit"  name="btnUpdate" value="Update">
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Service Modal -->
<!-- Delete Service Modal -->
<div class="modal custom-modal fade" id="delete_service" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Service</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-service')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_serviceId" name="d_service">
                                <button type="submit" class="btn btn-danger continue-btn">Delete</button>		
							</form>
						</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-info cancel-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Service Modal -->
@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script src="{{url('backends/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script>
	$(document).ready(function(){

        $(document).on('click','#serviceDbtn',function(){
            // alart("ok");
			var service_id=$(this).val();
			$('#delete_service').modal('show');
			$('#delete_serviceId').val(service_id);
		});

		$(document).on('click','#editservice',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-service/"+eid,
				success:function(response){	
					$('#cmbServiceId').val(eid);	
					$('#eServiceName').val(response.service.s_name);	
					$('#eSlug').val(response.service.slug);	
					$('#eIcon').val(response.service.icon);	
					$('#eTitle').val(response.service.title);	
					$('#eOtherTitle').val(response.service.other_title);	
					$('#eHeading').val(response.service.heading);	
					$('#eOtherHeading').val(response.service.other_heading);	
                    $('#eDetails').summernote('code', response.service.details); 	
					$("#eFileimg").html(
                        `<img src="img/${response.service.image}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
	});

	$("#table-1").dataTable({
		"columnDefs": [
			{ "sortable": false, "targets": [2,3] }
		]
	});

    function previewThumnailImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview-img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };

</script>
@endsection
@endsection