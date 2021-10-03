@extends('layouts.main')
@section('title') Contact Us @endsection
@section('body')
<div class="blm-page-title-row" style="  background: linear-gradient(0deg, rgb(0 0 0 / 43%), rgb(0 0 0 / 60%)), url(/assets/images/events.jpg);">
    <div class="blm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="#">Home</a>
                        </span>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="contactUs" class="my-5">
    <div class="container">
        <div class="row g-0 ct-box">
            <div class="col-md-6">
                <div class="addr-box">
                    <h2 class="fw-bolder">Main Office</h2>
                    <p class="fw-bold">Bhubaneswar, Odisha</p>
                    <a class="me-3" href="mailto:wecare@bloomnbuds.in" target="_top"><i
                            class="far fa-envelope me-2 fa-flip-horizontal theme-s"></i>wecare@bloomnbuds.in</a>
                    <a class="me-3" href=""><i class="fas fa-map-marker-alt theme-s me-2"></i>+91-123456790</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-6 bg-light h-100">
                    <h3>Complete the form below. We will respond as soon as possible.</h3>

                    @if ($succ = session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $succ }}</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    @if ($err = session('cterrs'))

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
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
                            value="{{old('lastname')}}"id="ctformFrinlastname" name="lastname"
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
                                    class="fas fa-arrow-right ps-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
