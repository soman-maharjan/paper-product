@extends('layouts.app')
@section('content')
	<div class="product_image_area" style="padding-top: 30px">
		<div class="container">
			<h5 style="margin-bottom: 20px"><a href="{{ url()->previous() }}">Home </a> \ {{$product->title}}</h5>
			<div class="row s_product_inner">
				<div class="col-lg-6 ">
					{{-- <div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="/uploads/{{unserialize($product->filename)[0]}}" alt="">
						</div>
					</div> --}}

					<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
						  @for ($i = 0; $i < count(unserialize($product->filename)); $i++)
								@if($i == 0) 
									<li data-target="#demo" data-slide-to="0" class="active"></li>
								@else
									<li data-target="#demo" data-slide-to="{{$i}}"></li>
								@endif
     						@endfor
						</ul>
					  
						<!-- The slideshow -->
						<div class="carousel-inner">
							@for ($i = 0; $i < count(unserialize($product->filename)); $i++)
								@if($i == 0) 
									<div class="carousel-item active">
										<img src="/uploads/{{unserialize($product->filename)[0]}}">
									</div>
								@else
									<div class="carousel-item">
										<img src="/uploads/{{unserialize($product->filename)[$i]}}">
									</div>
								@endif
     						@endfor
						</div>
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
						  <span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
						  <span class="carousel-control-next-icon"></span>
						</a>
					  
					  </div>


				</div>
				<div class="col-lg-4 offset-lg-2">
					<div class="s_product_text" style="text-align: center">
						<h3 ><span style="border-bottom: 2px solid #384aeb"> {{$product->title}}</span></h3>
						{{-- <h2>${{$product->price}}</h2> <br> --}}
						<ul class="list">
							<li><span>Category &nbsp;&nbsp;&nbsp;&nbsp;</span> : {{$product->category->title}}</li>
							<li><span>Availability &nbsp;&nbsp;&nbsp;&nbsp;</span> : In Stock</li>
							<li><span>Color &nbsp;&nbsp;&nbsp;&nbsp;</span> : {{$product->color}}</li>
						</ul>
						<br> 
						<h4>About this product</h4>
						<p style="line-break: auto; margin-top:0px">{!! $product->description !!}</p> <br>
						<div class="product_count">
              {{-- <label for="qty">Quantity:</label>
              <input type="number" name="quantity" value="1"> <br> <br> --}}
							<a class="button primary-btn" href="/contact">Order Now</a>               
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" style="margin: 0px !important">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>{!! $product->description !!}</p>
				</div>
			</div>
		</div>
	</section>
@endsection