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
                            <li><a href="">Careers</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light  main-header">
        <div class="container">
            <a class="navbar-brand" href="{{route('page.index')}}">
                <img width="140px" src="/assets/images/logo.png" alt="{{env('APP_NAME')}}">
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item px-3">
                        <a class="nav-link {{Route::is('/')}}" aria-current="page" href="{{ route('page.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{route('page.about')}}">About</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('page.services')}}">Services</a>
                    </li>
                    {{-- <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('page.clients')}}">Clients</a>
                    </li> --}}
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('page.contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
