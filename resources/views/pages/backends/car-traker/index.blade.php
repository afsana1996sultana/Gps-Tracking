@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
@endsection
@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>GPS Traker Car</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">GPS Traker Car</div>
            </div>
		</div>
    </section>

	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_cartraker"><i class="fa fa-plus"></i>Add New</a> 
		<div class="row mt-4">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">Image-1</th>
                                        <th class="sorting">Image-2</th>
                                        <th class="sorting">Name</th>
                                        <th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($cartraker as $cartraker)
									<tr class="odd">
                                        <td>{{$cartraker-> id}}</td>
                                        <td><img src="{{asset('img/'.$cartraker->img1)}}" height="60px" width="150px" alt=""></td>
                                        <td><img src="{{asset('img/'.$cartraker->img2)}}" height="60px" width="150px" alt=""></td>
                                        <td>{{$cartraker-> name}}</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$cartraker->id}}" class="btn btn-primary" id="editcartraker" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$cartraker->id}}" class="btn btn-danger" id="cartrakerDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Car-Trakers Modal -->
<div id="add_cartraker" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Cartraker</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('car-trakers.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Car-Tracker Image-1 Preview</label>
                            <div>
                                <img id="preview-img1" class="admin-img" src="{{url('backends/assets/image/av.jpg')}}" alt="" height="100px" width="100px">
                            </div>

                            <div class="pt-3">
                                <label>Car-Tracker Image-1 <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="filePhoto1" name="filePhoto1" onchange="previewThumnailImage1(event)">
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label>Car-Tracker Image-2 Preview</label>
                            <div>
                                <img id="preview-img2" class="admin-img" src="{{url('backends/assets/image/av.jpg')}}" alt="" height="100px" width="100px">
                            </div>

                            <div class="pt-3">
                                <label>Car-Tracker Image-2 <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="filePhoto2" name="filePhoto2" onchange="previewThumnailImage2(event)">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtName" name="txtName"required>
                            </div>
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
<!-- /Add Car-Trakers Modal -->
<!-- Edit Car-Trakers Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Cartraker</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('car-trakers-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-6">
                            <input type="hidden" value="" id="cmbCartrakerId" name="cmbCartrakerId" >
							<label class="form-label">Car-Tracker Image-1 Preview:&nbsp;</label>
							<div class="input-group mb-3" id="eFileimg1" alt=""></div>	

                            <div class="pt-3">
                                <label>Car-Tracker Image-1 <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="filePhoto1" name="filePhoto1">
                            </div>
						</div>

                        <div class="col-sm-6">
							<label class="form-label">Car-Tracker Image-2 Preview:&nbsp;</label>
							<div class="input-group mb-3" id="eFileimg2" alt=""></div>	

                            <div class="pt-3">
                                <label>Car-Tracker Image-2 <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="filePhoto2" name="filePhoto2">
                            </div>
						</div>

                        <div class="col-sm-12 pt-5">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="eName" name="txtName">
                            </div>
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
<!-- /Edit Car-Trakers Modal -->
<!-- Delete Car-Trakers Modal -->
<div class="modal custom-modal fade" id="delete_cartraker" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Cartraker</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-car-trakers')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_cartrakerId" name="d_cartraker">
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
<!-- /Delete Car-Trakers Modal -->


@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script>
	$(document).ready(function(){

        $(document).on('click','#cartrakerDbtn',function(){
            // alart("ok");
			var cartraker_id=$(this).val();
			$('#delete_cartraker').modal('show');
			$('#delete_cartrakerId').val(cartraker_id);
		});

		$(document).on('click','#editcartraker',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-car-trakers/"+eid,
				success:function(response){	
					$('#cmbCartrakerId').val(eid);	
					$('#eName').val(response.cartraker.name);	 	
					$("#eFileimg1").html(
                        `<img src="img/${response.cartraker.img1}" width="100" class="img-fluid img-thumbnail">`);

                    $("#eFileimg2").html(
                        `<img src="img/${response.cartraker.img2}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
	});

	$("#table-1").dataTable({
		"columnDefs": [
			{ "sortable": false, "targets": [2,3] }
		]
	});

    function previewThumnailImage1(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview-img1');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };

    function previewThumnailImage2(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview-img2');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };

</script>
@endsection
@endsection