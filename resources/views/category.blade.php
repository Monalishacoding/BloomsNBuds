@extends('layouts.main')
@section('title') Category @endsection
@section('body')
    <div class="container my-3">
        <nav>
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
    </div>
    <section id="abt-us" class="my-5">
       Category
    </section>
    
@endsection
