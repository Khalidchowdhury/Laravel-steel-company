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
                <div class="container">
                    <h1>Add New Category</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
			</section>
			
		</div>
	</div>

@endsection