<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Steels Pte Ltd</title>
    <meta name="author" content="Mazharul Islam">
    <link rel="icon" href="{{ asset('frontend/images/fav.png') }}" type="image/x-icon">
    <link href="https://fonts.cdnfonts.com/css/tt-hoves-pro-trial" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/floating-wpp.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @stack('styles')

</head>
<body>




    <!-- header -->
    <header class="headerfordesktop">
        <nav class="navbar bg-white navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container container-custom desktopPadding">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend/images/latestlogo.svg') }}" alt="" class="img-fluid">
                </a>
    
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav justify-content-center flex-grow-1 navpaddingEnd" id="menu">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('website.about') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown" id="featureDropdown">
                            <a style="cursor: auto;" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Products <i class="ps-3 fa-solid fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu2 shadow" id="featureMenu">
                                <li><a class="dropdown-item customnavlink" href="{{ route('website.allProducts') }}">All Products</a></li>
                                <?php
                                $categories = App\Models\Category::query()->get();
                                ?>
                                @foreach($categories as $category)
                                    <li id="structuralDropdown" class="dropdown-item dropdown mt-1 test">
                                        <a id="structuralLink" class="dropdown-item customnavlink" href="{{ url('/category/'.$category->id) }}" role="button" aria-haspopup="true" aria-expanded="false">{{ $category->name }} <i class="fa-solid fa-caret-right"></i>
                                        </a>
                                        <ul class="dropdown-menu shadow">
                                            @foreach($category->products as $product)
                                            <li><a class="dropdown-item customnavlink test2" href="{{ url('/product/'.$product->id) }}">{{ $product->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                                    <li><a class="dropdown-item customnavlink" href="{{ route('engineeringProduts') }}">Engineering Produts</a></li>
                                        
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('website.contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
    
                <div class="d-flex lastdesktopdevice">
                    <form class="d-flex search-form" role="search" action="{{ route('website.search') }}">
                        <input class="form-control form-control2  me-2" type="search" name="q" placeholder="Search Product" aria-label="Search">
                        <button class="btn btn1" type="submit">
                            <img src="{{ asset('frontend/images/new-icons/white search icon.svg') }}" alt="">
                        </button>
    
                    </form>
                </div>
            </div>
        </nav>
    </header>
    
    <header class="headerformobile bg-white">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <a class="mobile-logo" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/images/tabsteelnewlogo (1).png')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 text-end">
                    <button class="search-toggler me-4" type="button" aria-label="Toggle search">
                        <img style="width: 30px;" src="{{ asset('frontend/images/new-icons/search-alt.svg')}}" alt="">
                    </button>
                    <button class="mobile-menu-toggler pe-3" type="button" aria-label="Toggle navigation">
                        <img style="width: 35px;" src="{{ asset('frontend/images/new-icons/hamburger.svg')}}" alt="">
                    </button>
                </div>
            </div>
            <div class="row searchContainerWrapper">
                <div class="col-12">
                    <div class="search-container">
                            <form class="d-flex search-form" role="search" action="{{ route('website.search') }}">
                                <div class="input-wrapper d-flex align-items-center">
                                    <input type="text" class="search-input border-0" name="q" placeholder="Search Products">
                                </div>
                                <button class="search-button btn visually-hidden" type="submit">
                                    <img style="width: 30px;" src="{{ asset('frontend/images/new-icons/white search icon.svg')}}" alt="">
                                </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="offcanvas-menu">
        <div class="offcanvas-menu-content">
            <button class="close-offcanvas" type="button" aria-label="Close">
                <img src="{{ asset('frontend/images/crossiconfornavigation.svg')}}" alt="">
            </button>
    
            <ul class="mobile-menu-nav">
                <li class="mobile-menu-item">
                    <a class="mobile-menu-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="mobile-menu-item">
                    <a class="mobile-menu-link" href="{{ route('website.about') }}">About Us</a>
                </li>
    
                <li class="mobile-menu-item mobile-menu-dropdown">
                    <a class="mobile-menu-link" href="#">Products <i class="mobile-menu-caret"></i>
                        <span class="dropdown-icon">&#x25BC;</span>
                    </a>
                    <ul class="mobile-menu-submenu">
                        <li class="mobile-menu-item">
                            <a class="mobile-menu-link" href="{{ route('website.allProducts') }}">All Products</a>
                                <?php
                                    $categories = App\Models\Category::query()->get();
                                ?>
                        </li>
    
    
                        @foreach($categories as $category)
                        <li class="mobile-menu-item mobile-menu-dropdown">
                            <a class="mobile-menu-link" href="{{ url('/category/'.$category->id) }}">{{ $category->name }} <span class="dropdown-icon text-white">&#x25BC;</span></a>
                            

                            <ul class="mobile-menu-submenu">
                                @foreach($category->products as $product)
                                    <li class="mobile-menu-item"><a class="mobile-menu-link" href="{{ url('/product/'.$product->id) }}">{{ $product->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
    
                        
                        <li class="mobile-menu-item">
                            <a class="mobile-menu-link" href="{{ route('engineeringProduts') }}">Engineering Products</a>
                        </li>
                    </ul>
                </li>
    
                <li class="mobile-menu-item">
                    <a class="mobile-menu-link" href="{{ route('website.contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- header -->



    @yield('content')



    
    <!-- footer -->
    <footer>
        <div class="container container-custom">
    
            <div class="row footerImage">
                <div class="col-4">
                    <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/tabsteelnewlogo (1).png')}}" alt=""></a>
                </div>
                <div class="col-8">
    
                </div>
            </div>
    
    
            <div class="row ">
                <div class="col-lg-4 col-12">
                    <h3>About Us</h3>
    
                    <p class="hiddenfromTablet fotternewClass">
                        We specialise in delivering cost-effective, high quality steels and    engineering a
                        range of products, including structural steels, pipes, valves, bolts, gaskets, flanges, and fittings. We
                        cater to the needs of the oil and gas, marine, offshore and onshore, petrochemical, and renewable
                        industries, ensuring quality solutions that meet industry demands.
                    </p>
    
                    <p class="hiddeninDesktop">
                        We specialise in delivering cost-effective, high quality steels and    engineering a
                        range of products,
                        <br>
                        including structural steels, pipes, valves, bolts, gaskets, flanges, and fittings.
                        We cater to the needs
                        <br> of the oil and gas, marine, offshore and onshore, petrochemical, and renewable
                        industries, ensuring <br> quality solutions that meet industry demands.
                    </p>
    
                </div>
    
    
                <div class="col-lg-8 col-12 ">
                    <div class="row">
                        <div class="col-md-4 col-12 footerofficepadding customwidthfofooter fotternewClass5" >
                            <h3>Office</h3>
    
                            <p class="hiddenfromTablet fotternewClass2">61 Kaki Bukit Avenue 1 #05-34 <br>
                                Shun Li Industrial Park, <br>
                                Singapore, 417943
                            </p>
    
    
    
    
                            <div class="hiddeninDesktop">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="50%" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=Shun Li Industrial Park, 61 Kaki Bukit Ave 1, Singapore 417943&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
    
    
                        </div>
    
    
    
    
                        <div class="col-md-4 col-12 footerContactcustomPadding customwidthfofooter customwidthfofooter2 emailPhoneforDesktop footernewclass4">
                            <h3>Contact</h3>
                            <?php
                            $contacts = App\Models\Contact::query()->first();
                            ?>
                            <ul class="list-unstyled">
                                <li class="text-white footerNewMargin">Email :<a href="mailto:sales@tabsteels.com"> {{ $contacts->email }}</a></li>
                                <li class="text-white">Phone : <a href="tel:+6598162261">{{ $contacts->phone }}</a></li>
                                <li class="text-white">Address : <a href="tel:+6598162261">{{ $contacts->address }}</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-12 footerContactcustomPadding customwidthfofooter customwidthfofooter2 emailPhonefor767 footernewclass5">
                            <h3>Contact</h3>
                            <ul class="list-unstyled">
                                <li class="text-white footerNewMargin"> <img src="{{ asset('frontend/images/icon/envelope-alt.svg') }}" alt=""> :<a href="mailto:sales@tabsteels.com"> sales@tabsteels.com</a></li>
                                <li class="text-white"> <img src="{{ asset('frontend/images/icon/phone (2).svg')}}" alt=""> : <a href="tel:+6598162261">(+65) 98162261</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-12 footerContactcustomPadding2 customwidthfofooter fotternewClass3">
                            <h3>Link</h3>
                            <ul class="list-unstyled">
                                <li class="footerNewMargin"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('website.about') }}">About Us</a></li>
                                <li><a href="{{ route('website.allProducts') }}">Products</a></li>
                                <li><a href="{{ route('website.contact') }}">Contact Us</a></li>
                                <li><a href="{{ url('/sitemap') }}">Sitemap</a></li>
                            </ul>
                        </div>
    
                    </div>
                </div>
    
            </div>
    
            <div class="row">
    
    
                <div class="col-12">
                    <p class="hiddeninDesktop pt-3">61 Kaki Bukit Avenue 1 #05-34 <br>
                        Shun Li Industrial Park,
                        Singapore, 417943
                    </p>
                </div>
    
                <div class="col-lg-4 col-12 footerCustomp1">
                    <p> Designed by <a href="https://www.behance.net/christinelim26">Christine Lim</a> – <br> UIUX Designer for
                        Web & App Development</p>
                </div>
    
                <div class="col-lg-6 col-12 footerCustomp2">
                    <p class="m-0 copyRightforDesktop">Copyright © 2024 TAB STEELS PTE LTD. All Rights Reserved</p>
    
                    <p class="m-0 copyRightfor500">Copyright © 2024 TAB STEELS PTE LTD. <br> All Rights Reserved</p>
                </div>
    
    
    
    
            </div>
    
        </div>
    </footer>
    <!-- footer -->




    
    <!-- Floating WhatsApp Button -->
    <div class="floating-wpp"></div>



    
    <!-- Script Bundle -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="{{ asset('frontend/js/floating-wpp.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/js/pagination.js') }}"></script>

    </body>
</html>
