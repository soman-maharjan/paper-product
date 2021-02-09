@extends('layouts.app')
@section('content')
@if(Session::has('alert'))
<div class="alert alert-success" role="alert" style="text-align: center">
    {{Session::get('alert')}}
</div>
@endif
    <section class="blog-banner-area heading-height" id="contact">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Contact Us</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section style="margin: 40px 0;">
        <div class="container-fluid">
            <div class="row d-flex mb-5 contact-info" style="padding: 10px;text-align: center;">
                <div class="w-100"></div>

                <div class="col-md-4" style="border-left: 2px solid blue">
                    <p><span>Phone:</span> <a href="tel://1234567920">+977 9841551187</a></p>
                </div>
                <div class="col-md-4" style="border-left: 2px solid blue">
                    <p><span>Address: </span> <br> Bhaktapur Industrial Area, Byasi-15, Bhaktapur, NEPAL</p>
                </div>
                <div class="col-md-4" style="border-left: 2px solid blue">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com" style="line-break: anywhere">nepalihandmadepaperproducts@gmail.com</a></p>
                </div>
            </div>
            <h2 style="text-align: center">OR</h2>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <form action="/contact-store" class="form-contact contact_form" method="post" id="contactForm">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-7 ">
                                <div class="form-group">
                                    <input class="form-control contact-form" name="name" id="name" type="text"
                                        placeholder="Enter your name" value="{{old('name')}}">
                                    @error('name')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control contact-form" name="number" id="number" type="text"
                                        placeholder="+977 9841551187" value="{{old('number')}}">
                                    @error('number')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control contact-form" name="email" id="email" type="email"
                                        placeholder="Enter email address" value="{{old('email')}}">
                                        @error('email')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control contact-form" name="subject" id="subject" type="text"
                                        placeholder="Enter Subject" value="{{old('subject')}}">
                                        @error('subject')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <textarea class="form-control different-control w-100 form-description" name="message"
                                id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                                @error('message')
                                        <p style="color: red">{{ $message }}</p>
                                @enderror
                        </div>
                        <div class="form-group text-center text-md-right mt-3 d-flex justify-content-center">
                            <button type="submit" class="button button--active button-contactForm">Send Message</button>
                        </div>
                </div>

                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
