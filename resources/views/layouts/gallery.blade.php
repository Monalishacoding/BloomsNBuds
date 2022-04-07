@extends('layouts.main')
@section('title') Gallery @endsection
@section('body')
    <!--Page Banner Start-->
    <div class="page-banner" style="background-image: url(/assets/images/abg.png);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">About</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </div>
        </div>
    </div>



<div class="container tm-container-content tm-mt-60" style="margin-top: 30px;">
    <div class="masonry" style="margin-bottom: 30px;">
        @foreach ($galleries as $gallery)
        <div class="mItem">
            <img src="/storage/{{$gallery->image}}">
          </div>
        @endforeach
    </div>
</div>

@endsection
