@extends('layouts.main')
@section('title') Contact Us @endsection
@section('body')
    <div class="container my-3">
        <nav>
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{ route('page.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </nav>
    </div>
    <section id="contactUs" class="my-5">
        <div class="container">
            <div class="row g-0 ct-box">
                <div class="col-md-6">
                    <div class="addr-box">
                        <h2 class="fw-bolder">Main Office</h2>
                        <p class="fw-bold">Near Patna Junction, Kankarbagh, Patna, Bihar, 801505</p>
                        <a class="me-3" href="mailto:customer@bloomnbuds.in" target="_top"><i
                                class="far fa-envelope me-2 fa-flip-horizontal theme-s"></i>customer@bloomnbuds.in</a>
                        <a class="me-3" href=""><i class="fas fa-map-marker-alt theme-s me-2"></i>+91-7779834191</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-6 bg-light h-100">
                        <h3>Complete the form below. We will respond as soon as possible.</h3>
                        <form class="mt-4 row form-white" id="ctformFrin" method="POST">
                            <input type="hidden" name="_token" value="y57WsSChO5YsTMatFN6jsjDicNiyr3eGj8Yfd5eR">
                            <div class="form-group mb-3 col-lg-6">
                                <input type="text" class="form-control" id="ctformFrinfirstname" name="firstname"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <input type="text" class="form-control" id="ctformFrinlastname" name="lastname"
                                    placeholder="Last Name">
                            </div>
                            <div class="form-group mb-3 col-12">
                                <input type="text" class="form-control" id="ctformFrinemail" name="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group mb-4 col-12">
                                <textarea class="form-control" id="msg" name="ctformFrinmsg"
                                    placeholder="Enquiry Description" rows="5"></textarea>
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
