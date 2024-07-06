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
                    <h1 class="mb-4">Edit Product</h1>
                
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $product->title }}" required>
                        </div>
                
                        <div class="mb-3">
                            <label for="short_title" class="form-label">Short Title:</label>
                            <input type="text" name="short_title" id="short_title" class="form-control" value="{{ $product->short_title }}" required>
                        </div>
                
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
                        </div>
                
                        <div class="mb-3">
                            <label for="thumbnail_image" class="form-label">Thumbnail Image:</label>
                            <input type="file" name="thumbnail_image" id="thumbnail_image" class="form-control">
                            @if ($product->thumbnail_image)
                                <img src="{{ asset('storage/' . $product->thumbnail_image) }}" alt="Thumbnail Image" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image:</label>
                            <input type="file" name="product_image" id="product_image" class="form-control">
                            @if ($product->product_image)
                                <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image" class="img-thumbnail mt-2" width="150">
                            @endif
                        </div>
                
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category:</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                
                        <div class="mb-3">
                            <label class="form-label">Bullet Points:</label>
                            <div id="bullet-points-container">
                                @foreach($product->bulletPoints as $bulletPoint)
                                    <div class="bullet-point mb-2">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="text" name="bullet_points[{{ $loop->index }}][title]" class="form-control" placeholder="Title" value="{{ $bulletPoint->title }}" required>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" name="bullet_points[{{ $loop->index }}][description]" class="form-control" placeholder="Description" value="{{ $bulletPoint->description }}" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger remove-bullet-point">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" id="add-bullet-point" class="btn btn-primary mt-3">Add Bullet Point</button>
                        </div>
                
                        <button type="submit" class="btn btn-success">Update Product</button>
                    </form>
                </div>
                
                <script>
                document.addEventListener('DOMContentLoaded', function () {
                    let bulletPointsContainer = document.getElementById('bullet-points-container');
                    let addBulletPointButton = document.getElementById('add-bullet-point');
                
                    addBulletPointButton.addEventListener('click', function () {
                        let index = bulletPointsContainer.children.length;
                        let newBulletPoint = document.createElement('div');
                        newBulletPoint.classList.add('bullet-point', 'mb-2');
                        newBulletPoint.innerHTML = `
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="bullet_points[${index}][title]" class="form-control" placeholder="Title" required>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="bullet_points[${index}][description]" class="form-control" placeholder="Description" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-bullet-point">Remove</button>
                                </div>
                            </div>
                        `;
                        bulletPointsContainer.appendChild(newBulletPoint);
                
                        // Add event listener for the remove button
                        newBulletPoint.querySelector('.remove-bullet-point').addEventListener('click', function () {
                            newBulletPoint.remove();
                        });
                    });
                
                    // Add event listener to existing remove buttons
                    document.querySelectorAll('.remove-bullet-point').forEach(button => {
                        button.addEventListener('click', function () {
                            button.closest('.bullet-point').remove();
                        });
                    });
                });
                </script>
			</section>
			
		</div>
	</div>

@endsection