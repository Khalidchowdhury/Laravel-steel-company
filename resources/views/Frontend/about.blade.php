@extends('Frontend.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/aboutus.css') }}">
@endpush

@section('content')





    <!-- hero -->
    <section class="allProductBanner">
        <div class="container">
            <h1 class="mt-5">About Us</h1>

            <nav aria-label="breadcrumb" class="breadcrumbDesktop">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>


    <section class="borderBottomFromtablet">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumbMobile">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- hero -->





    <!-- single product -->
    <section class="aboutussection1 sectionDeviderforDesktopTopPadding sectionDeviderforDesktopBottomPadding2" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 aboutussection1Info" >
                    <h1>Our Business</h1>
                    <p>We supply high-quality steels and engineering a  range of products, including structural steels, pipes, valves, bolts & guts, gaskets, flanges, and fittings.
                        Headquartered in Singapore, our specialised team is committed to delivering high standards of quality performance and meeting all client specifications and requirements.</p>
                </div>
                <div class="col-lg-6 col-12 aboutusvideo">
                    <video width="100%" src="{{ url('frontend/video/about us video.mp4') }}" autoplay muted loop></video>
                </div>
            </div>
        </div>
    </section>
    <!-- single product -->




    <!-- sectors -->
    <section class="sector sectionDeviderforDesktopBottomPadding2" data-aos="fade-up">
        <h4>Industry Sectors</h4>

        <div class="container  imagesHolder sectorforDesktop">
            <div class="imageWrapper">
                <img src="{{ url('frontend/images/industry sector/Marine.png') }}" alt="">
                <div class="imageName">
                    <p class="m-0">Marine</p>
                </div>
            </div>
            <div class="imageWrapper">
                <img src="{{ url('frontend/images/industry sector/Renewable Energy.png') }}" alt="">
                <div class="imageName">
                    <p class="m-0">Renewable Energy</p>
                </div>
            </div>
            <div class="imageWrapper">
                <img src="{{ url('frontend/images/industry sector/Petrochemical.png') }}" alt="">
                <div class="imageName">
                    <p class="m-0">Petrochemical</p>
                </div>
            </div>
            <div class="imageWrapper">
                <img src="{{ url('frontend/images/industry sector/Offshore & Onshore.png') }}" alt="">
                <div class="imageName">
                    <p class="m-0">Offshore & Onshore</p>
                </div>
            </div>
            <div class="imageWrapper">
                <img src="{{ url('frontend/images/Oil & Gas.png') }}" alt="">
                <div class="imageName">
                    <p class="m-0">Oil & Gas</p>
                </div>
            </div>
        </div>


        <div class="container secorfortablet">
            <div class="row">
                <div class="col-4 image-container sectorcol4padding newposition sectorcol4paddingtablet">
                    <img src="{{ url("frontend/images/industry sector/marine-tablet.png") }}" alt="" class="img-fluid">
                    <span>Marine</span>
                </div>

                <div class="col-4 sectorcol4padding">
                    <div class="row">

                        <div class="col-12 mb-2 ">
                            <div class="newposition">
                                <img src="{{ url('frontend/images/industry sector/Oil & Gas-tablet.png') }}" alt="" class="img-fluid">
                                <span>Oil & Gas</span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="newposition">
                                <img src="{{ url('frontend/images/industry sector/Offshore & Onshore-tablet.png') }}" alt="" class="img-fluid">
                                <span>Offshore & Onshore</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 sectorcol4padding">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <div class="newposition">
                                <img src="{{ url('frontend/images/industry sector/Renewable Energy-tablet.png') }}" alt="" class="img-fluid">
                                <span>Renewable Energy</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="newposition">
                                <img src="{{ url('frontend/images/industry sector/Petrochemical-tablet.png') }}" alt="" class="img-fluid">
                                <span>Petrochemical</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container sectorformobile">
            <div class="owl-carousel owl-theme carousel2">

                <div class="mobileindustrylavel">
                    <img src="{{ url('frontend/images/sector/Marine.png') }}" alt="">
                    <span>Marine</span>
                </div>


                <div class="mobileindustrylavel">
                    <img src="{{ url('frontend/images/sector/Renewable Energy.png') }}" alt="">
                    <span>Renewable Energy</span>
                </div>

                <div class="mobileindustrylavel">
                    <img src="{{ url('frontend/images/sector/Petrochemical.png') }}" alt="">
                    <span>Petrochemical</span>
                </div>

                <div class="mobileindustrylavel">
                    <img src="{{ url('frontend/images/sector/Offshore & Onshore.png') }}" alt="">
                    <span>Offshore & Onshore</span>
                </div>

                <div class="mobileindustrylavel">
                    <img src="{{ url('frontend/images/sector/Oil & Gas.png') }}" alt="">
                    <span>Oil & Gas</span>
                </div>
            </div>
        </div>
    </section>
    <!-- sectors -->







    <!-- reputation -->
    <section class="reputation sectionDeviderforDesktopBottomPadding2" data-aos="fade-up">

        <h1>Our Reputation</h1>
        <div class="container caruselWrapper">
            <p class="reputationText  textfordesktop">We pride ourselves on delivering cost-effective solutions without sacrificing quality or integrity.  <br>
                Experience the assurance of unmatched value, where affordability and excellence coexist seamlessly.</p>



            <p class="reputationText textfortablet">We pride ourselves on delivering cost-effective solutions with quality and integrity.
                Experience the assurance of unmatched value, where affordability and excellence coexist seamlessly.</p>






            <div class="row desktop">

                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/costeffcient.svg') }}" alt="" >
                        <h6>Cost-Efficient Solutions</h6>
                        <p>The company excels in providing cost-efficient solutions for businesses looking to optimise their budget without compromising on quality.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/extensive product.svg') }}" alt="" >
                        <h6>Extensive Product Range</h6>
                        <p>
                            A wide range of steel and engineered products catering to different industries, our platform provides a one-stop solution for efficient sourcing.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/quality control.svg') }}" alt="" >
                        <h6>Stringent Quality Control</h6>
                        <p>
                            Our rigorous quality control measures ensure that customers receive durable, reliable, and compliant products.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/tailoredsolution.svg') }}" alt="" >
                        <h6>Tailored Solutions</h6>
                        <p>Stand out with our customised steel solutions that empower customers to personalise size, thickness, and coatings to meet specific project demands.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/customer support.svg') }}" alt="" >
                        <h6>Responsive Customer Support</h6>
                        <p>From product details to order update, we ensure timely assistance, addressing your inquiries promptly and effectively.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767" data-aos="fade-up">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/intrigity operation.svg') }}" alt="" >
                        <h6>Integrity In Operations</h6>
                        <p>We ensure transparent and ethical practices throughout our operations, where customers experience a trustworthy and honest engagement.</p>
                    </div>
                </div>

            </div>



            <div class="row owl-carousel owl-theme carouselreputation">
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/costeffcient.svg') }}" alt="">
                        <h6>Cost-Efficient Solutions</h6>
                        <p>The company excels in providing cost-efficient solutions for businesses looking to optimise their budget
                            without compromising on quality.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/extensive product.svg') }}" alt="">
                        <h6>Extensive Product Range</h6>
                        <p>
                            A wide range of steel and engineered products catering to different industries, our platform provides a
                            one-stop solution for efficient sourcing.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/quality control.svg') }}" alt="">
                        <h6>Stringent Quality Control</h6>
                        <p>
                            Our rigorous quality control measures ensure that customers receive durable, reliable, and compliant
                            products.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/tailoredsolution.svg') }}" alt="">
                        <h6>Tailored Solutions</h6>
                        <p>Stand out with our customised steel solutions that empower customers to personalise size, thickness, and
                            coatings to meet specific project demands.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/customer support.svg') }}" alt="">
                        <h6>Responsive Customer Support</h6>
                        <p>From product details to order updates, we ensure timely assistance, addressing your inquiries promptly
                            and effectively.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/intrigity operation.svg') }}" alt="">
                        <h6>Integrity In Operations</h6>
                        <p>We ensure transparent and ethical practices throughout our operations, where customers experience a
                            trustworthy and honest engagement.</p>
                    </div>
                </div>

            </div>





            <div class="row owl-carousel owl-theme carousel1">
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/costeffcient.svg') }}" alt="" >
                        <h6>Cost-Efficient Solutions</h6>
                        <p>The company excels in providing cost-efficient solutions for businesses looking to optimise their budget without compromising on quality.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/extensive product.svg') }}" alt="" >
                        <h6>Extensive Product Range</h6>
                        <p>
                            A wide range of steel and engineered products catering to different industries, our platform provides a one-stop solution for efficient sourcing.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/quality control.svg') }}" alt="" >
                        <h6>Stringent Quality Control</h6>
                        <p>
                            Our rigorous quality control measures ensure that customers receive durable, reliable, and compliant products.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/tailoredsolution.svg') }}" alt="" >
                        <h6>Tailored Solutions</h6>
                        <p>Stand out with our customised steel solutions that empower customers to personalise size, thickness, and coatings to meet specific project demands.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/customer support.svg') }}" alt="" >
                        <h6>Responsive Customer Support</h6>
                        <p>From product details to order updates, we ensure timely assistance, addressing your inquiries promptly and effectively.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-2 mb-3 reputationonlyfor767">
                    <div class="border reputationCard">
                        <img src="{{ url('frontend/images/new-icons/intrigity operation.svg') }}" alt="" >
                        <h6>Integrity In Operations</h6>
                        <p>We ensure transparent and ethical practices throughout our operations, where customers experience a trustworthy and honest engagement.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="owl-counter">00/00</div> -->
        </div>
    </section>
    <!-- reputation -->






    <!-- get to know us -->
    <section class="missionValue sectionDeviderforDesktopBottomPadding">
        <div class="container">

            <h1 class="missionandvaluesfordestop">Our Mission and Values</h1>
            <h1 class="missionandvaluesformobile">Our Mission & Values</h1>
            <div class="row">

                <div class="col-lg-5 col-md-6 col-12 missionValueimg" data-aos="fade-up">
                    <img src="{{ url('frontend/images/Rectangle 4637.png') }}" alt="" class="img-fluid aboutusdesktopimage">
                    <img src="{{ url('frontend/images/aboutustabletimage.jpg') }}" alt="" class="img-fluid aboutustabletimage">
                </div>

                <div class="col-lg-7 col-md-6 missionValueInfo">

                    <div class="row">
                        <div class="col-lg-6 col-12 missionValueP1" data-aos="fade-up">
                            <h2>Our Mission</h2>
                            <p class="">To deliver high-quality products and services to consistently achieve total customer satisfaction.</p>
                        </div>
                        <div class="col-lg-6  col-12 missionValueP1" data-aos="fade-up">
                            <h2>Our Vision</h2>
                            <p class="">To be the leading global one-stop provider of cost-effective solutions for our customers.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6  col-12 missionValueP1" data-aos="fade-up">
                            <h2>Our Core Values</h2>
                            <p class="">Integrity, Quality, Trust, Respect,
                                Customer-Centric Excellence</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- get to know us -->


@endsection

