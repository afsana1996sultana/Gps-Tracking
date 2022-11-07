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
			<h1>Our Testimonials</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Our Testimonials</div>
            </div>
		</div>
    </section>

	<div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_testimonial"><i class="fa fa-plus"></i>Add New</a> 
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
                                        <th class="sorting">Company Name</th>
                                        <th class="sorting">Heading</th>
                                        <th class="sorting">Action</th>
									</tr>
								</thead>
								<tbody> 
									@forelse ($testimonial as $testimonial)
									<tr class="odd">
                                        <td>{{$testimonial-> id}}</td>
                                        <td><img src="{{asset('img/'.$testimonial->img)}}" height="60px" width="150px" alt=""></td>
                                        <td>{{$testimonial-> company_name}}</td>
                                        <td>{{$testimonial-> header}}</td>
										<td class="text-right py-0 align-middle">
											<div class="btn-group btn-group-sm">
												<button type="button" value="{{$testimonial->id}}" class="btn btn-primary" id="edittestimonial" ><i class="fas fa-edit" ></i> </button>&nbsp;
												<button type="button" value="{{$testimonial->id}}" class="btn btn-danger" id="testimonialDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Testimonials Modal -->
<div id="add_testimonial" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Testimonial</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('testimonials.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Testimonial Image Preview</label>
                            <div>
                                <img id="preview-img" class="admin-img" src="{{url('backends/assets/image/av.jpg')}}" alt="" height="100px" width="100px">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Testimonial Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto" onchange="previewThumnailImage(event)">
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Company Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtCompanyName" name="txtCompanyName"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Heading:&nbsp;</label>
                                <input type="text" class="form-control" id="txtHeader" name="txtHeader"required>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Details <span class="text-danger">*</span></label>
                            <textarea name="txtDetail" id="txtDetail" class="summernote"></textarea>
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
<!-- /Add Testimonials Modal -->
<!-- Edit Testimonials Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Testimonial</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('testimonials-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" value="" id="cmbTestimonialId" name="cmbTestimonialId" >
							<label class="form-label">Testimonial Image Preview:&nbsp;</label>
							<div class="input-group mb-3" id="eFileimg" alt=""></div>	
						</div>

                        <div class="form-group col-12">
                            <label>Testimonial Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto">
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Company Name:&nbsp;</label>
                                <input type="text" class="form-control" id="eCompanyName" name="txtCompanyName">
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Heading:&nbsp;</label>
                                <input type="text" class="form-control" id="eHeader" name="txtHeader">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Details <span class="text-danger">*</span></label>
                            <textarea name="txtDetail" id="eDetail" class="summernote"></textarea>
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
<!-- /Edit Testimonials Modal -->
<!-- Delete Testimonials Modal -->
<div class="modal custom-modal fade" id="delete_testimonial" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Testimonial</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-testimonials')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_testimonialId" name="d_testimonial">
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
<!-- /Delete Testimonials Modal -->


@section('js')
<script src="{{url('backends/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backends/assets/modules/datatables/dataTables.select.min.js')}}"></script>
<script src="{{url('backends/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script>
	$(document).ready(function(){

        $(document).on('click','#testimonialDbtn',function(){
            // alart("ok");
			var testimonial_id=$(this).val();
			$('#delete_testimonial').modal('show');
			$('#delete_testimonialId').val(testimonial_id);
		});

		$(document).on('click','#edittestimonial',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-testimonials/"+eid,
				success:function(response){	
					$('#cmbTestimonialId').val(eid);	
					$('#eCompanyName').val(response.testimonial.company_name);	
					$('#eHeader').val(response.testimonial.header);	
                    $('#eDetail').summernote('code', response.testimonial.detail); 	
					$("#eFileimg").html(
                        `<img src="img/${response.testimonial.img}" width="100" class="img-fluid img-thumbnail">`);
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