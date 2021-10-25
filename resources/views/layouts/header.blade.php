<div class="main-header border-shadow">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="me-4 d-inline-block py-1">
                    <a class="me-3" href="mailto:wecare@bloomnbuds.in" target="_top"><i class="far fa-envelope me-2 fa-flip-horizontal theme-s"></i>wecare@bloomnbuds.in</a>
                    <a class="me-3" href=""><i class="fas fa-map-marker-alt theme-s me-2"></i>Bhubaneswar, Odisha</a>
                    </div>
                    <div class="d-inline-block py-1">
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fa fa-phone me-2 fa-flip-horizontal theme-s"></i> +91-9776789933</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light  main-header">
        <div class="container d-flex">
            <a class="navbar-brand" href="{{route('page.index')}}">
                <img width="200px" src="/assets/images/logo-final.png" alt="{{env('APP_NAME')}}">
            </a>
            <div class="d-flex flex-row ">
                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                    <span class="menubar-box">
                        <span class="menubar-inner"></span>
                    </span>
                </div>
                <!-- menu -->
                <nav class="main-menu menu-mobile" id="menu">
                    <ul class="menu">
                        <li class="mega-menu-item">
                            <a href="{{ route('page.index') }}"  >Home</a>
                        </li>
                        <li class="mega-menu-item">
                            <a  href="{{route('page.about')}}">About</a>
                        </li>
                        <li class="mega-menu-item ic">
                            <a href="#" class="mega-menu-link ic">Services</a>
                            <ul class="mega-submenu active">
                                <li><a href="">Exclusive Flower Bouquet</a></li>
                                <li><a href="">Garlands</a></li>
                                <li><a href="">Car Decoration</a></li>
                                <li><a href="">Cakes</a></li>
                                <li><a href="">Plants</a></li>
                                <li class="mega-menu-item ic">
                                    <a href="#" class="mega-menu-link ic">Events</a>
                                    <ul class="mega-submenu">
                                        <li><a href="">Wedding Events</a></li>
                                        <li><a href="">Corporate Events</a></li>
                                        <li><a href="">Birthday Parties</a></li>
                                        <li><a href="">Funeral Ceremonies</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-menu-item">
                            <a 
                                href="{{route('page.gallery')}}" 
                                
                            >Gallery</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header_btn">
                <a class="btn btn-primary py-3" href="{{route('page.contact')}}">Contact Us</a>
            </div>
        </div>
    </nav>
</div>
