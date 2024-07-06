@extends('Frontend.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/engineeringProducts.css') }}">
@endpush

@section('content')



    <!-- hero -->
    <section class="allProductBanner">
        <div class="container">
            <h1 class="mt-5">Products</h1>

            <nav aria-label="breadcrumb" class="breadcrumbDesktop">
                 <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/all-product') }}">All Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Engineering Products</li>
                 </ol>
            </nav>
        </div>
    </section>


    <section class="borderBottomFromtablet">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumbMobile">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/all-product') }}">All Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Engineering Products</li>
              </ol>
            </nav>
        </div>
    </section>
    <!-- hero -->



    <!-- engineering products -->
    <section class="engineeringProdutcs sectionDeviderforDesktopTopPadding sectionDeviderforDesktopBottomPadding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12 engineeringProdutcsinfo" data-aos="fade-up">
            <h1 data-aos="fade-up">Engineering Products</h1>
            <p data-aos="fade-up">In our Engineering Division, we offer customised machining solutions tailored to your needs. Our team focuses on precision and attention to detail, ensuring a practical and efficient outcome that aligns with your specific requirements. Experience reliable and straightforward machining that gets the job done effectively.</p>


            <li class="btn btn2" >
              <a class="a1 " href="contactUs.html">Request for Customisation</a>
            </li>

          </div>
          <div class="col-lg-6 col-12" data-aos="fade-up">
            <img src="{{ url('frontend/images/engineeringProductImage.png') }}" alt="" class="img-fluid engineeringProductimage">
          </div>
        </div>
      </div>
    </section>
    <!-- engineering products -->


@endsection

