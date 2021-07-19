<div class="main-header border-shadow">

    <nav class="navbar navbar-expand-lg navbar-light  main-header">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img width="140px" src="/assets/images/logo.png" alt="{{env('APP_NAME')}}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item px-3">
                        <a class="nav-link active" aria-current="page" href="{{ route('page.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{route('page.about')}}">About</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('page.services')}}">Services</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('page.clients')}}">Clients</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{route('page.contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
