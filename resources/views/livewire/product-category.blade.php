<div>
    <section class="section-margin--small mb-5" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 product-heading">PRODUCTS</div>
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Browse Categories</div>
                        <ul class="main-categories">
                            <li class="common-filter">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li class="filter-list"><input class="pixel-radio" wire:model="category"
                                                    name="category" type="radio" value="{{ $category->id }}"
                                                    id="{{ $category->title }}" /> <label
                                                    for="{{ $category->title }}">{{ $category->title }}</label></li>
                                        @endforeach
                                    </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div>
                            {{-- <div class="input-group filter-bar-search"> --}}
                                <form action="/search" method="POST" role="search">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                        <input type="text" class="form-control search-bar" name="search"
                                            placeholder="Search products"> <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary button-search">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @if (count($categoryProducts) == 0)
                                @foreach ($products as $product)
                                <div class="col-6 col-sm-4 col-md-6 col-lg-4 col-xl-3">
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
                            @else
                                @foreach ($categoryProducts as $item)
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 col-xl-3">
                                        <div class="card text-center card-product">
                                            <div class="card-product__img">
                                                <img class="card-img"
                                                    src="/uploads/{{ unserialize($item->filename)[0] }}" alt="">
                                                <ul class="card-product__imgOverlay">
                                                    <li><a href="/single-product/{{ $item->id }}"><button><i
                                                                    class="ti-search"></i></button></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <p>{{ $item->category->title }}</p>
                                                <h4 class="card-product__title"><a
                                                        href="/single-product/{{ $item->id }}">{{ $item->title }}</a>
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
