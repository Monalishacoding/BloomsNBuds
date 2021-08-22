@extends('admin.layouts')
@section('breadcrumb')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit  Testimonial</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.testimonials.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Update  Testimonial</li>
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
               <h6>Update  Testimonial</h6>
           </div>
           <div class="card-body">


               <form action="" method="post" enctype="multipart/form-data">

                    @csrf

                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{old('title', $testimonial->title)}}">
                    </div>

                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" value="{{old('designation' ,$testimonial->designation )}}">
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name" value="{{old('company_name' ,$testimonial->company_name)}}">
                    </div>

                    <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea name="feedback" id="feedback" placeholder="Feedback" cols="30" rows="5" class="form-control">{{old('feedback' , $testimonial->feedback)}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" >
                        @if ($testimonial->image)
                            <img src="/storage/{{$testimonial->image}}" width="120px" alt="">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status" {{$testimonial->status == 1?'checked':''}}>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>

                </form>
           </div>
       </div>
   </div>
</div>
@endsection
