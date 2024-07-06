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
							<h1></h1>
						</div>
						<div class="col-sm-6">
							
						</div>
					</div>
				</div>
			</section>

			
			
			<section class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6">
							<h1>Edit Contact Information</h1>
                        </div>
                    </div>

					{{-- main Contact change section --}}
					<div class="container">
				
						@if (session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
				
						<form action="{{ route('dashboard.contact.update') }}" method="POST">
							@csrf
							@method('PUT')
				
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone ?? '') }}">
								@error('phone')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
				
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" class="form-control" value="{{ old('email', $contact->email ?? '') }}">
								@error('email')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
				
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" name="address" id="address" class="form-control" value="{{ old('address', $contact->address ?? '') }}">
								@error('address')
									<div class="text-danger">{{ $message }}</div>
								@enderror
							</div>
				
							<button type="submit" class="btn btn-primary">Update</button>
						</form>
					</div>

                    
                </div>
			</section>
			
		</div>
	</div>

@endsection
