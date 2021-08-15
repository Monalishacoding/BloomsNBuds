@extends('admin.layouts')
@section('breadcrumb')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Update Category</li>
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
               <h6>Update Category</h6>
           </div>
           <div class="card-body">


               <form action="" method="post" enctype="multipart/form-data">

                    @csrf

                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Category Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Category Title" value="{{old('title', $category->title)}}">
                    </div>

                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" id="short_description" placeholder="Short Description" cols="30" rows="5" class="form-control">{{old('short_description' , $category->short_description)}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" >
                        @if ($category->image)
                            <img src="/storage/{{$category->image}}" width="120px" alt="">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status" {{$category->status == 1?'checked':''}}>
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
