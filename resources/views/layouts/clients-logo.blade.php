<section id="clientLogo" class="df-sec-half">
    <div class="container">
        <div class="row clientslogo-slider">
            <div class="col-md-3">
                <div class="logobox text-center">
                    <img src="/assets/images/logos/1.png" alt="Logo 1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="logobox text-center">
                    <img src="/assets/images/logos/2.png" alt="Logo 2">
                </div>

            </div>
            <div class="col-md-3">
                <div class="tst-box">
                    <div class="logobox text-center">
                        <img src="/assets/images/logos/3.png" alt="Logo 3">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logobox text-center">
                    <img src="/assets/images/logos/4.png" alt="Logo 4">
                </div>

            </div>
            <div class="col-md-3">
                <div class="tst-box">
                    <div class="logobox text-center">
                        <img src="/assets/images/logos/5.png" alt="Logo 5">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tst-box">
                    <div class="logobox text-center">
                        <img src="/assets/images/logos/6.png" alt="Logo 6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script type="text/javascript">
        $('.clientslogo-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            // dots: true,
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
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
@endpush
