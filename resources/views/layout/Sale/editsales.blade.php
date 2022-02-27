@extends('layout.Admin')
@section('section')
<div class="container">
    <h1 class="text-3xl text-bold uppercase">edit for sales</h1>
    <form class="" method="post" action="{{route('sales.update',$sale->id)}}" enctype="multipart/form-data" data-parsley-validate>
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{$sale->name}}" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$sale->description}}" >
        </div>
        <label for="" class="form-label">old price</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="old_price" value="{{$sale->old_price}}" >
        <label for="" class="form-label">new price</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="new_price" value="{{$sale->new_price}}" >
        <label for="" class="form-label">sale percentage</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="sale_percent" value="{{$sale->sale_percent}}" >
        <div class="mb-3">
          <label for="exampleInputPassword1">image</label>
          <div style="width: 18rem;">
          <img src="{{ asset('uploads/students/' . $sale->image) }}" alt="...." class="w-100">
          <input type="file" class="form-control" name="image">
          </div>
        </div>
      <a href="/dashboard" class="btn btn-danger">back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection
