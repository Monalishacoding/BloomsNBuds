@extends('admin.layouts')
@section('breadcrumb')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create Gallery Image</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.galleries.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Create Gallery Image</li>
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
               <h6>Create Gallery Image</h6>
           </div>
           <div class="card-body">
               <form action="" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="title">Image Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" id="short_description" placeholder="Short Description" cols="30" rows="5" class="form-control">{{old('short_description')}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" >
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status">
                    </div>
                    <div class="form-group">
                        <label for="is_featured">Is Featured ?</label>
                        <input type="checkbox" name="is_featured" id="is_featured">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
           </div>
       </div>
   </div>
</div>
@endsection
