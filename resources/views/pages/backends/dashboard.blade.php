@extends('layout.backends.home')
@section('page')
<style>
	.card{
		height:122px;
		width:250px;
	}
	.card .card-body{
		color:white;
		font-size: 18px;
		padding-top: 10px;
    	padding-left: 12px;
	}
	.link a{
		color:white;
		font-size: 15px;
    	padding-left: 12px;

	}
</style>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Dashboard</h1>
		</div>

		<div class="section-body">
            <div class="row">
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="card" style="background-color:#17A2B8;">
						<div class="card-body">
							<h3>10+</h3>
							<div>Our Services</div>
						</div>
						
						<div class="link" style="background-color:#148A9D;">
							<a href="{{url('/services')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="card" style="background-color:#28A745;">
						<div class="card-body">
							<h3>50+</h3>
							<div>Our Clients</div>
						</div>

						<div class="link" style="background-color:#228E3B;">
							<a href="{{url('/services')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="card" style="background-color:#FFC107;">
						<div class="card-body">
							<h3>35%</h3>
							<div>Pricing Less</div>
						</div>

						<div class="link" style="background-color:#D9A406;">
							<a href="{{url('/services')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="card" style="background-color:#DC3545;">
						<div class="card-body">
							<h3>5+</h3>
							<div>Blogs</div>
						</div>

						<div class="link" style="background-color:#BB2D3B;">
							<a href="{{url('/services')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
            </div>
          </div>
	</section>
</div>
@endsection
