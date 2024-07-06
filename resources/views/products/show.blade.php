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
                <div class="container mt-5">
                    <h1 class="mb-4">{{ $product->title }}</h1>
                    <h2 class="mb-3">{{ $product->short_title }}</h2>
                    <p>{{ $product->description }}</p>
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $product->thumbnail_image) }}" alt="{{ $product->title }}" class="img-thumbnail">
                        <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->title }}" class="img-fluid">
                    </div>
            
                    <h2 class="mt-5">Bullet Points</h2>
                    <ul class="list-group">
                        @foreach($product->bulletPoints as $bulletPoint)
                            <li class="list-group-item">
                                <strong>{{ $bulletPoint->title }}</strong>: {{ $bulletPoint->description }}
                            </li>
                        @endforeach
                    </ul>
                    
                    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">Back to Products</a>
                </div>
			</section>
			
		</div>
	</div>

@endsection