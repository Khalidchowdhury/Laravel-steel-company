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
                    <h1 class="mb-4">Create Product</h1>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Name ( Maini Page ):</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="short_title" class="form-label">Product Name ( Sub Page ):</label>
                            <input type="text" name="short_title" id="short_title" class="form-control" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="description" class="form-label">Product Description ( Main Page ):</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                    
                        <div class="mb-3">
                            <label for="thumbnail_image" class="form-label">Product Image ( Main Page ), 270px*270px</label>
                            <input type="file" name="thumbnail_image" id="thumbnail_image" class="form-control" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image ( Sub Page ), 564px*328px</label>
                            <input type="file" name="product_image" id="product_image" class="form-control" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category:</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                </div>
                    
                        <h2 class="mt-4">Product Description ( Sub Page )</h2>
                        <div id="bullet-points">
                            <div class="bullet-point mb-3">
                                <div class="mb-3">
                                    <label for="bullet_points[0][title]" class="form-label">Title:</label>
                                    <input type="text" name="bullet_points[0][title]" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bullet_points[0][description]" class="form-label">Description:</label>
                                    <textarea name="bullet_points[0][description]" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary mb-3" onclick="addBulletPoint()">Add Bullet Point</button> <br><br>
                        <button type="submit" class="btn btn-primary">Create Product</button> <br><br><br>
                    </form>
                </div>
                    
                    <script>
                        let bulletPointIndex = 1;
                    
                        function addBulletPoint() {
                            const bulletPointsDiv = document.getElementById('bullet-points');
                            const newBulletPoint = document.createElement('div');
                            newBulletPoint.classList.add('bullet-point', 'mb-3');
                            newBulletPoint.innerHTML = `
                                <div class="mb-3">
                                    <label for="bullet_points[${bulletPointIndex}][title]" class="form-label">Title:</label>
                                    <input type="text" name="bullet_points[${bulletPointIndex}][title]" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bullet_points[${bulletPointIndex}][description]" class="form-label">Description:</label>
                                    <textarea name="bullet_points[${bulletPointIndex}][description]" class="form-control" required></textarea>
                                </div>
                            `;
                            bulletPointsDiv.appendChild(newBulletPoint);
                            bulletPointIndex++;
                        }
                    </script>
                    

			</section>
			
		</div>
	</div>

@endsection