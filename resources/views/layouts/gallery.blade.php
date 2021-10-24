@extends('layouts.main')
@section('title') Gallery @endsection
@section('body')
<div class="blm-page-title-row" style="  background: linear-gradient(0deg, rgb(0 0 0 / 43%), rgb(0 0 0 / 60%)), url(/assets/images/events.jpg);">
    <div class="blm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Gallery</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{route('page.index')}}">Home</a>
                        </span>
                        <span>Gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Latest Photos
        </h2>
      
    </div>
    <div class="row tm-mb-90 tm-gallery">
        @foreach ($galleries as $gallery)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="/storage/{{$gallery->image}}" alt="{{$gallery->title}}" class="img-fluid">    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">{{$gallery->created_at->diffForHumans()}}</span>
                    <span>{{$gallery->title}}</span>
                </div>
            </div>
        @endforeach
              
    </div> <!-- row -->
   
</div> <!-- container-fluid, tm-container-content -->


@endsection
