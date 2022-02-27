@extends('layout.Admin')
@section('section')
<div class="container">
    <h1 class="text-3xl text-bold uppercase">edit for Accessories</h1>
    <form class="" method="post" action="{{route('accessories.update',$accessories->id)}}" enctype="multipart/form-data" data-parsley-validate>
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="" class="form-label">name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$accessories->name}}" >
        </div>
        <div class="mb-3">
          <label for="" class="form-label">price</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{$accessories->price}}" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$accessories->description}}" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1">image</label>
          <div style="width: 18rem;">
          <img src="{{ asset('uploads/students/' . $accessories->image) }}" alt="...." class="w-100">
          <input type="file" class="form-control" name="image">
          </div>
        </div>
        <a href="/dashboard" class="btn btn-danger">back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection
