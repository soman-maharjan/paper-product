@extends('layouts.app')
@section('content')
  <main class="site-main">
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/test.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h1>Nepali Handmade Paper Products</h1>
              <p>  We are the manufacturer, wholesaler and the exporter of high quality Nepalese traditional handmade paper and Papercrafts.
                
              </p>
              <a class="button button-hero" href="/all-products">Browse Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Trending <span class="section-intro__style">Product</span></h2>
        </div>
        <div class="row">
          @foreach($products as $product)
          <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
            <a href="/single-product/{{$product->id}}">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="/uploads/{{unserialize($product->filename)[0]}}" alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><a href="/single-product/{{$product->id}}"><i class="ti-search"></i></a></button></li>
                  {{-- <li><button><i class="ti-shopping-cart"></i></button></li> --}}
                  {{-- <li><button><i class="ti-heart"></i></button></li> --}}
                </ul>
              </div>
              <div class="card-body">
                <p>{{$product->category->title}}</p>
                <h4 class="card-product__title"><a href="/single-product/{{$product->id}}">{{$product->title}}</a></h4>
                {{-- <p class="card-product__price">${{$product->price}}</p> --}}
              </div>
            </div>
          </a>
        </div>
          @endforeach
        </div>
      </div>
    </section>
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="offer__content text-center">
              <h3>BULK ORDER NOW!</h3>
              <h5>All Products can be ordered in different shapes, sizes and design.</h5>
              {{-- <h4>Winter Sale</h4> --}}
              {{-- <p>Him she'd let them sixth saw light</p> --}}
              <a class="button button--active mt-3 mt-xl-4" href="/contact">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Latest Item in the market</p>
          <h2>Latest <span class="section-intro__style">Products</span></h2>
        </div>
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">
          @foreach($latestProducts as $latest)
          {{-- <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3"> --}}
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="/uploads/{{unserialize($latest->filename)[0]}}" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><a href="/single-product/{{$latest->id}}"><i class="ti-search"></i></a></button></li>
                {{-- <li><button><i class="ti-shopping-cart"></i></button></li> --}}
                {{-- <li><button><i class="ti-heart"></i></button></li> --}}
              </ul>
            </div>
            <div class="card-body">
              <p>{{$latest->category->title}}</p>
              <h4 class="card-product__title"><a href="/single-product/{{$latest->id}}">{{$latest->title}}</a></h4>
              {{-- <p class="card-product__price">${{$latest->price}}</p> --}}
            </div>
          </div>        
        {{-- </div> --}}
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection