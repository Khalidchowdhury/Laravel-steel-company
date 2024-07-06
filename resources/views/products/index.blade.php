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
                            <h1>Product</h1>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('products.create') }}" class="btn btn-primary addTopBTN">Add Products</a>
                        </div>
                    </div>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th width="380px">Description</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td width="150">
                                    @if($product->thumbnail_image)
                                        <img src="{{ asset('storage/' . $product->thumbnail_image) }}" alt="{{ $product->title }}" class="img-thumbnail">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                {{-- <td><img src="{{ $product->thumbnail_image }}"></td> --}}
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <form action="{{ url('products', ['id' => $product->id]) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
			</section>
			
		</div>
	</div>

@endsection