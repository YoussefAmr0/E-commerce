@extends('layout.Admin')
@section('section')
    <div class="container px-6 mx-auto ">
        <h3 class="text-3xl text-bold uppercase">Product List For sales</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 ">
            @foreach ($sale as $sales)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md ">
                    <div class="con">
                        <img src="{{ asset('uploads/students/' . $sales->image) }}" class="card-img-top position-relative" alt="Norway" style="width:100%;">
                        <div class="text-block">
                            <p class="sale">{{ $sales->sale_percent }}</p>
                        </div>
                      </div>
                    <div class="flex items-end justify-end w-full bg-cover ">
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $sales->name }}</h3>
                        <p class="">{{ $sales->description }}</p>
                        <span class="mt-2 text-gray-500 text-decoration-line-through">${{ $sales->old_price }}</span>
                        <br>
                        <span class="mt-2 text-gray-500">${{ $sales->new_price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ Auth::id() }}" name="id">
                            <input type="hidden" value="{{ $sales->name }}" name="name">
                            <input type="hidden" value="{{ $sales->new_price }}" name="price">
                            <input type="hidden" value="{{ $sales->image }}"
                                name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <style>

        .con {
      position: relative;
    }
    
    .text-block {
      position: absolute;
      bottom: 0;
      background-color: red;
      color: white;
      padding-left: 20px;
      padding-right: 20px;
    }
    </style>
@endsection
