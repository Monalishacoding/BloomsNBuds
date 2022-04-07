<!--Header Section Start-->
<div class="header-section d-none d-lg-block " style="border-bottom: 1px solid #eee;">
    <div class="main-header">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="{{route('page.index')}}"><img src="/assets/images/logo-final.png"
                                                               alt="{{env('APP_NAME')}}"></a>
                    </div>
                </div>
                <div class="col-lg-7 position-static">
                    <div class="site-main-nav">
                        <nav class="site-nav">
                            <ul>
                                <li><a href="{{ route('page.index') }}">Home</a></li>
                                <li><a href="{{route('page.about')}}">About</a></li>
                                <li><a href="{{route('page.gallery')}}">Gallery</a></li>

                                <li class="menu-item-has-children">
                                    <a href="#">Services</a>

                                    <ul class="sub-menu">
                                        <li><a href="">Exclusive Flower Bouquet</a></li>
                                        <li><a href="{{route('page.garland')}}">Garlands</a></li>
                                        <li><a href="{{route('page.car_decorations')}}">Car Decoration</a></li>
                                        <li><a href="">Cakes</a></li>
                                        <li><a href="">Plants</a></li>
                                        <li>
                                            <a href="#">Events</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Wedding Events</a></li>
                                                <li><a href="">Corporate Events</a></li>
                                                <li><a href="">Birthday Parties</a></li>
                                                <li><a href="">Funeral Ceremonies</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('page.contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header-meta-info">
                        <div class="header-search">
                            <form action="#">
                                <input type="text" placeholder="Search our store ">
                                <button><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Header Section End-->


<!--Header Mobile Start-->
<div class="header-mobile d-lg-none"  style="border-bottom: 1px solid #eee;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="header-logo">
                    <a href="/"><img src="/assets/images/logo-final.png" alt=""></a>
                </div>
            </div>
            <div class="col-6">
                <div class="header-meta-info">
                    <div class="header-account">
                        <div class="header-account-list mobile-menu-trigger">
                            <button id="menu-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Header Mobile End-->

<!--Header Mobile Menu Start-->
<div class="header-mobile-menu d-lg-none">

    <a href="javascript:void(0)" class="mobile-menu-close">
        <span></span>
        <span></span>
    </a>

    <div class="header-meta-info">
        <div class="header-search">
            <form action="#">
                <input type="text" placeholder="Search our store ">
                <button><i class="icon-search"></i></button>
            </form>
        </div>
    </div>

    <div class="site-main-nav">
        <nav class="site-nav">
            <ul class="navbar-mobile-wrapper">
                <li><a href="{{ route('page.index') }}">Home</a></li>
                <li><a href="{{route('page.about')}}">About</a></li>
                <li><a href="{{route('page.gallery')}}">Gallery</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>

                    <ul class="sub-menu">
                        <li><a href="">Exclusive Flower Bouquet</a></li>
                        <li><a href="{{route('page.garland')}}">Garlands</a></li>
                        <li><a href="{{route('page.car_decorations')}}">Car Decoration</a></li>
                        <li><a href="">Cakes</a></li>
                        <li><a href="">Plants</a></li>
                        <li>
                            <a href="#">Events</a>
                            <ul class="sub-menu">
                                <li><a href="">Wedding Events</a></li>
                                <li><a href="">Corporate Events</a></li>
                                <li><a href="">Birthday Parties</a></li>
                                <li><a href="">Funeral Ceremonies</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{route('page.contact')}}">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="header-social">
        <ul class="social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
    </div>

</div>
<!--Header Mobile Menu End-->

<div class="overlay"></div>
<!--Overlay-->
