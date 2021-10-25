<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title' , env('APP_NAME'))</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;700&family=Josefin+Sans:wght@300;400;500&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/style-v1.45.css">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/assets/css/slick-theme.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/lightbox.css">
</head>

<body>

    @include('layouts.header')
    @yield('body')
    @include('layouts.footer')

    {{-- Whatsapp --}}
    <div class="wpF">
        <a href="https://wa.me/{{ env('WP_NUMB') }}">
            <img src="/assets/images/wp.png" alt="Click to chat">
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/lightbox.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javscript" src="/assets/js/script.js"></script>
    <script>

var menu = {
    initialize: function() {
        this.Menuhover();
    },

    Menuhover : function(){
        var getNav = $("nav.main-menu"),
            getWindow = $(window).width(),
            getHeight = $(window).height(),
            getIn = getNav.find("ul.menu").data("in"),
            getOut = getNav.find("ul.menu").data("out");

        if ( matchMedia( 'only screen and (max-width: 1200px)' ).matches ) {

            // Enable click event
            $("nav.main-menu ul.menu").each(function(){

                // Dropdown Fade Toggle
                $("a.mega-menu-link", this).on('click', function (e) {
                    e.preventDefault();
                    var t = $(this);
                    t.toggleClass('active').next('ul').toggleClass('active');
                });
                 // Megamenu style
                $(".megamenu-fw", this).each(function(){
                    $(".col-menu", this).each(function(){
                        $(".title", this).off("click");
                        $(".title", this).on("click", function(){
                            $(this).closest(".col-menu").find(".menu-col").stop().toggleClass('active');
                            $(this).closest(".col-menu").toggleClass("active");
                            return false;
                            e.preventDefault();

                        });

                    });
                });
            });
        }
    },
};


$('.btn-show-menu-mobile').on('click', function(e){
    $(this).toggleClass('is-active');
    $('.menu-mobile').toggleClass('show');
    return false;
    e.preventDefault();
});

// Initialize
$(document).ready(function(){
    menu.initialize();

});



        $(window).scroll(function() {
            var sticky = $('.main-header'),
                scroll = $(window).scrollTop();

            if (scroll >= 100) sticky.addClass('fixed-header');
            else sticky.removeClass('fixed-header');
        });

        $(document).ready(function() { $("html").niceScroll();}
);
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
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
