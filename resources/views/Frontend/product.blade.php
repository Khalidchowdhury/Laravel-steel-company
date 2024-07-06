@extends('Frontend.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/OffshorePlates.css') }}">
@endpush
@section('content')

  
       <!-- hero -->
    <section class="allProductBanner">
        <div class="container">
            <h1 class="mt-5">Products</h1>

            <nav aria-label="breadcrumb" class="breadcrumbDesktop">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" ><a href="{{ url('/all-products') }}">All Products</a></li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- hero -->






    <!-- single product -->
    <section class="singleProduct sectionDeviderforDesktopTopPadding sectionDeviderforDesktopBottomPadding">
      <div class="container">
        <h1 data-aos="fade-up"> {{ $product->short_title }}</h1>
        
        
        
        

        <div class="row">

          <div class="col-lg-6 col-12 singleProductImage" data-aos="fade-up">
            <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->title }}" class="img-fluid"> </br></br></br>
          </div>


          <div class="col-lg-6 col-12 singleProductInfo">

            <div class="perticulerProductinfo" data-aos="fade-up">
                
                @foreach($product->bulletPoints as $bulletPoint)
                <h2>{{ $bulletPoint->title }}</h2></br>
                <p>{{ $bulletPoint->description }}</p></br>
                @endforeach
            
            </div>
            
            
            
          </div>

        </div>

      </div>
    </section>
    <!-- single product -->





@endsection

