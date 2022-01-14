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


<div class="container-fluid tm-container-content tm-mt-60" style="margin-top: 30px;">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Latest Photos
        </h2>
      
    </div>

    <div class="masonry" style="margin-bottom: 30px;">
        @foreach ($galleries as $gallery)
        <div class="mItem">
            <img src="/storage/{{$gallery->image}}">
          </div>
        @endforeach
    </div>

</div>

@endsection
