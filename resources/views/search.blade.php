@extends('layouts.app')
@section('content')
<div>
    <section class="section-margin--small mb-5" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 product-heading">Products relating to '{{$search}}'</div>
                <div class="col-xl-3 col-lg-4 col-md-5">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div>
                                <form action="/search" method="POST" role="search">
                                    {{ csrf_field() }}
                                    <div class="input-group" style="margin-top: 10px">
                                        <input type="text" class="form-control search-bar" name="search"
                                            placeholder="Search products" style="width: 50vw !important"> <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary button-search">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @if (count($products) == 0)
                            <div style="display: block !important; width:100%; height:300px">
                                <h2 style="text-align: center">Product not found!</h2>
                            </div>
                            @else
                                @foreach ($products as $product)
                                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                    <div class="card text-center card-product">
                                        <div class="card-product__img">
                                            <img class="card-img" src="/uploads/{{ unserialize($product->filename)[0] }}"
                                                alt="">
                                            <ul class="card-product__imgOverlay">
                                                <li><a href="/single-product/{{ $product->id }}"><button><i
                                                                class="ti-search"></i></button></a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <p>{{ $product->category->title }}</p>
                                            <h4 class="card-product__title"><a
                                                    href="/single-product/{{ $product->id }}">{{ $product->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection