@extends('layouts.main')
@section('title') About Us @endsection
@section('body')
    <div class="container my-3">
        <nav class="breadcrumb">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </nav>
    </div>
    <section id="abt-us" class="my-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>About Us</h1>
                </div>
                <div class="card-body">
                    <p>It’s been 35 years, “BloomsNBuds” under the key leadership of Jyoti Florist headed by Late Founder Mr.Bibhu Prasad Satpathy went on helping masses in Bhubaneswar to celebrate their special moments by delivering fresh flowers and fabulous gifts to their loved ones. “BloomsNBuds” was established in 1992 under the key strategic leadership of Jyoti Florist. From there on, “BloomsNBuds” grew to what it is today including the current gifting options that feature the choicest personalized gifts, cakes, chocolates along with artificial flowers fresh cut flowers and flower basket. The remarkable distribution network of “BloomsNBuds” with the leadership of Jyoti Florist and the sheer number of retail stores that we have, is something no other online florist and gift delivery service in Odisha and specially the retail networking chain in India can boast about and this is one of the biggest factors that differentiates us from the competition. We bank upon the smiles of our 5 million happy customers with the quality of service and consistency of service delivery provided across India and abroad. With your trust invested in our brand, “BloomsNBuds”, is the largest floral and gifting brand in India and abroad. Our master florists expert have quite brilliantly stimulated love and emotions together to roll out the best gifts for all occasions.</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1>Why Us?</h1>
                </div>
                <div class="card-body">
                    <p>Population says that we have gotten 30 years older but our creative bells are growing younger with each passing day. Inspired by the current trends, we keep coming up with new floral arrangements & gifts for almost every emotion, celebration and occasion. With our aim to ‘wow’ our customers and delivering smiles, we have added a little something that goes into making every 'delivery' special. We understand the importance of delivering the gifts on time or before time therefore we deliver flowers, flower baskets and other items at the doorstep of your loved ones with lightning speed in the shortest possible time - as fast as 1 Hours of ordering. This helps us to deliver fresh flowers every time you order a bouquet. We are committed to exceed your expectations whenever you order for a simple bouquet of flowers or an exquisite flower arrangement of exotic flowers. We understand the surprise element and emotional connection to the order and hence strive hard to deliver it with i love and care.</p>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.testimonials' , [
        'testimonials' => $testimonials
    ])
    @include('layouts.clients-logo')
@endsection
