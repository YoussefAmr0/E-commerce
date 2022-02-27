@extends('layout.Admin')
@section('section')
<div class="container">
    <h1 class="text-3xl text-bold uppercase">show for Accessories</h1>
    <form class="" method="post" >
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$accessories->name}}" readonly>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">price</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{$accessories->price}}" readonly>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$accessories->description}}" readonly>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1">image</label>
          <div style="width: 18rem;">
          <img src="{{ asset('uploads/students/' . $accessories->image) }}" alt="...." class="w-100">
          </div>
        </div>
      </form>
      <a href="/dashboard" class="btn btn-danger">back</a>
    </div>
@endsection
