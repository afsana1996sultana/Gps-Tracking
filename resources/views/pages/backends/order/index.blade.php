@extends('layout.backends.home')
@section("css")
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backends/assets/modules/datatables/datatables.min.css')}}">
@endsection

@section('page')
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Order</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Order</div>
            </div>
		</div>
    </section>

	<div class="section-body">
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
									@forelse ($order as $order)
									<tr class="odd">
										<td>{{$order-> id}}</td>
										<td>{{$order-> title}}</td>
										<td>{{$order-> price}}</td>
										<td>{{$order-> renew}}</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$order->id}}" class="btn btn-info" id="ordershBtn" ><i class="fas fa-eye" ></i> </button>&nbsp;
												<button type="button" value="{{$order->id}}" class="btn btn-danger" id="orderDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- show Order Modal -->
<div id="show___order" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Show Order</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Title:&nbsp;</label>
							<div class="" id="ShTitle"></div>
						</div>
					</div>

                    <div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Price:&nbsp;</label>
							<div class="" id="ShPrice"></div>
						</div>
					</div>

                    <div class="col-sm-6">
						<div class="form-group mb-5">
							<label class="col-form-label">Renew:&nbsp;</label>
							<div class="" id="ShRenew"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /show Order Modal -->
<!-- Delete Order Modal -->
<div class="modal custom-modal fade" id="delete_order" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Order</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-order')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_orderId" name="d_order">
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
<!-- /Delete Order Modal -->
@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>

<script>
	$(document).ready(function(){

        $(document).on('click','#orderDbtn',function(){
            // alart("ok");
			var order_id=$(this).val();
			$('#delete_order').modal('show');
			$('#delete_orderId').val(order_id);
		});


        $(document).on('click','#ordershBtn',function(){
			//  alert("ok");

			var ordersh_id=$(this).val();
			// alert(ordersh_id);

			$('#show___order').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-order/"+ordersh_id,
				success:function(response){
					console.log(response);
					$('#cmbOrderSHId').html(ordersh_id);
					$('#ShTitle').html(response.order.name);
					$('#ShPrice').html(response.order.email);
					$('#ShRenew').html(response.order.phone);

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