@extends('Frontend.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/productnotfound.css') }}">
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




    <section class="froductnotfoundinfo sectionDeviderforDesktopBottomPadding2 sectionDeviderforDesktopTopPadding">
      <div class="container text-center">
        <h1 class="text-start text-center">All Search Results</h1>
        <h2>Sorry, we couldn’t find any results for <span>‘{{ $keyword }}’</span> </h2>

        <p>The search you requested could not be found. Try refining your search, or use the navigation above to locate your search. <br>
          If you still can’t find what you’re looking for, you may <a href="{{ url('/contact') }}" class="cta-link">contact us</a> or call <a href="tel:+6598162261" class="cta-link">(+65) 98162261.</a>
        </p>
        

      </div>
    </section>














@endsection
