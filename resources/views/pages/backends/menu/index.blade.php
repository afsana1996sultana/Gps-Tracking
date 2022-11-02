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
			<h1>All Menu</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">All Menu</div>
            </div>
		</div>
    </section>
	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_menu"><i class="fa fa-plus"></i>Add Menu</a> 
		<div class="row mt-4">                           
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" id="table-1">
								<thead>
                                    <tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">Menu</th>
                                        <th class="sorting">Slug</th>
                                        <th class="sorting">Icon</th>
                                        <th class="sorting">Status</th>
                                        <th class="sorting">Action</th>
                                    </tr>
								</thead>
								<tbody> 
									@forelse ($menu as $menu)
									<tr class="odd">
										<td>{{$menu-> id}}</td>
										<td>{{$menu-> menu_name}}</td>
										<td>{{$menu-> slug}}</td>
                                        <td><i class="{{$menu-> icon}}" ></i></td>
										<td>
                                            @if($menu->status==1)
                                            <div>
                                              <span class="badge badge-success">{{$menu->s_name}}</span>
                                            </div>
                                            @else($menu->status==2)
                                            <div>
                                              <span class="badge badge-danger">{{$menu->s_name}}</span>
                                            </div>
                                            @endif
                                        </td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$menu->id}}" class="btn btn-primary" id="editmenu" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$menu->id}}" class="btn btn-danger" id="menuDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Menu Modal -->
<div id="add_menu" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Menu</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtMenuName" name="txtMenuName"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Slug:&nbsp;</label>
                                <input type="text" class="form-control" id="txtSlug" name="txtSlug"required>
                            </div>
                        </div>

                        <div class="form-group col-12 iconpicker-container">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Icon:&nbsp;</label>
                                <input type="text" class="form-control custom-icon-picker" id="txtIcon" name="txtIcon"required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Status:&nbsp;</label>
								<select id="txtStatus" class="form-control" name="txtStatus" required>
									<option selected><-----Select Status----></option>
									@foreach ($status as $val)
									<option value="{{ $val->id }}">{{ $val->s_name }}</option>
									@endforeach
								</select>
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
<!-- /Add Menu Modal -->
<!-- Edit Menu Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('menu-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbMenuId" name="cmbMenuId" >
								<label class="col-form-label">Name:&nbsp;</label>
								<input type="text" class="form-control" id="eMenuName" name="txtMenuName">
							</div>
						</div>
                        
                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Slug:&nbsp;</label>
								<input type="text" class="form-control" id="eSlug" name="txtSlug">
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Icon:&nbsp;</label>
								<input type="text" class="form-control" id="eIcon" name="txtIcon">
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Status:&nbsp;</label>
								<select id="eStatus" class="form-control" name="txtStatus" required>
									<option selected><-----Select Status----></option>
									@foreach ($status as $val)
									<option value="{{ $val->id }}">{{ $val->s_name }}</option>
									@endforeach
								</select>
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
<!-- /Edit Menu Modal -->
<!-- Delete Menu Modal -->
<div class="modal custom-modal fade" id="delete_menu" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Menu</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-menu')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_menuId" name="d_menu">
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
<!-- /Delete Menu Modal -->

@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script src="{{url('backends/assets/bootstrap4-toggle-3.6.1/js/bootstrap4-toggle.min.js')}}"></script>

<script>
	$(document).ready(function(){

        $(document).on('click','#menuDbtn',function(){
            // alart("ok");
			var menu_id=$(this).val();
			$('#delete_menu').modal('show');
			$('#delete_menuId').val(menu_id);
		});


		$(document).on('click','#editmenu',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-menu/"+eid,
				success:function(response){
					//console.log(response.menu.details);	
					$('#cmbMenuId').val(eid);		
					$('#eMenuName').val(response.menu.menu_name);
                    $('#eSlug').val(response.menu.slug);
                    $('#eIcon').val(response.menu.icon);
                    $('#eStatus').val(response.menu.status);
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