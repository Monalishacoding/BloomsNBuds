@extends('layouts.main')
@section('title') About Us @endsection
@section('body')

    <!--Page Banner Start-->
    <div class="page-banner" style="background-image: url(/assets/images/abg.png);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">About</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </div>
        </div>
    </div>
    <!--Page Banner End-->

    <!--About Start-->
    <div class="about-page-area section-padding">
        <div class="container">
            <figure>
                <div class="about-thumb text-center">
                    <img src="/assets/images/hand-bouquet.webp" style="width: 50%;" alt="">
                </div>
                <figcaption class="about-page-content text-center">
                    <h2 class="title">The remarkable distribution network of “BloomsNBuds”</h2>
                    <p>It’s been 35 years, “BloomsNBuds” under the key leadership of Jyoti Florist headed by Late Founder Mr.Bibhu Prasad Satpathy went on helping masses in Bhubaneswar to celebrate their special moments by delivering fresh flowers and fabulous gifts to their loved ones. “BloomsNBuds” was established in 1992 under the key strategic leadership of Jyoti Florist. From there on, “BloomsNBuds” grew to what it is today including the current gifting options that feature the choicest personalized gifts, cakes, chocolates along with artificial flowers fresh cut flowers and flower basket. The remarkable distribution network of “BloomsNBuds” with the leadership of Jyoti Florist and the sheer number of retail stores that we have, is something no other online florist and gift delivery service in Odisha and specially the retail networking chain in India can boast about and this is one of the biggest factors that differentiates us from the competition. We bank upon the smiles of our 5 million happy customers with the quality of service and consistency of service delivery provided across India and abroad. With your trust invested in our brand, “BloomsNBuds”, is the largest floral and gifting brand in India and abroad. Our master florists expert have quite brilliantly stimulated love and emotions together to roll out the best gifts for all occasions</p>
{{--                    <div class="about-signature">--}}
{{--                        <img src="assets/images/signature.png" alt="">--}}
{{--                    </div>--}}
                </figcaption>
            </figure>
        </div>
    </div>
    <!--About End-->

    @include('layouts.testimonials' , [
        'testimonials' => $testimonials
    ])
    @include('layouts.clients-logo')
@endsection
