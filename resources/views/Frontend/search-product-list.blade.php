@extends('Frontend.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/searchresult.css') }}">
@endpush

@section('content')

    <!-- hero -->
    <section class="allProductBanner">
        <div class="container">
            <h1 class="mt-5">Search Result</h1>

            <nav aria-label="breadcrumb" class="breadcrumbDesktop">
                <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active text-white" aria-current="page">All Products</li>-->
                </ol>
            </nav>
        </div>
    </section>


    <section class="borderBottomFromtablet">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumbMobile">
                <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">All Products</li>-->
                </ol>
            </nav>
        </div>
    </section>
    <!-- hero -->

    
    
    <!-- products-->
    
        <section class="searchproduct sectionDeviderforDesktopBottomPadding sectionDeviderforDesktopTopPadding">
          <div class="container">
            <h1>All Search Results</h1>
        
            <h2>{{ $resultCount }} results found for "{{ $keyword }}" This Keyword</h2>
            
        
        @foreach($products as $product)
            <div class="row searchproductwrapper">
              <div class="col-lg-4 col-12 ">
                <a href="{{ url('/product/'.$product->id) }}">   
                    <img src="{{ url('storage/'.$product->product_image) }}" alt="" class="img-fluid">
                </a>
              </div>
        
              <div class="col-lg-8 col-12 singleSearchproduct">
                <h2><a class="" href="{{ url('/product/'.$product->id) }}">{{ $product->title }}</a></h2>
                <p><a href="{{ url('/product/'.$product->id) }}" class="">{{ $product->description }}</a></p>
              </div>
            </div>
        @endforeach
        
          </div>
    </section>

    <!-- products-->
    

    
@endsection

