@extends('layouts.main')

@section('title') Our Services @endsection

@section('body')
<div class="container my-3">
    <nav>
        <ol class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Our Services</li>
        </ol>
    </nav>
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