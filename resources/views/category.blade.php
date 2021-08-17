@extends('layouts.main')
@section('title') {{$category->title}} @endsection
@section('body')
    <div class="container my-3">
        <nav>
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                <li class="breadcrumb-item active"> {{$category->title}} </li>
            </ol>
        </nav>
    </div>
    <section id="abt-us" class="my-5">
        <div class="container">
            <div class="row">
                @forelse ($category->categoryList as $list)
                    <div class="col-md-3">
                        <a href="/storage/{{$list->image}}"
                            data-lightbox="image-{{$list->id}}"
                            data-title="{{$list->title}}"
                            class="card">
                            <img src="/storage/{{$list->image}}" alt="">
                            <div class="card-body text-center">
                                <h4 class="card-title nav-link ">{{$list->title}}</h4>
                            </div>
                        </a>
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
