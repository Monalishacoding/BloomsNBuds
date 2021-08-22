@extends('admin.layouts')
@section('breadcrumb')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gallery</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.galleries.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Galleries</li>
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
               <h6>Galleries</h6>
               <a href="{{route('admin.galleries.create')}}" class="btn btn-primary btn-sm ml-auto">Create</a>
           </div>
           <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Status</th>
                  <th scope="col">Is Ft?</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($galleries as $gallery)
                <tr>
                  <th scope="row">{{$gallery->id}}</th>
                  <td>{{$gallery->title}}</td>
                  <td>{!! '<img src="/storage/'.$gallery->image.'" width="60px" class="img-fluid">' !!}</td>
                  <td>{{$gallery->status == 1 ? 'On' : 'OFF'}}</td>
                  <td>{{$gallery->is_featured == 1 ? 'On' : 'OFF'}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <form action="{{route('admin.galleries.delete' , $gallery->id)}}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-primary btn-sm" value="Delete" >
                        </form>
                        <a href="{{route('admin.galleries.edit' , $gallery->id)}}" class="btn btn-primary btn-sm">Edit</a>
                      </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
           </div>
       </div>
   </div>
</div>
@endsection
