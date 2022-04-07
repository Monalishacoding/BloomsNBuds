@extends('layouts.main')
@section('title') Car Decorations @endsection
@section('body')
    <!--Page Banner Start-->
    <div class="page-banner" style="background-image: url(/assets/images/abg.png);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">Car Decorations</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Car Decorations</li>
                </ol>
            </div>
        </div>
    </div>



<div class="container tm-container-content tm-mt-60" style="margin-top: 30px;">
    <div class="masonry" style="margin-bottom: 30px;">
        <div class="mItem">
            <img src="/assets/images/car_decorations/1.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/2.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/3.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/4.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/5.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/6.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/7.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/8.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/9.jpg">
        </div>
        <div class="mItem">
            <img src="/assets/images/car_decorations/10.jpg">
        </div>
    </div>

     {{-- --------------
    | (@^@) (*_@) |
     ------------- --}}

</div>

@endsection
