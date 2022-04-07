@extends('layouts.main')

@section('title') Home | BloomNBuds @endsection

@section('body')

    {{-- Slider --}}
    @include('layouts.slider')


    <div class="shipping-area section-padding-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shipping">
                        <div class="shipping-icon">
                            <img src="/assets/v1/images/shipping-icon/Free-Delivery.png" alt="">
                        </div>
                        <div class="shipping-content">
                            <h5 class="title">24 x 7 Delivery </h5>
                            <p>24 x 7 Delivery </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shipping">
                        <div class="shipping-icon">
                            <img src="/assets/v1/images/shipping-icon/Online-Order.png" alt="">
                        </div>
                        <div class="shipping-content">
                            <h5 class="title">Book Now</h5>
                            <p>Don’t worry you can Book Online by our Site</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shipping">
                        <div class="shipping-icon">
                            <img src="/assets/v1/images/shipping-icon/Freshness.png" alt="">
                        </div>
                        <div class="shipping-content">
                            <h5 class="title">Freshness</h5>
                            <p>You have freshness flowers every single order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-shipping">
                        <div class="shipping-icon">
                            <img src="/assets/v1/images/shipping-icon/Made-By-Artists.png" alt="">
                        </div>
                        <div class="shipping-content">
                            <h5 class="title">Made by Artists</h5>
                            <p>World for all made by artists orders over now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- Featured Services --}}
    <div class="experts-area section-padding-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9 col-sm-11">
                    <div class="section-title text-center">
                        <h2 class="title">Categories</h2>
                        <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                            a smile for you.</p>
                    </div>
                </div>
            </div>
            <div class="expert-wrapper">
                <div class="row">

                    @foreach ($categories as $category)
                        <div class="col-lg-2 col-sm-6">
                            <a href="{{route('category.page' , $category->slug)}}" class="single-expert text-center">
                                <div class="expert-image">
                                    <img src="storage/{{$category->image}}" alt="{{$category->title}}">
                                </div>
                                <div class="expert-content">
                                    <h4 class="name">{{$category->title}}</h4>
                                    {{--                                    <p>Category</p>--}}
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <!--About Start-->
    <div class="about-area section-padding-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="/assets/images/events.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="title">For almost every emotion, celebration and occasion</h2>
                        <p>With our aim to ‘wow’ our customers and delivering smiles, we have added a little something
                            that goes into making every 'delivery' special..... </p>
                        <ul>
                            <li> Hand picked just for you.</li>
                            <li> Hand picked just for you.</li>
                            <li> Hand picked just for.</li>
                        </ul>
                        <div class="about-btn">
                            <a href="{{route('page.about')}}" class="btn btn-primary btn-round">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About End-->
    <!--New Product Start-->
    <div class="features-product-area section-padding-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9 col-sm-11">
                    <div class="section-title text-center">
                        <h2 class="title">Featured Items</h2>
                        <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                            a smile for you.</p>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="product-tab-menu">
                    <ul class="nav justify-content-center" role="tablist">
                        @for($i=0; $i <  3; $i++)
                            <li><a class=" @if($i == 0) active @endif" data-bs-toggle="tab"
                                   href="#{{$categories[$i]->slug}}"
                                   role="tab">{{$categories[$i]->title}}</a></li>
                        @endfor
                    </ul>
                </div>


                <div class="tab-content product-items-tab">
                    @for($i=0; $i <  3; $i++)
                        <div class="tab-pane fade show  @if($i == 0) active @endif" id="{{$categories[$i]->slug}}"
                             role="tabpanel">
                            <div class="swiper-container product-active">
                                <div class="swiper-wrapper">
                                    @foreach($categories[$i]->categoryList as $cat)
                                        <div class="swiper-slide">
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        <a href="/storage/{{$cat->image}}" data-lightbox="{{$cat->id}}" data-title="{{$cat->title}}">
                                                            <img src="/storage/{{$cat->image}}" alt="{{$cat->title}}">
                                                        </a>

                                                    </div>
                                                    <div class="product-content text-center">
                                                        <h4 class="product-name"><a href="#">{{$cat->title}}</a></h4>
                                                    </div>
                                                </div>
{{--                                                <div class="single-product">--}}
{{--                                                    <div class="product-image">--}}
{{--                                                        <a href="#">--}}
{{--                                                            <img src="/storage/{{$cat->image}}" alt="{{$cat->title}}">--}}
{{--                                                        </a>--}}


{{--                                                    </div>--}}
{{--                                                    <div class="product-content text-center">--}}
{{--                                                        <h4 class="product-name"><a href="#">{{$cat->title}}</a>--}}
{{--                                                        </h4>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    @include('layouts.testimonials' , [
        'testimonials' => $testimonials
    ])

    @include('layouts.clients-logo')

    <div class="newsletter-area section-padding-5">
        <div class="container">
            <div class="newsletter-form">
                <div class="section-title text-center">
                    <h2 class="title">Join The Colorful Bunch!</h2>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Your email address">
                    <button>Subscribe</button>
                    <i class="icon-mail"></i>
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden pb-4">
        <div class="container-fluid p-0">
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.9890732362437!2d85.83720121471382!3d20.259287918975897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a74815beca63%3A0x152fa1a3a149cb47!2s28%2C%20Gautam%20Nagar%20St%2C%20Gautam%20Nagar%2C%20Bhubaneswar%2C%20Odisha%20751014!5e0!3m2!1sen!2sin!4v1635069464948!5m2!1sen!2sin"
                        style="border:0; height:100%;" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="p-6 bg-light h-100">
                        <h3>Complete the form below. We will respond as soon as possible.</h3>

                        @if ($succ = session('success'))


                            <div style="position: fixed;right: 8px;z-index: 99999;top: 60px;width: 260px;"
                                 class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ $succ }}</strong>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif


                        @if ($err = session('cterrs'))

                            <div style="position: fixed;right: 8px;z-index: 99999;top: 60px;width: 260px;"
                                 class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ $err }}</strong>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif

                        <form
                            class="mt-4 row form-white"
                            id="ctformFrin"
                            method="POST"
                            action="{{route('send.contactus')}}"
                        >
                            @csrf
                            <div class="form-group mb-3 col-lg-6">
                                <input type="text" class="form-control" id="ctformFrinfirstname"
                                       value="{{old('firstname')}}" name="firstname"
                                       placeholder="First Name">
                                @error('firstname')
                                <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <input type="text" class="form-control"
                                       value="{{old('lastname')}}" id="ctformFrinlastname" name="lastname"
                                       placeholder="Last Name">
                                @error('lastname')
                                <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-12">
                                <input value="{{old('email')}}" type="text" class="form-control" id="ctformFrinemail"
                                       name="email"
                                       placeholder="Email Address">
                                @error('email')
                                <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-4 col-12">
                        <textarea class="form-control" id="msg" name="msg"
                                  placeholder="Enquiry Description" rows="5">{{old('msg')}}</textarea>
                                @error('msg')
                                <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>
                            <div id="submMsg" class="col-12"></div>
                            <div class="form-group mb-0 col-12">
                                <button type="submit" class="btn btn-primary btn-block ctbtn-s">Get in Touch<i
                                        class="fas fa-arrow-right ps-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('css')

@endpush

