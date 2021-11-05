@extends('layouts.main')
@section('title') FAQ @endsection
@section('body')
<div class="blm-page-title-row" style="  background: linear-gradient(0deg, rgb(0 0 0 / 43%), rgb(0 0 0 / 60%)), url(/assets/images/events.jpg);">
    <div class="blm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">FAQ</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{route('page.faq')}}">Home</a>
                        </span>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('layouts.clients-logo')

@endsection
