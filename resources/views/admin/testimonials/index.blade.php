@extends('admin.layouts')
@section('breadcrumb')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Testimonials</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.testimonials.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Testimonials</li>
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
               <h6>Testimonials</h6>
               <a href="{{route('admin.testimonials.create')}}" class="btn btn-primary btn-sm ml-auto">Add</a>
           </div>
           <div class="card-body">
            <table class="table table-striped">
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
                @foreach ($testimonials as $testimonials)
                <tr>
                  <th scope="row">{{$testimonials->id}}</th>
                  <td>{{$testimonials->title}}</td>
                  <td>{!! '<img src="/storage/'.$testimonials->image.'" width="60px" class="img-fluid">' !!}</td>
                  <td>{{$testimonials->status == 1 ? 'On' : 'OFF'}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <form action="{{route('admin.testimonials.delete' , $testimonials->id)}}" method="POST">
                            @csrf
                            <input type="submit" class="btn btn-primary btn-sm" value="Delete" >
                        </form>
                        <a href="{{route('admin.testimonials.edit' , $testimonials->id)}}" class="btn btn-primary btn-sm">Edit</a>
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
