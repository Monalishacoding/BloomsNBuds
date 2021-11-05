@extends('layouts.main')
@section('title') FAQ @endsection
@section('body')
<div class="blm-page-title-row" style="  background: linear-gradient(0deg, rgb(0 0 0 / 43%), rgb(0 0 0 / 60%)), url(/assets/images/events.jpg);">
    <div class="blm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">FAQ</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{route('page.faq')}}">Home</a>
                        </span>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid tm-container-content tm-mt-60" style="margin-top: 30px;">
    <div class="container">
        <div class="accordion" id="faq">
                            <div class="card accordion-item">
                                <div class="card-header "  id="faqhead1">
                                    <a href="#" class="btn btn-header-link" data-bs-toggle="collapse" data-bs-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">What if you attempt delivery and no one’s home?</a>
                                </div>
        
                                <div id="faq1" class="accordion-collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                        We assess each delivery situation on an individual basis.  If the delivery location looks safe with a protected area to keep the bouquet shaded and away from the elements, we will leave it there and follow up with a phone call to the recipient.  If we are unable to leave it at the residence, our next step is to try to leave it with a neighbor.  If both these options are unavailable we then leave a tag on the recipients door letting them know we were by with a special delivery.  We ask that they call us to arrange a new delivery or they may come to our shop and pick up their bouquet. 
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2">How do I make my flowers last longer?</a>
                                </div>
        
                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                        The best way to keep your flowers fresh is first to always keep the water level of the container as full as possible.  Flowers not only take up water through the end of the stem, but also through the sides of the stems themselves.  Keep your bouquet in a cool location in your home, away from direct sunlight or electronics and appliances that give off heat.  With each bouquet we include a complimentary care tag and a packet of floral preservative. Simply follow the directions on the back of the packet to help extend the life of your flowers.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header accordion-item" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3">Speaking of floral preservative, what’s in that stuff?</a>
                                </div>
        
                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                        Floral Preservatives are made up of three basic components.  Sugar, for nutrition, an acidifier, to lower the water’s pH, and a class of compounds that act as stem unpluggers.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header accordion-item" id="faqhead4">
                                    <a href="#" class="btn btn-header-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq4"
                                    aria-expanded="true" aria-controls="faq4">Where do your flowers come from?</a>
                                </div>
        
                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                        We order our flowers from wholesalers on the east coast who buy straight from the growers.  Fresh cut varieties you see in shops today are grown all over the cold and perfect growth conditions in Bangalore and India.
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
</div>

    @include('layouts.clients-logo')

@endsection
