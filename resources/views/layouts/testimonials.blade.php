<!--Testimonial Start-->
<div class="testimonial-area" style="background-image: url(/assets/images/testimonial-bg.jpg);">
    <div class="container">
        <div class="swiper-container testimonial-active">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="single-testimonial text-center">
                        <p>Felis eu pede mollis pretium. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt. Cras dapibus lingua. felis eu pede mollis pretium.</p>

                        <div class="testimonial-author">
                            <img src="/storage/{{$testimonial->image}}" alt="{{$testimonial->title}}">
                            <span class="author-name">{{$testimonial->designation}} / {{$testimonial->company_name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Add Arrows -->
            <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
        </div>
    </div>
</div>
<!--Testimonial End-->
