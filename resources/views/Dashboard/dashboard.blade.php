@extends('Dashboard.layouts.app')

@section('content')
		
	<div class="wrapper">
		
		@include('Dashboard.layouts.header')
		
		@include('Dashboard.layouts.sidebar')

		<div class="content-wrapper">
			
			<section class="content-header">					
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Dashboard</h1>
						</div>
						<div class="col-sm-6">
							
						</div>
					</div>
				</div>
			</section>

			
			
			<section class="content">
				<div class="container-fluid">
					<div class="row">

						<div class="col-lg-6 col-6">							
							<div class="small-box card">
								<div class="inner">
									<h3>{{ $totalCategory }}</h3>
									<p>Category</p>
								</div>
								<div class="icon">
									<i class="ion ion-bag"></i>
								</div>
								<a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						
						<div class="col-lg-6 col-6">							
							<div class="small-box card">
								<div class="inner">
									<h3>{{ $totalProduct }}</h3>
									<p>Total Product</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						

					</div>
				</div>			
			</section>
			
		</div>
	</div>

@endsection