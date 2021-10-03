@extends('layouts.main')
@section('title') About Us @endsection
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

<section class="blm-row about-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-8">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="ttm_single_image-wrapper">
                            <img class="img-fluid" src="/assets/images/hand-bouquet.webp" alt="About Us">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="pt-10 res-991-pl-0 res-991-pt-40">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h2 class="title">ABOUT US</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                    <p style="font-size: 1.2rem;">It’s been 35 years, “BloomsNBuds” under the key leadership of Jyoti Florist headed by Late Founder Mr.Bibhu Prasad Satpathy went on helping masses in Bhubaneswar to celebrate their special moments by delivering fresh flowers and fabulous gifts to their loved ones. “BloomsNBuds” was established in 1992 under the key strategic leadership of Jyoti Florist. From there on, “BloomsNBuds” grew to what it is today including the current gifting options that feature the choicest personalized gifts, cakes, chocolates along with artificial flowers fresh cut flowers and flower basket. The remarkable distribution network of “BloomsNBuds” with the leadership of Jyoti Florist and the sheer number of retail stores that we have, is something no other online florist and gift delivery service in Odisha and specially the retail networking chain in India can boast about and this is one of the biggest factors that differentiates us from the competition. We bank upon the smiles of our 5 million happy customers with the quality of service and consistency of service delivery provided across India and abroad. With your trust invested in our brand, “BloomsNBuds”, is the largest floral and gifting brand in India and abroad. Our master florists expert have quite brilliantly stimulated love and emotions together to roll out the best gifts for all occasions.</p>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>

    @include('layouts.testimonials' , [
        'testimonials' => $testimonials
    ])
    @include('layouts.clients-logo')
@endsection
