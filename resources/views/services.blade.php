@extends('layouts.main')

@section('title') Our Services @endsection

@section('body')
<div class="blm-page-title-row" style="  background: linear-gradient(0deg, rgb(0 0 0 / 43%), rgb(0 0 0 / 60%)), url(/assets/images/events.jpg);">
    <div class="blm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">About Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="#">Home</a>
                        </span>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Services --}}
<section id="services-box" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2 mb-4">
                <div class="card">
                    <img src="/assets/images/flower.png" alt="Flower">
                    <div class="card-body">
                        <h6 class="card-title"><a href="#" class="nav-link stretched-link">Exotic Flowers</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-2 mb-4">
                <div class="card">
                    <img src="/assets/images/flower.png" alt="Flower">
                    <div class="card-body">
                        <h6 class="card-title"><a href="#" class="nav-link stretched-link">Hand Bouquet</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-2 mb-4">
                <div class="card">
                    <img src="/assets/images/flower.png" alt="Flower">
                    <div class="card-body">
                        <h6 class="card-title"><a href="#" class="nav-link stretched-link">Podium Arrangements</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-2 mb-4">
                <div class="card">
                    <img src="/assets/images/flower.png" alt="Flower">
                    <div class="card-body">
                        <h6 class="card-title"><a href="#" class="nav-link stretched-link">Customized Cakes</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-2 mb-4">
                <div class="card">
                    <img src="/assets/images/flower.png" alt="Flower">
                    <div class="card-body">
                        <h6 class="card-title"><a href="#" class="nav-link stretched-link">Gifts</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-2 mb-4">
                <div class="card">
                    <img src="/assets/images/flower.png" alt="Flower">
                    <div class="card-body">
                        <h6 class="card-title"><a href="#" class="nav-link stretched-link">Event</a></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
