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
            <div class="row gallery-container">

                @foreach ($galleries as $gallery)
                <div class="col-md-3 mb-4">
                    <a
                        href="/storage/{{$gallery->image}}"
                        data-lightbox="{{$gallery->id}}"
                        data-title="{{$gallery->title}}"
                        class="box">
                        <img  src="/storage/{{$gallery->image}}" alt="{{$gallery->title}}">
                    </a>
                </div>
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
                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-white"></i><span>To get customizable, functional and  smart website.</span></li>
                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-white"></i><span>Search engine friendly designs
                            </span></li>
                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-white"></i><span>Industry specific websites to match the committed standards.
                            </span></li>
                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-white"></i><span>Easy navigation and user friendly design.
                            </span></li>
                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-white"></i><span>Create a great user experience.
                            </span></li>
                        </ul>
                    <a href="{{route('page.contact')}}" class="btn btn-primary btn-block ctbtn-s">Contact Us <i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
          </div>
        </div>
    </section>

    @include('layouts.testimonials')

    @include('layouts.clients-logo')

    <section class="space-pt overflow-hidden pb-4">
        <div class="container-fluid p-0">
          <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 col-md-6">
              <iframe class="img-grayscale" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14393.505052027098!2d85.14436766785663!3d25.592410425953062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed586626bd349d%3A0xc3377f3ee9c4b619!2sPatna%20Junction%20Karbigahiya%20side!5e0!3m2!1sen!2sin!4v1585903627596!5m2!1sen!2sin" style="border:0; height:100%;" allowfullscreen=""></iframe>
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
