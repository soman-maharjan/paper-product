@extends('layouts.app')
@section('content')
    <section class="blog-banner-area heading-height" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>About Us</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_area single-post-area py-80px section-margin--small">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-6 col-md-6">
                            <div class="feature-img">
                                <img class="img-about-us" src="img/aboutus.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 blog_details">
                            <h2>Nepali Handmade Paper Products</h2>
                            <p class="excert">
                                Nepali Handmade Paper making is 2000 years old technique and one of the ancient traditional
                                crafts
                                from the Himalayan Kingdom of Nepal also known as the country of Mt. Everest. The Daphne
                                Bush (Lokta)
                                used in its production is found at the altitude of between 6500 ft to 9500 ft. Daphne is
                                harvested
                                every two to three years. By cutting its young stem a foot from the ground the trees kept
                                alive thus to
                                protect ecological balance.
                            </p>
                            <p>
                                Nepali Handmade Paper Products has been dedicated for more than 15 years to support low
                                income and economically
                                deprived people of Nepal who produce beautiful products like these. The task of Nepali Paper
                                Works is not so tough
                                but require patience. It takes a long time to prepare even a small product. Since, Nepali
                                Women lack higher education
                                this field has helped them to adjust in becoming usual to work in Paper Products. Selling
                                these products will go to support
                                the rehabilitation of the disadvantaged women and children as well as their families.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 20px; margin-top:60px">
                <div class="col-lg-6 col-md-12 col-sm-12" style="border-left: 2px solid blue">
                    <h2>Vision</h2>
                    <p>"Create more employees for women in Nepal"</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12" style="border-left: 2px solid blue">
                    <h2>Mission</h2>
                    <p>"Promoting handicraft business for socially, economically deprived women in Nepal"</p>
                </div>
            </div>
    </section>
@endsection
