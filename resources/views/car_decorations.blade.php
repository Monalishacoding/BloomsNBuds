@extends('layouts.main')
@section('title') Car Decorations @endsection
@section('body')
<div class="blm-page-title-row" style="  background: linear-gradient(0deg, rgb(0 0 0 / 43%), rgb(0 0 0 / 60%)), url(/assets/images/events.jpg);">
    <div class="blm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Car Decorations</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{route('page.index')}}">Home</a>
                        </span>
                        <span>Car Decorations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid tm-container-content tm-mt-60" style="margin-top: 30px;">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Latest Photos
        </h2>
      
    </div>

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
