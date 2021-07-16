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

    {{-- Gallery --}}
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="title-box text-center mb-5">
                <h2 class="heading-title">Some of our Pictures</h4>
            </div>
            <div class="row gallery-container">
                @for ($i = 0; $i < 8; $i++)
                    <div class="col-md-3 mb-4">
                        <div class="box">
                            <img src="/assets/images/combo.png" alt="Combo">
                            <div class="data-box">
                                <h5>Title</h5>     
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, adipisci tempore? Voluptatum corporis delectus praesentium.</p>          
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- Why us --}}
    <section id="whyUs" >
        <div class="container">
            <div class="wrapper py-5">
                <h2>Why Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quae repellendus repudiandae explicabo molestias, numquam harum animi! Dicta deserunt cum ratione rem. Modi, quia dolores libero ipsam neque voluptate fuga, corrupti veniam exercitationem esse, est laborum nam suscipit pariatur minus maiores totam accusamus eos dignissimos optio? Inventore veritatis ullam fugiat?</p>
                <a href="{{route('page.contact')}}" class="btn bloom-btn">Contact Us</a>
            </div>
        </div>
    </section>
    @include('layouts.testimonials')

    @include('layouts.clients-logo')
@endsection