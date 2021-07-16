<section id="testimonials">
    <div class="container">
        <div class="row testimonial-slider">

            <div class="col-md-4">
                <div class="tst-box">
                    <div class="pp-box">
                        <img src="/assets/images/tst.jpeg" alt="Testimonial">
                    </div>
                    <div class="det-box">
                        <h4>Your name</h4>
                        <h6>Designation / Company </h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi tempore, quisquam autem nulla
                            in labore reprehenderit? Itaque cupiditate qui reprehenderit in adipisci sit exercitationem
                            commodi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tst-box">
                    <div class="pp-box">
                        <img src="/assets/images/tst.jpeg" alt="Testimonial">
                    </div>
                    <div class="det-box">
                        <h4>Your name</h4>
                        <h6>Designation / Company </h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi tempore, quisquam autem nulla
                            in labore reprehenderit? Itaque cupiditate qui reprehenderit in adipisci sit exercitationem
                            commodi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tst-box">
                    <div class="pp-box">
                        <img src="/assets/images/tst.jpeg" alt="Testimonial">
                    </div>
                    <div class="det-box">
                        <h4>Your name</h4>
                        <h6>Designation / Company </h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi tempore, quisquam autem nulla
                            in labore reprehenderit? Itaque cupiditate qui reprehenderit in adipisci sit exercitationem
                            commodi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tst-box">
                    <div class="pp-box">
                        <img src="/assets/images/tst.jpeg" alt="Testimonial">
                    </div>
                    <div class="det-box">
                        <h4>Your name</h4>
                        <h6>Designation / Company </h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi tempore, quisquam autem nulla
                            in labore reprehenderit? Itaque cupiditate qui reprehenderit in adipisci sit exercitationem
                            commodi.</p>
                    </div>
                </div>
            </div>

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
