@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
@endsection
@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Add Pricing</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Add Pricing</div>
            </div>
		</div>
    </section>

	<div class="section-body">
    <a href="{{ route('add-pricing.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Add New</a> 
		<div class="row mt-4">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">Title</th>
                                        <th class="sorting">Price</th>
                                        <th class="sorting">Renew</th>
                                        <th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($pricing as $pricing)
									<tr class="odd">
                                        <td>{{$pricing-> id}}</td>
                                        <td>{{$pricing-> title}}</td>
                                        <td>{{$pricing-> price}}</td>
                                        <td>{{$pricing-> renew}}</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
                                                <a href="{{url('add-pricing/'.$pricing->id.'/edit')}}" class="btn btn-primary"><i class="fas fa-edit" ></i></a>&nbsp;
												<button type="button" value="{{$pricing->id}}" class="btn btn-danger" id="pricingDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Delete Pricing Modal -->
<div class="modal custom-modal fade" id="delete_pricing" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Price</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-add-pricing')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_pricingId" name="d_pricing">
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
<!-- /Delete Pricing Modal -->
@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(document).on('click','#pricingDbtn',function(){
        // alart("ok");
            var pricing_id=$(this).val();
            $('#delete_pricing').modal('show');
            $('#delete_pricingId').val(pricing_id);
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