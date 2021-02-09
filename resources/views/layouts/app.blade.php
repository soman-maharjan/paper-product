<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nepali Handmade Paper Products</title>
	<link rel="icon" href="{{asset('img/logo.png')}}" type="image/png">
  <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/nice-select/nice-select.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}"> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/> --}}

 

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"/>
  @livewireStyles
</head>
<body id="skrollr-body">

@include('layouts.navbar')
<div style="height: 80px; width:100%"></div>
@yield('content')

<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title large_title">Our Mission</h4>
                        <p>
                            Promoting handicraft business for socially, economically deprived women in Nepal.
                        </p>
                    
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Quick Links</h4>
                        <ul class="list">
                            <li><a href="/">Home</a></li>
                            <li><a href="/all-products">Product</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Head Office
                            </p>
                            <p>Bhaktapur Industrial Area, Byasi-15, Bhaktapur</p>

                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Phone Number
                            </p>
                            <p>
                                +977 9841551187 <br>
                                
                            </p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p style="line-break: anywhere">
                                nepalihandmadepaperproducts@gmail.com <br>
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </div>
        </div>
    </div>
{{-- <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="{{asset('vendors/skrollr.min.js')}}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script> --}}
<script src="{{asset('vendors/jquery.ajaxchimp.min.js')}}"></script>
{{-- <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script> --}}
<script src="{{asset('vendors/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('vendors/mail-script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> --}}
<script src="{{asset('js/main.js')}}"></script>


<script>
    //  if($('.owl-carousel').length > 0){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:30,
      navigation:true,
      navigationText: ["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],
    //   navText: ["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],
      pagination: false,
      responsive:{
        0:{
          items:1,
        },
        600:{
          items: 3
        },
        900:{
          items:4
        },
        1130:{
          items:4
        }
      }
    })
//   }
</script>
</footer>
@livewireScripts
</body>
</html>