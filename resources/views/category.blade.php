@extends('layouts.main')
@section('title') {{$category->title}} @endsection
@section('body')
    <div class="container my-3">
        <nav class="breadcrumb">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                <li class="breadcrumb-item active"> {{$category->title}} </li>
            </ol>
        </nav>
    </div>
    <section id="abt-us" class="my-5 cards-2 section-gray">
        <div class="container">
            <div class="row">
                @forelse ($category->categoryList as $list)
                <div class="col-md-3">
                    <div class="card card-blog">
                        <div class="card-image">
                            <a
                                data-lightbox="image-{{$list->id}}"
                                href="/storage/{{$list->image}}"
                                data-title="{{$list->title}}"
                                >
                                <img class="img img-raised" src="/storage/{{$list->image}}"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="table">
                            <h5 class="category">{{$list->title}}</h5>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center">
                    No Result Found
                </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
