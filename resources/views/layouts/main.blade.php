<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bloomsnbuds">
    <title>@yield('title' , env('APP_NAME'))</title>
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/v1/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="/assets/v1/css/style.min.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">
    <style>


        .masonry {
            /*column-count: 4;*/
            column-count: 4;
            column-gap: 16px;
        }

        .masonry img {
            width: 100%;
        }

        .masonry .mItem {
            /* display: inline-block; */
            margin-bottom: 16px;
            width: 100%;
        }

        @media (max-width: 1199px) {
            .masonry {
                column-count: 3;
            }
        }

        @media (max-width: 991px) {
            .masonry {
                column-count: 2;
            }
        }

        @media (max-width: 767px) {
            .masonry {
                column-count: 1;
            }
        }

    </style>
    @stack('css')
</head>

<body>

<div class="main-wrapper">
    <!--Top Notification Start-->
    <div class="top-notification-bar text-center d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="me-4 d-inline-block">
                            <a class="me-3 text-white" href="mailto:wecare@bloomnbuds.in" target="_top"><i
                                    class="fa fa-envelope me-2 fa-flip-horizontal theme-s"></i>wecare@bloomnbuds.in</a>
                            <a class="me-3 text-white" href=""><i class="fa fa-map-marker-alt theme-s me-2"></i>Bhubaneswar,
                                Odisha</a>
                        </div>
                        <div class="d-inline-block">
                            <ul class="list-unstyled">
                                <li><a href="https://wa.me/919776789933"><i
                                            class="fa fa-whatsapp fa-lg me-2 fa-flip-horizontal theme-s"></i>
                                        +91-9776789933</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Top Notification End-->
    @include('layouts.header')

    @yield('body')
    @include('layouts.footer')
</div>


{{-- Whatsapp --}}
{{--    <div class="wpF">--}}
{{--        <a href="https://wa.me/{{ env('WP_NUMB') }}">--}}
{{--            <img src="/assets/images/wp.png" alt="Click to chat">--}}
{{--        </a>--}}
{{--    </div>--}}

<!-- JS
    ============================================ -->

<!-- Modernizer JS -->
<script src="/assets/v1/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="/assets/v1/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/v1/js/vendor/popper.min.js"></script>
<script src="/assets/v1/js/vendor/bootstrap.min.js"></script>

<script src="/assets/js/lightbox.min.js"></script>

<!-- Plugins JS -->
<script src="/assets/v1/js/plugins/swiper-bundle.min.js"></script>
<script src="/assets/v1/js/plugins/jquery.countdown.min.js"></script>
<script src="/assets/v1/js/plugins/jquery.elevateZoom.min.js"></script>
<script src="/assets/v1/js/plugins/select2.min.js"></script>
<script src="/assets/v1/js/plugins/ajax-contact.js"></script>

<!-- Main JS -->
<script src="/assets/v1/js/main.js"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/60ef0159d6e7610a49ab4436/1faipqi0d';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

@yield('scripts')
@stack('scripts')
</body>

</html>
