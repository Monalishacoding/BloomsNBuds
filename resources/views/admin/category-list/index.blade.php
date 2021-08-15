@extends('admin.layouts')
@section('breadcrumb')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Category List</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
@endsection
@section('content')

<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-header d-flex justify-content-between">
               <h6>Categories</h6>
               <a href="{{route('admin.categoriy-list.create')}}" class="btn btn-primary btn-sm ml-auto">Create</a>
           </div>
           <div class="card-body">
            {{-- <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td>{{$category->title}}</td>
                  <td>{!! '<img src="/storage/'.$category->image.'" width="60px" class="img-fluid">' !!}</td>
                  <td>{{$category->status == 1 ? 'On' : 'OFF'}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <form action="{{route('admin.categories.delete' , $category->id)}}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-primary btn-sm" value="Delete" >
                        </form>
                        <a href="{{route('admin.categories.edit' , $category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                      </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table> --}}
           </div>
       </div>
   </div>
</div>
@endsection
