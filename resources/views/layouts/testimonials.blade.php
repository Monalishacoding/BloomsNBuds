<section id="testimonials" class="df-sec">
    <div class="container">
        <div class="row testimonial-slider">

            @foreach ($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="tst-box">
                        <div class="pp-box">
                            <img src="/storage/{{$testimonial->image}}" alt="{{$testimonial->title}}">
                        </div>
                        <div class="det-box">
                            <h4>{{ucfirst($testimonial->title)}}</h4>
                            <h6>{{$testimonial->designation}} / {{$testimonial->company_name}} </h6>
                            <p>{{$testimonial->feedback}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@push('scripts')
    <script type="text/javascript">
        $('.testimonial-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            // prevArrow: '<i class="fas fa-arrow-left prevArrowCustom">',
            //     nextArrow: '<i class="fas fa-arrow-right nextArrowCustom">'
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
@endpush
