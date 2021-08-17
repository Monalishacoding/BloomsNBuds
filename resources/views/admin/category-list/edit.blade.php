@extends('admin.layouts')
@section('breadcrumb')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Category List </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Category List</li>
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
               <h6>Edit  Category List</h6>
           </div>
           <div class="card-body">
               <form action="" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title"> Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{old('title' , $categorylist->title)}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" placeholder="Short Description" cols="30" rows="5" class="form-control">{{old('description', $categorylist->description)}}</textarea>
                    </div>

                    <select name="category_id" id="category_id" class="form-control mb-3">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ $category->id == $categorylist->id ? 'selected' : '' }}>{{$category->title}}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" >
                        @if ($categorylist->image)
                            <img src="/storage/{{$categorylist->image}}" width="120px" alt="">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status" {{$categorylist->status == 1?'checked':''}}>
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
