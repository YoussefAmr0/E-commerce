@extends('layout.Admin')
@section('section')
    <div class="container px-6 mx-auto">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            {{-- accessories section  --}}
            @foreach ($accessories as $accessoriess)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="{{ asset('uploads/students/' . $accessoriess->image) }}" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $accessoriess->name }}</h3>
                        <p class="">{{ $accessoriess->description }}</p>
                        <span class="mt-2 text-gray-500">${{ $accessoriess->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $accessoriess->id }}" name="id">
                            <input type="hidden" value="{{ $accessoriess->name }}" name="name">
                            <input type="hidden" value="{{ $accessoriess->price }}" name="price">
                            <input type="hidden" value="{{ asset('uploads/students/' . $accessoriess->image) }}"
                                name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{-- footwear section  --}}
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
                            <input type="hidden" value="{{ $footwears->id }}" name="id">
                            <input type="hidden" value="{{ $footwears->name }}" name="name">
                            <input type="hidden" value="{{ $footwears->price }}" name="price">
                            <input type="hidden" value="{{ asset('uploads/students/' . $footwears->image) }}"
                                name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
            {{-- men section  --}}
            @foreach ($men as $mens)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="{{ asset('uploads/students/' . $mens->image) }}" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $mens->name }}</h3>
                        <p class="">{{ $mens->description }}</p>
                        <span class="mt-2 text-gray-500">${{ $mens->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $mens->id }}" name="id">
                            <input type="hidden" value="{{ $mens->name }}" name="name">
                            <input type="hidden" value="{{ $mens->price }}" name="price">
                            <input type="hidden" value="{{ asset('uploads/students/' . $mens->image) }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
            {{-- sale section  --}}
            @foreach ($sale as $sales)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md ">
                    <div class="con">
                        <img src="{{ asset('uploads/students/' . $sales->image) }}"
                            class="w-full max-h-60 position-relative" alt="Norway" style="width:100%;">
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
                            <input type="hidden" value="{{ $sales->id }}" name="id">
                            <input type="hidden" value="{{ $sales->name }}" name="name">
                            <input type="hidden" value="{{ $sales->new_price }}" name="price">
                            <input type="hidden" value="{{ asset('uploads/students/' . $sales->image) }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{-- women section  --}}
            @foreach ($women as $womens)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="{{ asset('uploads/students/' . $womens->image) }}" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $womens->name }}</h3>
                        <p class="">{{ $womens->description }}</p>
                        <span class="mt-2 text-gray-500">${{ $womens->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $womens->id }}" name="id">
                            <input type="hidden" value="{{ $womens->name }}" name="name">
                            <input type="hidden" value="{{ $womens->price }}" name="price">
                            <input type="hidden" value="{{ asset('uploads/students/' . $womens->image) }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <style>
        /* div of image */
        .con {
            position: relative;
        }
        /* sale percent */
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
