@extends('Frontend.layout')

@section('content')


<!-- hero -->
<div class="video-container sectionDeviderforDesktop">
    <div class="videoWrapper">

        <video autoplay loop muted playsinline style="width:100%; height: 100%; object-fit: cover;">
            <source src="{{ asset('frontend/video/industrial hero video.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="overlay">
            <div class="videoContent">

                <h1 class="desktop2">Your one-stop <br>
                    <span>cost effective solutions</span> for  <br>steels and engineered products
                </h1>

                <h1 class="newHometext">Your one-stop
                    <span>cost effective solutions</span> for steels and engineered products
                </h1>


                <p>We provide a comprehensive selection of high-quality steels and <br> engineered products that satisfy the
                    demands of the oil and gas, <br> marine, offshore and onshore, petrochemical, and renewable industries.</p>

                <li class="btn btn1">
                    <a class="a1 " href="{{ url('/contact') }}">Contact Us</a>
                </li>

            </div>
        </div>
    </div>
</div>
<!-- hero -->

<!-- about us -->
<section class="aboutUs sectionDeviderforDesktop2">
    <div class="container aboutUsCustomContainer">
        <div class="row">

            <div class="col-md-6 col-12 vieoPartMain" data-aos="fade-up">
                <div class="vieoPart">
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('frontend/video/about us video.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <div class="col-md-6 col-12 infoPart" data-aos="fade-up">
                <h1 class="">About Us</h1>
                <p>We specialise in supplying high-quality steels and engineering a range of products, including structural
                    steels, pipes, valves, bolts & guts, gaskets, flanges, and fittings. Headquartered in Singapore, our
                    specialised team is committed to delivering high standards of quality performance and meeting all client
                    specifications and requirements.</p>
                <li class="btn btn1">
                    <a class="a1 " href="{{ url('/about') }}">Learn More</a>
                </li>
            </div>

            <div class="col-12 videosectionforsplitscreen" data-aos="fade-up">
                <div class="videoforSplit">
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('frontend/video/about us video.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- about us -->

<!-- reputation -->
<section class="reputation sectionDeviderforDesktopBottomPadding2" >

    <h1 data-aos="fade-up">Our Reputation</h1>

    <div class="container caruselWrapper">




        <p class="reputationText  textfordesktop" data-aos="fade-up">We pride ourselves on delivering cost-effective solutions without sacrificing quality or integrity.  <br>
            Experience the assurance of unmatched value, where affordability and excellence coexist seamlessly.</p>



        <p class="reputationText textfortablet" data-aos="fade-up">We pride ourselves on delivering cost-effective solutions with quality and integrity.
            Experience the assurance of unmatched value, where affordability and excellence coexist seamlessly.</p>






        <div class="row desktop">

            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/costeffcient.svg')}}" alt="" >
                    <h6>Cost-Efficient Solutions</h6>
                    <p>The company excels in providing cost-efficient solutions for businesses looking to optimise their budget without compromising on quality.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/extensive product.svg')}}" alt="" >
                    <h6>Extensive Product Range</h6>
                    <p>
                        A wide range of steel and engineered products catering to different industries, our platform provides a one-stop solution for efficient sourcing.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/quality control.svg')}}" alt="" >
                    <h6>Stringent Quality Control</h6>
                    <p>
                        Our rigorous quality control measures ensure that customers receive durable, reliable, and compliant products.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/tailoredsolution.svg')}}" alt="" >
                    <h6>Tailored Solutions</h6>
                    <p>Stand out with our customised steel solutions that empower customers to personalise size, thickness, and coatings to meet specific project demands.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/customer support.svg')}}" alt="" >
                    <h6>Responsive Customer Support</h6>
                    <p>From product details to order update, we ensure timely assistance, addressing your inquiries promptly and effectively.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/intrigity operation.svg')}}" alt="" >
                    <h6>Integrity In Operations</h6>
                    <p>We ensure transparent and ethical practices throughout our operations, where customers experience a trustworthy and honest engagement.</p>
                </div>
            </div>

        </div>



        <div class="row owl-carousel owl-theme carouselreputation">
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/costeffcient.svg')}}" alt="">
                    <h6>Cost-Efficient Solutions</h6>
                    <p>The company excels in providing cost-efficient solutions for businesses looking to optimise their budget
                        without compromising on quality.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/extensive product.svg')}}" alt="">
                    <h6>Extensive Product Range</h6>
                    <p>
                        A wide range of steel and engineered products catering to different industries, our platform provides a
                        one-stop solution for efficient sourcing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/quality control.svg')}}" alt="">
                    <h6>Stringent Quality Control</h6>
                    <p>
                        Our rigorous quality control measures ensure that customers receive durable, reliable, and compliant
                        products.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/tailoredsolution.svg')}}" alt="">
                    <h6>Tailored Solutions</h6>
                    <p>Stand out with our customised steel solutions that empower customers to personalise size, thickness, and
                        coatings to meet specific project demands.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/customer support.svg')}}" alt="">
                    <h6>Responsive Customer Support</h6>
                    <p>From product details to order updates, we ensure timely assistance, addressing your inquiries promptly
                        and effectively.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/intrigity operation.svg')}}" alt="">
                    <h6>Integrity In Operations</h6>
                    <p>We ensure transparent and ethical practices throughout our operations, where customers experience a
                        trustworthy and honest engagement.</p>
                </div>
            </div>

        </div>





        <div class="row owl-carousel owl-theme carousel1">
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/costeffcient.svg')}}" alt="" >
                    <h6>Cost-Efficient Solutions</h6>
                    <p>The company excels in providing cost-efficient solutions for businesses looking to optimise their budget without compromising on quality.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/extensive product.svg')}}" alt="" >
                    <h6>Extensive Product Range</h6>
                    <p>
                        A wide range of steel and engineered products catering to different industries, our platform provides a one-stop solution for efficient sourcing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/quality control.svg')}}" alt="" >
                    <h6>Stringent Quality Control</h6>
                    <p>
                        Our rigorous quality control measures ensure that customers receive durable, reliable, and compliant products.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/tailoredsolution.svg')}}" alt="" >
                    <h6>Tailored Solutions</h6>
                    <p>Stand out with our customised steel solutions that empower customers to personalise size, thickness, and coatings to meet specific project demands.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/customer support.svg')}}" alt="" >
                    <h6>Responsive Customer Support</h6>
                    <p>From product details to order updates, we ensure timely assistance, addressing your inquiries promptly and effectively.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                <div class="border reputationCard">
                    <img src="{{ asset('frontend/images/new-icons/intrigity operation.svg')}}" alt="" >
                    <h6>Integrity In Operations</h6>
                    <p>We ensure transparent and ethical practices throughout our operations, where customers experience a trustworthy and honest engagement.</p>
                </div>
            </div>
        </div>
        <!-- <div class="owl-counter">00/00</div> -->
    </div>
</section>
<!-- reputation -->

<!-- sectors -->
<section class="sector">
    <h4 class="sectorheadingh4formobile">Industry Sectors</h4>

    <div class="container  imagesHolder sectorforDesktop" data-aos="fade-up">
        <div class="imageWrapper">
            <img src="{{ asset('frontend/images/industry sector/Marine.png')}}" alt="">
            <div class="imageName">
                <p class="m-0">Marine</p>
            </div>
        </div>
        <div class="imageWrapper">
            <img src="{{ asset('frontend/images/industry sector/Renewable Energy.png')}}" alt="">
            <div class="imageName">
                <p class="m-0">Renewable Energy</p>
            </div>
        </div>
        <div class="imageWrapper">
            <img src="{{ asset('frontend/images/industry sector/Petrochemical.png')}}" alt="">
            <div class="imageName">
                <p class="m-0">Petrochemical</p>
            </div>
        </div>
        <div class="imageWrapper">
            <img src="{{ asset('frontend/images/industry sector/Offshore & Onshore.png')}}" alt="">
            <div class="imageName">
                <p class="m-0">Offshore & Onshore</p>
            </div>
        </div>
        <div class="imageWrapper">
            <img src="{{ asset('frontend/images/Oil & Gas.png')}}" alt="">
            <div class="imageName">
                <p class="m-0">Oil & Gas</p>
            </div>
        </div>
    </div>


    <div class="container secorfortablet" data-aos="fade-up">
        <div class="row">
            <div class="col-4 image-container sectorcol4padding newposition sectorcol4paddingtablet">
                <img src="{{ asset('frontend/images/industry sector/marine-tablet.png')}}" alt="" class="img-fluid">
                <span>Marine</span>
            </div>

            <div class="col-4 sectorcol4padding">
                <div class="row">

                    <div class="col-12 mb-2 ">
                        <div class="newposition">
                            <img src="{{ asset('frontend/images/industry sector/Oil & Gas-tablet.png')}}" alt="" class="img-fluid">
                            <span>Oil & Gas</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="newposition">
                            <img src="{{ asset('frontend/images/industry sector/Offshore & Onshore-tablet.png')}}" alt="" class="img-fluid">
                            <span>Offshore & Onshore</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 sectorcol4padding">
                <div class="row">
                    <div class="col-12 mb-2">
                        <div class="newposition">
                            <img src="{{ asset('frontend/images/industry sector/Renewable Energy-tablet.png')}}" alt="" class="img-fluid">
                            <span>Renewable Energy</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="newposition">
                            <img src="{{ asset('frontend/images/industry sector/Petrochemical-tablet.png')}}" alt="" class="img-fluid">
                            <span>Petrochemical</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container sectorformobile" data-aos="fade-up">
        <div class="owl-carousel owl-theme carousel2">

            <div class="mobileindustrylavel">
                <img src="{{ asset('frontend/images/sector/Marine.png')}}" alt="">
                <span>Marine</span>
            </div>


            <div class="mobileindustrylavel">
                <img src="{{ asset('frontend/images/sector/Renewable Energy.png')}}" alt="">
                <span>Renewable Energy</span>
            </div>

            <div class="mobileindustrylavel">
                <img src="{{ asset('frontend/images/sector/Petrochemical.png')}}" alt="">
                <span>Petrochemical</span>
            </div>

            <div class="mobileindustrylavel">
                <img src="{{ asset('frontend/images/sector/Offshore & Onshore.png')}}" alt="">
                <span>Offshore & Onshore</span>
            </div>

            <div class="mobileindustrylavel">
                <img src="{{ asset('frontend/images/sector/Oil & Gas.png')}}" alt="">
                <span>Oil & Gas</span>
            </div>
        </div>
    </div>


</section>
<!-- sectors -->

<!-- product Division -->
<section class="productDivision sectionDeviderforDesktopTopPadding sectionDeviderforDesktopBottomPadding2">
    <div class="container">
        <div class="row">


            <div class="col-md-6 productpaddingfor767only" data-aos="fade-up">
                <h1 class="productDivisionTextforMobile">Product Divisions</h1>
                <img src="{{ asset('frontend/images/productDevbision.png')}}" alt="" class="img-fluid w-100 productdivisionimagefordesktop">
                <img src="{{ asset('frontend/images/Rectangle 4637.png')}}" alt="" class="img-fluid productdivisionimageforsmalldevice">
            </div>

            <div class="col-md-6 productDivisionInfo "  data-aos="fade-up">
                <h1 class="productDivisionTextfordesktop" >Product Divisions</h1>
                <p >Explore our products across Structural, Piping, Flow Controls and Instrumentations, and
                    Engineering Divisions.
                </p>


                <li class="btn btn1  hidebuttonfortablet">
                    <a class="a1 " href="allProduct.html">View All Products</a>
                </li>

                <!-- tablet button -->
                <li class="btn  viewBottonfortablet">
                    <a class="a1 " href="allProduct.html">View All Products</a>
                </li>


            </div>

        </div>
    </div>
</section>
<!-- product Division -->

<!-- structural Division -->
<section class="structuralDivision sectionDeviderforDesktopBottomPadding2" id="6" >
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <div class="structuralDivisionleft">
                    <h1>Structural Division</h1>
                    <p>Explore resilient offshore plates, fortify projects with structural plates,
                        and ensure safety with our pressure vessel plates. Find a versatile range of building components,
                        including beams, channels, flats, hollow sections, and angles, meeting professional standards for
                        structural excellence.</p>

                    <li class="btn btn2 structuralproductbutton">
                        <a class="a1 " href="#">View Structural Products</a>
                    </li>
                </div>
            </div>
            <div class="col-12">
                <div class="structuralDivisionRight">
                    <div class="owl-carousel owl-theme carousel3">
                        @foreach($structuralProduct as $product)
                        <div class="item">
                            <div class="card">
                                <a href="{{ url('/product/'.$product->id) }}">
                                    <img src="{{ url('storage/'.$product->thumbnail_image) }}" class="card-img-top" alt="Image 1">
                                    <div class="card-body">
                                        <button class="btn btn-primary">{{ $product->title }}</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- structural Division -->

<!-- Piping Division -->
<section class="structuralDivision sectionDeviderforDesktopBottomPadding2" id="7"  >
    <div class="container" >
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <div class="structuralDivisionleft">
                    <h1>Piping Division</h1>

                    <p class="desktop">From offshore seamless pipes to stainless steel pipes, find top-tier
                        durability. Seamlessly connect systems with our welded pipes and ensure secure fittings with our quality
                        fittings, flanges, bolts & nuts, and gaskets. Elevate your projects with our comprehensive and reliable
                        piping solutions.</p>

                    <p class="mobile">From offshore seamless pipes to stainless steel pipes, find top-tier
                        durability. Seamlessly connect systems with our welded pipes and ensure secure fittings with our quality
                        fittings, flanges, bolts & nuts, and gaskets. Elevate your projects with our comprehensive and reliable
                        piping solutions.</p>


                    <li class="btn btn2">
                        <a class="a1 " href="#">View Piping Products</a>
                    </li>
                </div>
            </div>



            <div class="col-12">
                <div class="structuralDivisionRight">
                    <div class="owl-carousel owl-theme carousel4">
                        @foreach($pipeProduct as $product)
                            <div class="item">
                                <div class="card">
                                    <a href="{{ url('/product/'.$product->id) }}">
                                        <img src="{{ url('storage/'.$product->thumbnail_image) }}" class="card-img-top" alt="Image 1">
                                        <div class="card-body">
                                            <button class="btn btn-primary">{{ $product->title }}</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Piping Division -->

<!-- flow control -->
<section class="structuralDivision sectionDeviderforDesktopBottomPadding2" id="8" >
    <div class="container">
        <div class="row">

            <div class="col-12" data-aos="fade-up">
                <div class="structuralDivisionleft">
                    <h1>Flow Controls &
                        Instrumentations (FC&I)
                        Division</h1>

                    <p class="desktop">Achieve precision and reliability in fluid management with our flow
                        controls: manual valves, gauges, tubing, fittings, and industrial hoses.</p>

                    <p class="mobile">Achieve precision and reliability in fluid management with our flow
                        controls: manual valves, gauges, tubing, fittings, and industrial hoses.</p>


                    <li class="btn btn2">
                        <a class="a1 " href="#">View FC&I Products</a>
                    </li>
                </div>
            </div>
            <div class="col-12">
                <div class="structuralDivisionRight">
                    <div class="owl-carousel owl-theme carousel4">
                        @foreach($flowProduct as $product)
                            <div class="item">
                                <div class="card">
                                    <a href="{{ url('/product/'.$product->id) }}">
                                        <img src="{{ url('storage/'.$product->thumbnail_image) }}" class="card-img-top" alt="Image 1">
                                        <div class="card-body">
                                            <button class="btn btn-primary">{{ $product->title }}</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- flow control -->

  <!-- Engineering Division -->
  <section class="engineeringDivision sectionDeviderforDesktopBottomPadding" >
    <div class="container" >
      <div class="row">

        <div class="col-lg-6 col-12 engineeringDivisionTextInfo" data-aos="fade-up">
          <h1>Engineering Division</h1>
          <p>In our Engineering Division, we offer customised machining solutions tailored to your
            needs. Our team focuses on precision and attention to detail, ensuring a practical and efficient outcome
            that aligns with your specific requirements. Experience reliable and straightforward machining that gets the
            job done effectively.
          </p>
          <li class="btn  btn3">
            <a class="a1 " href="contactUs.html">Request for Customisation</a>
          </li>

        </div>

        <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center engineeringDivisionVideoWrapper" data-aos="fade-up">
          <div class="engineeringDivisionVideo">
            <video autoplay loop muted playsinline>
              <source src="{{ url('frontend/video/engineering division video.mp4') }}" type="video/mp4">
              Sorry, your browser doesn't support embedded videos.
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Engineering Division -->





  <!-- contact section -->
  <section class="contact sectionDeviderforDesktopTopPadding2 sectionDeviderforDesktopBottomPadding homeContact" >
    <div class="container">

      <h1 class="text-center">Contact Us</h1>


      <p class="textfordesktop">Your queries are important to us, and our dedicated team will
        promptly attend to your requests. <br>
        Thank you for considering us.</p>


      <p class="textfortabletforcontact">Your queries are important to us, and our dedicated team will promptly
        attend to your requests.
        Thank you for considering us.</p>

        <p class="textformobileforconatct">Your queries are important to us, and our team will promptly
          attend to your requests.
          Thank you for considering us.</p>

      <span>* indicates required field</span>




      <div class="row">

        <div class="col-lg-6 col-12 map map2" data-aos="fade-up">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe id="gmap_canvas" width="100%" height="100%"
                src="https://maps.google.com/maps?q=Shun Li Industrial Park, 61 Kaki Bukit Ave 1, Singapore 417943&t=&z=10&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>


              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  height: 100%;
                  width: 100%;
                }
              </style>

              <style>
                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  height: 100%;
                  width: 100%;
                }
              </style>

            </div>
          </div>
        </div>



        <div class="col-lg-6 col-12 contactForm "  data-aos="fade-up" id="contactBack">


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
          {{-- Contact Form Start --}}
    <form action="{{ route('contact.submit') }}" method="POST">
      @csrf
      
    {{-- first & last name  --}}
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <label for="firstName" class="form-label">First Name *</label>
        <input name="first_name" type="text" class="form-control border-bottom-only" id="firstName">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <label for="lastName" class="form-label">Last Name *</label>
        <input name="last_name" type="text" class="form-control border-bottom-only" id="lastName" >
      </div>
    </div>

    {{-- phone & email --}}
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <label for="phoneNumber" class="form-label">Phone Number</label>
        <input name="phone" type="tel" class="form-control border-bottom-only" id="phoneNumber">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <label for="email" class="form-label">Email *</label>
        <input name="email" type="email" class="form-control border-bottom-only" id="email">
      </div>
    </div>

    
    {{-- Company & Country  --}}
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <label for="company" class="form-label">Company</label>
        <input name="company" type="text" class="form-control border-bottom-only" id="company">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <label for="country" class="form-label">Country</label>
        <input name="country" type="text" class="form-control border-bottom-only" id="country">
      </div>
    </div>


    {{-- select subject --}}
    <div class="row my-4">
      <div class="col-12">
      <h2 class="pb-3">Select Subject</h2>
        <div class="row ps-2">

          <div class="col-md-3 form-check">
              <input name="subject" class="form-check-input" type="radio" name="subject" id="generalInquiry" value="General Inquiry" checked>
              <label class="form-check-label" for="generalInquiry">General Inquiry</label>
          </div>

          <div class="col-md-3 form-check">
              <input class="form-check-input" type="radio" name="subject" id="salesInquiry" value="Sales Inquiry">
              <label class="form-check-label" for="salesInquiry">Sales Inquiry</label>
          </div>

          <div class="col-md-3 form-check">
              <input class="form-check-input" type="radio" name="subject" id="customerSupport" value="Customer Support">
              <label class="form-check-label" for="customerSupport">Support</label>
          </div>


          <div class="col-md-3 form-check">
              <input class="form-check-input" type="radio" name="subject" id="feedback" value="Feedback">
              <label class="form-check-label" for="feedback">Feedback</label>
          </div>

        </div>
      </div>
    </div>


    {{-- Message Textarea --}}
    <div class="row mb-5">
      <div class="col-12">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control border-bottom-only" name="massage" id="message" rows="3" placeholder="Enter your message text in this space" ></textarea>
      </div>
    </div>


    {{-- CAPTCHA Section --}}
    <div class="row mb-3">
      <div class="col-12">
          <div class="g-recaptcha" data-sitekey="6LeY_wEqAAAAAJdK70pCAp34qlnLxlR2VV9_oM4_"></div>
      </div>
    </div>



        @if (session('url_fragment'))
            <script>
                window.location.hash = "{{ session('url_fragment') }}";
            </script>
        @endif

        @if(session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        
        {{-- Submit Button in its own row --}}
        <div class="row">
          <div class="col-12 btn-container">
            <button type="submit" class="btn btnSubmit">Submit</button>
          </div>
        </div>
            
    </form>

    {{-- Contact Form End  --}}


          
          
          
        </div>

      </div>
    </div>
  </section>
  <!-- end contact section -->






@endsection

