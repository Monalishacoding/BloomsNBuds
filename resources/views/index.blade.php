@extends('layouts.main')

@section('title') Home | BloomNBuds @endsection

@section('body')

    {{-- Slider --}}
    @include('layouts.slider')



    {{-- Featured Services --}}
    <section id="ftServices" class="df-sec-top">
        <div class="container">
            <div class="boxes-container">

                @foreach ($categories as $category)
                <div class="box">
                    <a href="{{route('category.page' , $category->slug)}}" class="img-box">
                        <img src="storage/{{$category->image}}" alt="{{$category->title}}">
                    </a>
                     <a class="my-3" href="#">{{$category->title}}</a>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section id="gallery" class="df-sec">
        <div class="container">
            <div class="title-box text-center mb-5">
                <h2 class="heading-title">Some of our Pictures</h4>
                <P></P>
            </div>
            <div class="masonry">

                @foreach ($galleries as $gallery)
                <div class="mItem">
                  <a
                  href="/storage/{{$gallery->image}}"
                  data-lightbox="{{$gallery->id}}"
                  data-title="{{$gallery->title}}"
                  class="box">
                  <img  src="/storage/{{$gallery->image}}" alt="{{$gallery->title}}">
                  </a>
                </div>
                {{-- <div class="col-md-3 mb-4 ">
                    <a
                        href="/storage/{{$gallery->image}}"
                        data-lightbox="{{$gallery->id}}"
                        data-title="{{$gallery->title}}"
                        class="box">
                        <img  src="/storage/{{$gallery->image}}" alt="{{$gallery->title}}">
                    </a>
                </div> --}}
                @endforeach
            </div>
        </div>
    </section>

    <section id="whyUs" class="df-sec">
        <div class="container-fluid p-0">
          <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 col-md-6">
                <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/tg00YEETFzg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="wrapper ">
                    <h2>Why Us</h3>
                        <ul class="list list-unstyled mb-4 mb-md-5">
                            <li class="d-flex">Population say that we have gotten 30 years older but our creative bells  are growing younger with each passing day. Inspired by the current trends, we keep coming up with new floral arrangements & gifts for almost every emotion, celebration and occasion. With our aim to ‘wow’ our customers and delivering smiles, we have added a little something that goes into making every 'delivery' special. We understand the importance of delivering the gifts on time or before time therefore we deliver flowers, flower baskets and other items at the doorstep of your loved ones with lightning speed in the shortest possible time - as fast as 1 Hours of ordering. This helps us to deliver fresh flowers every time you order a bouquet. We are committed to exceed your expectations whenever you order for a simple bouquet of flowers or an exquisite flower arrangement of exotic flowers. We understand the surprise element and emotional connection to the order and hence strive hard to deliver it with love and care.</li>
                           
                        </ul>
                    <a href="{{route('page.contact')}}" class="btn btn-primary btn-block ctbtn-s">Contact Us <i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
          </div>
        </div>
    </section>

    @include('layouts.testimonials' , [
        'testimonials' => $testimonials
    ])

    @include('layouts.clients-logo')

    <section class="space-pt overflow-hidden pb-4">
        <div class="container-fluid p-0">
          <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.9890732362437!2d85.83720121471382!3d20.259287918975897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a74815beca63%3A0x152fa1a3a149cb47!2s28%2C%20Gautam%20Nagar%20St%2C%20Gautam%20Nagar%2C%20Bhubaneswar%2C%20Odisha%20751014!5e0!3m2!1sen!2sin!4v1635069464948!5m2!1sen!2sin" style="border:0; height:100%;" allowfullscreen=""></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="p-6 bg-light h-100">
                <h3>Complete the form below. We will respond as soon as possible.</h3>
                 <form class="mt-4 row form-white" id="ctformFrin" method="POST">
                  <input type="hidden" name="_token" value="y57WsSChO5YsTMatFN6jsjDicNiyr3eGj8Yfd5eR">              <div class="form-group mb-3 col-lg-6">
                    <input type="text" class="form-control" id="ctformFrinfirstname" name="firstname" placeholder="First Name">
                  </div>
                  <div class="form-group mb-3 col-lg-6">
                    <input type="text" class="form-control" id="ctformFrinlastname" name="lastname" placeholder="Last Name">
                  </div>
                  <div class="form-group mb-3 col-12">
                    <input type="text" class="form-control" id="ctformFrinemail" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group mb-4 col-12">
                    <textarea class="form-control" id="msg" name="ctformFrinmsg" placeholder="Enquiry Description" rows="5"></textarea>
                  </div>
                  <div id="submMsg" class="col-12"></div>
                  <div class="form-group mb-0 col-12">
                    <button type="submit" class="btn btn-primary btn-block ctbtn-s">Get in Touch<i class="fas fa-arrow-right ps-2"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>

@endsection
