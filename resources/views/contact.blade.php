@extends('layouts.main')
@section('title') Contact Us @endsection
@section('body')
    <!--Page Banner Start-->
    <div class="page-banner" style="background-image: url(/assets/images/abg.png);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">About</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </div>
        </div>
    </div>


    <!--Contact Map Start-->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.9890732362437!2d85.83720121471382!3d20.259287918975897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a74815beca63%3A0x152fa1a3a149cb47!2s28%2C%20Gautam%20Nagar%20St%2C%20Gautam%20Nagar%2C%20Bhubaneswar%2C%20Odisha%20751014!5e0!3m2!1sen!2sin!4v1635069464948!5m2!1sen!2sin"
                style="border:0; height:50vh; width:100vw;" allowfullscreen=""></iframe>
        </div>
    </div>

    <!--Contact Map End-->

    <!--Contact Start-->
    <div class="contact-page section-padding-5">
        <div class="container">
            <div class="contact-info">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title">Main Office</h2>

                        </div>
                    </div>
                </div>

                <div class="contact-info-content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-contact-info text-center">
                                <i class="fa fa-fax"></i>
                                <h4 class="title"> Address </h4>
                                <p>Bhubaneswar, , <br> Odisha </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-contact-info text-center">
                                <i class="fa fa-phone"></i>
                                <h4 class="title"> Phone Number </h4>
                                <p><a href="tel:7162981822">+91-123456790 </a></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-contact-info text-center">
                                <i class="fa fa-envelope"></i>
                                <h4 class="title"> Email Address </h4>
                                <p><a href="mailto:wecare@bloomnbuds.in"> wecare@bloomnbuds.in </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form">

                @if ($succ = session('success'))


                    <div style="position: fixed;right: 8px;z-index: 99999;top: 60px;width: 260px;" class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $succ }}</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                @if ($err = session('cterrs'))

                    <div style="position: fixed;right: 8px;z-index: 99999;top: 60px;width: 260px;" class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ $err }}</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="mt-4 row form-white"  id="ctformFrin" method="POST">
                    @csrf
                    <div class="form-group mb-3 col-lg-6">
                        <input type="text" class="form-control" id="ctformFrinfirstname" value="{{old('firstname')}}" name="firstname"
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
                        <input value="{{old('email')}}" type="text" class="form-control" id="ctformFrinemail" name="email"
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
                                class="fa fa-arrow-right ps-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Contact End-->
@endsection
