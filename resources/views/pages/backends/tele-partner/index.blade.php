@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/bootstrap4-toggle-3.6.1/css/bootstrap4-toggle.min.css')}}">
@endsection
@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Our Telecommunications Partners</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Our Telecommunications Partners</div>
            </div>
		</div>
    </section>

	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_telepartner"><i class="fa fa-plus"></i>Add New</a> 
		<div class="row mt-4">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">Name</th>
                                        <th class="sorting">Logo</th>
                                        <th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($telepartner as $telepartner)
									<tr class="odd">
                                        <td>{{$telepartner-> id}}</td>
                                        <td>{{$telepartner-> name}}</td>
                                        <td><img src="{{asset('img/'.$telepartner->partner_logo)}}" height="60px" width="150px" alt=""></td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$telepartner->id}}" class="btn btn-primary" id="edittelepartner" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$telepartner->id}}" class="btn btn-danger" id="telepartnerDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Tele-Partners Modal -->
<div id="add_telepartner" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Telecommunications Partner</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('tele-partner.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtName" name="txtName"required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group mb-5">
                                <label for="">Partner Logo</label>
                                <input type="file" name="filePhoto" class="form-control-file">
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
<!-- /Add Tele-Partners Modal -->
<!-- Edit Tele-Partners Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Telecommunications Partner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('tele-partner-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbTelepartnerId" name="cmbTelepartnerId" >
								<label class="col-form-label">Name:&nbsp;</label>
								<input type="text" class="form-control" id="eName" name="txtName">
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group">
								<div class="form-group" id="eFilelogo"></div>	
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
                                <label class="col-form-label">Logo:&nbsp;</label>
								<input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>
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
<!-- /Edit Tele-Partners Modal -->
<!-- Delete Tele-Partners Modal -->
<div class="modal custom-modal fade" id="delete_telepartner" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Telecommunications Partner</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-tele-partner')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_telepartnerId" name="d_telepartner">
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
<!-- /Delete Tele-Partners Modal -->


@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script src="{{url('backends/assets/bootstrap4-toggle-3.6.1/js/bootstrap4-toggle.min.js')}}"></script>
<script>
	$(document).ready(function(){

        $(document).on('click','#telepartnerDbtn',function(){
            // alart("ok");
			var telepartner_id=$(this).val();
			$('#delete_telepartner').modal('show');
			$('#delete_telepartnerId').val(telepartner_id);
		});

		$(document).on('click','#edittelepartner',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-tele-partner/"+eid,
				success:function(response){	
					$('#cmbTelepartnerId').val(eid);	
					$('#eName').val(response.telepartner.name);	
					$("#eFilelogo").html(
                        `<img src="img/${response.telepartner.partner_logo}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
	});

	$("#table-1").dataTable({
		"columnDefs": [
			{ "sortable": false, "targets": [2,3] }
		]
	});

</script>
@endsection
@endsection