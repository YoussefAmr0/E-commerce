@extends('layout.Admin')
@section('section')
<div class="container">
    <h1 class="text-3xl text-bold uppercase">Add for blog</h1>
    <form class="" method="post" action="{{route('blog.store')}}" enctype="multipart/form-data" data-parsley-validate>
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="title">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1">image</label>
          <input type="file" class="form-control" name="image">
        </div>
        <a href="/dashboard" class="btn btn-danger">back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection
