@extends('Frontend.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/contactUs.css') }}">
@endpush

@section('content')





    <!-- hero -->
    <section class="allProductBanner">
        <div class="container">
            <h1 class="mt-5">Contact Us</h1>

            <nav aria-label="breadcrumb" class="breadcrumbDesktop">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>


    <section class="borderBottomFromtablet">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumbMobile">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- hero -->









    <!-- for tablet -->
    <section class="fortablet" data-aos="fade-up">
        <div class="container">
            <div class="row  ">
                <h4 class="displayonlyfromtablet">Contact Details</h4>
                <div class="col-md-6 col-12 displayonlyfromtablet">

                    <div class="phone">
                        <p class="phonelabel">Telephone</p>
                        <p class="phonenumber">{{ $contacts->phone }}</p>
                    </div>

                    <div class="mail">
                        <p class="phonelabel">Email</p>
                        <p class="phonenumber">{{ $contacts->email }}</p>
                    </div>

                </div>

                <div class="col-md-6 col-12 displayonlyfromtablet" data-aos="fade-up">
                    <p class="phonelabel">Our Location</p>
                    <p class="phonenumber"> {{ $contacts->address}}</p>

                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Shun Li Industrial Park, 61 Kaki Bukit Ave 1, Singapore 417943&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                            <a href="https://2yu.co">2yu</a>

                            <br>

                            <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>

                            <a href="https://embedgooglemap.2yu.co/">html embed google map</a>

                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- for tablet -->


    <!-- contact section -->
    <section class="contact sectionDeviderforDesktopTopPadding2 sectionDeviderforDesktopBottomPadding" data-aos="fade-up">
        <div class="container ps-0">

            <div class="row">

                <div class="col-lg-4 col-12 map  displayonyDEsktop">

                    <h1>Contact Details</h1>
                    <h2 class="span1 pb-3">Our Location</h2>
                    <p class="span2"> {{ $contacts->address }}</p>

                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Shun Li Industrial Park, 61 Kaki Bukit Ave 1, Singapore 417943&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                            <a href="https://2yu.co">2yu</a>

                            <br>

                            <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>

                            <a href="https://embedgooglemap.2yu.co/">html embed google map</a>

                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>

                        </div>
                    </div>


                    <p class="span3">Telephone</p>
                    <p class="span5"><a href="tel:+6598162261">{{ $contacts->phone }}</a></p>

                    <p class="span3">Email</p>
                    <p class="span4"><a href="mailto:sales@tabsteels.com">{{ $contacts->email }}</a></p>



                </div>

                <div class="col-lg-8 col-12 contactForm " data-aos="fade-up">
                    <h1>Get In Touch Today</h1>
                    <p class="span2 textfordeskandtab">Your queries are important to us, and our dedicated team will promptly attend to your requests. Thank you for considering us.</p>

                    <p class="span2 textforonlymobileincontact">Your queries are important to us, and our team will promptly attend to your requests. Thank you for considering us.</p>

                    <span>* indicates required field</span>
                    
                    
                
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
        <input name="last_name" type="text" class="form-control border-bottom-only" id="lastName">
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

          <div class="col form-check">
          <input name="subject" class="form-check-input" type="radio" name="subject" id="generalInquiry" value="General Inquiry" checked>
          <label class="form-check-label" for="generalInquiry">
          General Inquiry
          </label>
          </div>

          <div class="col form-check">
          <input class="form-check-input" type="radio" name="subject" id="salesInquiry" value="Sales Inquiry">
          <label class="form-check-label" for="salesInquiry">
          Sales Inquiry
          </label>
          </div>

          <div class="col form-check">
          <input class="form-check-input" type="radio" name="subject" id="customerSupport" value="Customer Support">
          <label class="form-check-label" for="customerSupport">
          Customer Support
          </label>
          </div>

          <div class="col form-check">
          <input class="form-check-input" type="radio" name="subject" id="feedback" value="Feedback">
          <label class="form-check-label" for="feedback">
          Feedback
          </label>
          </div>

        </div>
      </div>
    </div>


    {{-- Message Textarea --}}
    <div class="row mb-5">
      <div class="col-12">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control border-bottom-only" name="massage" id="message" rows="3" placeholder="Enter your message text in this space"></textarea>
      </div>
    </div>


    {{-- CAPTCHA Section --}}
    <div class="row mb-3">
      <div class="col-12">
          <div class="g-recaptcha" data-sitekey="6LeY_wEqAAAAAJdK70pCAp34qlnLxlR2VV9_oM4_"></div>
      </div>
    </div>
    
    

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

