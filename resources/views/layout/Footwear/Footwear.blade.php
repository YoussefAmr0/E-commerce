@extends('layout.Admin')
@section('section')
    <div class="container px-6 mx-auto">
        <h3 class="text-3xl text-bold uppercase">Product List For Footwear</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($footwear as $footwears)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="{{ asset('uploads/students/' . $footwears->image) }}" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $footwears->name }}</h3>
                        <p class="">{{ $footwears->description }}</p>
                        <span class="mt-2 text-gray-500">${{ $footwears->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ Auth::id() }}" name="id">
                            <input type="hidden" value="{{ $footwears->name }}" name="name">
                            <input type="hidden" value="{{ $footwears->price }}" name="price">
                            <input type="hidden" value="{{ $footwears->image }}"
                                name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
