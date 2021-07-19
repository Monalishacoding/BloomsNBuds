<section id="clientLogo" class="df-sec-half">
    <div class="container">
        <div class="row clientslogo-slider">
            <div class="col-md-3">
                <div class="logobox text-center">
                    <img src="/assets/images/logo.svg" alt="Logo 1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="logobox text-center">
                    <img src="/assets/images/logo.svg" alt="Logo 1">
                </div>

            </div>
            <div class="col-md-3">
                <div class="tst-box">
                    <div class="logobox text-center">
                        <img src="/assets/images/logo.svg" alt="Logo 1">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="logobox text-center">
                    <img src="/assets/images/logo.svg" alt="Logo 1">
                </div>

            </div>
            <div class="col-md-3">
                <div class="tst-box">
                    <div class="logobox text-center">
                        <img src="/assets/images/logo.svg" alt="Logo 1">
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
                        // centerPadding: '40px',
                        slidesToShow: 2
                    }
                }
            ]
        });
    </script>
@endpush
