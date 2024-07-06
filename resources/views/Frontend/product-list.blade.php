@extends('Frontend.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/allProducts.css') }}">
@endpush


@section('content')
   
   
       <!-- hero -->
    <section class="allProductBanner">
        <div class="container">
            <h1 class="mt-5">Products</h1>

            <nav aria-label="breadcrumb" class="breadcrumbDesktop">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">All Products</li>
                </ol>
            </nav>
        </div>
    </section>


    <section class="borderBottomFromtablet">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumbMobile">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Products</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- hero -->


   
   
   
    <!-- products-->
    <section class="productsGallery sectionDeviderforDesktopTopPadding sectionDeviderforDesktopBottomPadding">
        <div class="container">
            
            <h1 data-aos="fade-up">All Products</h1>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-12 perticularProduct desktopPadding2 productCardfor1080" data-aos="fade-up">
                    <a href="{{ url('/product/'.$product->id) }}" class="test">
                        <img src="{{ url('storage/'.$product->thumbnail_image) }}" alt="" class="img-fluid">
                        <h3>{{ $product->title }}</h3>
                        <!--<p>{{ $product->description }}</p>-->
                        <p>{{ ($product->description) }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- products-->
    
    
        <!-- Pagination Controls -->
        <div class="pagination-controls">
          <button class="pagination-btn" id="prevBtn">Prev</button>
          <span id="paginationNumbers"></span>
          <button class="pagination-btn" id="nextBtn">Next</button>
        </div>



    
@endsection

