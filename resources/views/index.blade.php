@extends('layouts.main')

@section('title') Home | BloomNBuds @endsection

@section('body')
    {{-- Slider --}}
    @include('layouts.slider')

    {{-- Featured Services --}}
    <section id="ftServices" class="my-5 py-3">
        <div class="container">
            <div class="boxes-container">
                <div class="box">
                    <a href="#" class="img-box">
                        <img src="/assets/images/flower.png" alt="Flowers">
                    </a>
                    <h3 class="my-3"> <a href="#"> Flowers</a></h3>
                </div>
                <div class="box">
                    <a href="#" class="img-box">
                        <img src="/assets/images/cakes.png" alt="Cakes">
                    </a>
                    <h3 class="my-3"><a href="#">Cakes</a></h3>
                </div>
                <div class="box">
                    <a href="#" class="img-box">
                        <img src="/assets/images/events.png" alt="Events">
                    </a>
                    <h3 class="my-3"><a href="#">Events</a></h3>
                </div>
                <div class="box">
                    <a href="#" class="img-box">
                        <img src="/assets/images/combo.png" alt="Combo">
                    </a>
                    <h3 class="my-3"><a href="#">Combo</a></h3>
                </div>
            </div>
        </div>
    </section>

@endsection