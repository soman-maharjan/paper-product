@extends('layouts.app')
@section('content')
        <div class="container" style="margin-top: 60px;margin-bottom:60px">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @for ($i = 0; $i < count(unserialize($product->filename)); $i++)
								@if($i == 0) 
                                <div class="carousel-item active">
                                    <img class="d-block w-100 carousel-image" src="/uploads/{{unserialize($product->filename)[0]}}">
                                </div>
								@else
                                    <div class="carousel-item">
                                        <img class="d-block w-100 carousel-image" src="/uploads/{{unserialize($product->filename)[$i]}}">
                                    </div>
								@endif
     						@endfor
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $product->title }}</h3>
                        {{-- <h2>Price : ${{ $product->price }}</h2> --}}
                        <br><br>
                        <h5>Description</h5>
                        <p>{{ $product->description }}</p> <br>
                        <h5>Category : {{ $product->category->title }}</h5>
                        <h5>Color : {{ $product->color }}</h5>
                        <br>
                        <hr>
                        {{-- <h5>Dimensions : {{ $product->dimensions }}</h5>
                        <h5>Weight : {{ $product->weight }}</h5> --}}
                        {{-- <hr> --}}
                    </div>
                </div>
            </div>
        </div>
    <br>

@endsection
